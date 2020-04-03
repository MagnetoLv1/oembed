<?php


namespace MagnetoLv1\Oembed;


use Embera\ProviderCollection\ProviderCollectionAdapter;

class OembedProviderCollection extends ProviderCollectionAdapter
{
    /** inline {@inheritdoc} */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }


    /** inline {@inheritdoc} */
    public function registerProviders($names)
    {
        foreach ((array)$names as $name) {
            if (class_exists($name)) {
                $hosts = $name::getHosts();
                foreach ($hosts as $h) {
                    $this->providers[$h] = $name;
                }
            }
        }
    }
}