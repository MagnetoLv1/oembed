<?php


namespace MagnetoLv1\Oembed\Facades;

use Illuminate\Support\Facades\Facade;

class Oembed extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \MagnetoLv1\Oembed\Oembed::class;
    }

}