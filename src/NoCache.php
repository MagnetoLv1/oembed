<?php


namespace MagnetoLv1\Oembed;

use Illuminate\Contracts\Cache\Store;

/**
 * 캐시 설정이 안됐을 경우 사용 할 CacheS tore
 * Class NoCache
 * @package MagnetoLv1\Oembed
 */
class NoCache implements Store
{

    public function get($key)
    {
    }

    public function many(array $keys)
    {
    }

    public function put($key, $value, $seconds)
    {
    }

    public function putMany(array $values, $seconds)
    {
    }

    public function increment($key, $value = 1)
    {
    }

    public function decrement($key, $value = 1)
    {
    }

    public function forever($key, $value)
    {
    }

    public function forget($key)
    {
    }

    public function flush()
    {
    }

    public function getPrefix()
    {
    }

    /**
     * Get an item from the cache, or store the default value.
     *
     * @param string $key
     * @param \DateTimeInterface|\DateInterval|float|int $minutes
     * @param \Closure $callback
     * @return mixed
     */
    public function remember($key, $minutes, \Closure $callback)
    {
        return $callback();
    }
}