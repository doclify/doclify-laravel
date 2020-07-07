<?php

declare(strict_types=1);

namespace Doclify\Laravel;

use Doclify\Client;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class DoclifyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any other events for your application.
     */
    public function boot()
    {
        $configFile = (string) \realpath(__DIR__.'/config/doclify.php');

        $this->publishes([
            $configFile => $this->app->make('path.config').'/doclify.php',
        ]);

        $this->mergeConfigFrom($configFile, 'doclify');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Client::class, function (Application $app): Client {
            $config = $app['config'];

            $client = new Client($config['doclify']);

            return $client;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [Client::class];
    }

    /**
     * {@inheritdoc}
     */
    public function getIntegrationName(): string
    {
        return 'doclify.laravel';
    }

    /**
     * {@inheritdoc}
     */
    public function getIntegrationPackageName(): string
    {
        return 'doclify/laravel';
    }
}
