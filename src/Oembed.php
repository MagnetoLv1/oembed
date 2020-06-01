<?php

namespace MagnetoLv1\Oembed;

use Embera\Embera;
use Embera\html\IgnoreTags;
use Embera\html\ResponsiveEmbeds;
use Embera\Http\OembedClient;
use Embera\ProviderCollection\DefaultProviderCollection;
use Illuminate\Contracts\Cache\Factory as CacheFactory;


/**
 * Class Oembed
 */
class Oembed
{
    /**
     * The Cache Repository.
     *
     * @var Array
     */
    protected $config;
    /**
     * The Cache Repository.
     *
     * @var CacheFactory
     */
    protected $cache;
    /**
     * The Cache Repository.
     *
     * @var OembedProviderCollection
     */
    protected $collections;

    /**
     * @var
     */
    protected $expire;

    /** @var array Closures to be used on oembed responses */
    protected $filters = [];

    /**
     * The constructor.
     *
     * @param Embed $embed
     */
    public function __construct($config, CacheFactory $cache)
    {
        $this->config = array_merge([
            'cache' => [
                'store' => null,
                'expire' => -1,     //캐시비활성화
            ],
            'config' => [],
        ], $config ?: []);

        /*
         * 캐시 store
         */
        $store = $this->config['cache']['store'];
        /*
         * 쿠키만료시간
         */
        $this->expire = $this->config['cache']['expire'];

        $this->cache = $this->expire ? $cache->store($store) : new NoCache();
        /*
         * Provider 등록
         */
        if (empty($this->config['providers'])) {
            $this->collections = new DefaultProviderCollection($this->config['config']);
        } else {
            $this->collections = new OembedProviderCollection($this->config['config']);
            $this->collections->registerProviders($this->config['providers']);
        }
    }

    /**
     * Get info from a specify url.
     *
     * @param $url
     */
    /**
     * provider 에서 제공하는 oembed 값을 제공
     *
     * @param $url string
     * @return array
     */
    public function get($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return [];
        }

        return $this->cache->remember($url, $this->expire, function () use ($url) {
            $embera = new Embera($this->config['config'], $this->collections);
            foreach ($this->filters as $closure) {
                $embera->addFilter($closure);
            }
            $oembeds = $embera->getUrlData($url);
            $oembed = optional($oembeds)[$url];
            return $oembed ? $oembed : [];
        });
    }


    /**
     * Adds a filter to the oembed response
     *
     * @param callable $closure
     * @return void
     */
    public function filter(callable $closure)
    {
        $this->filters[] = $closure;
        return $this;
    }


    /**
     * Embeds known/available services into the given text.
     *
     * @param string $text
     * @return string
     */
    public function autoEmbed($text)
    {
        $hash = md5($text);
        return $this->cache->remember($hash, $this->expire, function () use ($text) {
            $embera = new Embera($this->config['config'], $this->collections);
            foreach ($this->filters as $closure) {
                $embera->addFilter($closure);
            }
            return $embera->autoEmbed($text);
        });
    }

    /**
     * Returns the oembed response from the given data.
     *
     * @param array|string $urls An array with urls or a string with urls.
     * @return array
     */
    public function getUrlData($urls)
    {
        $key = implode(",", $urls);
        return $this->cache->remember($key, $this->expire, function () use ($urls) {
            $embera = new Embera($this->config['config'], $this->collections);
            foreach ($this->filters as $closure) {
                $embera->addFilter($closure);
            }
            return $embera->getUrlData($urls);
        });
    }

}