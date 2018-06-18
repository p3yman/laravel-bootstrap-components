<?php

namespace Peyman3d\BootstrapComponents;

use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
	    $this->loadViewsFrom(__DIR__.'/resources/views', 'bootstrap');
	
	    // Publish packages
	    $this->publishes([
		    __DIR__.'/resources/views' => resource_path('views/vendor/bootstrap'),
	    ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
