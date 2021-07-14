<?php namespace JosKoomen\GuzzleHttp;

use Illuminate\Support\ServiceProvider;

class GuzzleClientServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    protected $package_name = 'joskoomen-guzzle-client';

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind any implementations.
        $this->app->bind('joskoomen_guzzle_client', GuzzleClientFactory::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
