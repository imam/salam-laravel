<?php

namespace Imam\Salam;

use Illuminate\Support\ServiceProvider;

class SalamProvider extends ServiceProvider
{
/**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Layouts' => $this->app->resourcePath('views/vendor/salam'),
            __DIR__.'/Public' => public_path('vendor/salam/')
        ]);
    }    
    
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
    }
}