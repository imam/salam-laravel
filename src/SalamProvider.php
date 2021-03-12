<?php

namespace Imam\Salam;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
            __DIR__.'/Publish/Layouts' => $this->app->resourcePath('views/vendor/salam'),
            __DIR__.'/Publish/Public' => public_path('vendor/salam/'),
        ]);
    }    
    
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        Inertia::share('current_user', fn (Request $request) => $request->user()
            ? $request->user()
            : null
        );
    }
}