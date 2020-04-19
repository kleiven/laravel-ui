<?php

namespace Kleiven\Laravel\Ui;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Kleiven\Laravel\Ui\Presets\Vue;

class LaravelUiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        UiCommand::macro('spa-bootstrap-cover', function (UiCommand $command) {
            Vue::install($this->app->getNamespace());
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
