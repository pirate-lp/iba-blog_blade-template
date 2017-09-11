<?php

namespace LILPLP\IBAsBlog;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\View\Factory as View;
// use Illuminate\Contracts\Routing\ResponseFactory as Response;
use Illuminate\Support\Facades\Response as Response;

use GuzzleHttp;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Response;

class IBAsBlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->publishes([
        	__DIR__.'/config/iba-blog.php' => config_path('iba-blog.php'),
		]);
		
        //
//         $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
		// require __DIR__.'/routes/routes.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'iba-blog');
        
        $this->publishes([
        	__DIR__.'/public' => public_path('lil-plp/iba-blog'),
			], 'public');
		
		$this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
