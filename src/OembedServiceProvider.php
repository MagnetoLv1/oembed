<?php namespace MagnetoLv1\Oembed;

use Illuminate\Support\ServiceProvider;

/**
 * Class OembedServiceProvider
 */
class OembedServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the package.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/oembed.php' => config_path('oembed.php'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Oembed::class, function ($app) {
            $oembed = $app['config']['oembed'];
            return new Oembed($oembed, $app['cache']);
        });
    }


}