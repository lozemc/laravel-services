<?php

namespace Lozemc\Services\Providers;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\ServiceProvider;

class MakeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands('command.make.service');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(
            'command.make.service',
            function ($app) {
                return new \Lozemc\Services\Console\ServiceMakeCommand($app['files']);
            }
        );
    }
}
