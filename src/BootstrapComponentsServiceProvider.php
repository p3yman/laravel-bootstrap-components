<?php

namespace Peyman3d\BootstrapComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
	protected $views_dir = __DIR__.'/resources/views';
	
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
	    $this->loadViewsFrom($this->views_dir, 'bootstrap');
	
	    // Publish packages
	    $this->publishes([
		    $this->views_dir => resource_path('views/vendor/bootstrap'),
	    ]);
	    
	    // Register aliases
	    $this->registerAliases();
    }
    
    public function registerAliases(){
	
	    $views = File::allFiles($this->views_dir);
	    
	    foreach ($views as $view){
	    	$name = str_replace(".blade.php","", $view->getFilename());
		    Blade::component("bootstrap::$name", 'b'.ucfirst($name));
	    }
    
    }
}
