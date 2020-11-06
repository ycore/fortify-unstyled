<?php

namespace Ycore\FortifyUI;

use Illuminate\Support\ServiceProvider;
use Ycore\FortifyUI\Commands\UnstyledUICommand;

class UnstyledUIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/unstyled/resources/views' => base_path('resources/views'),
            ], 'unstyled-views');

            $this->commands([
                UnstyledUICommand::class,
            ]);
        }
    }
}
