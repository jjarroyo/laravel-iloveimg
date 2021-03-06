<?php

namespace JJArroyo\IloveImgLaravel;

use Illuminate\Support\ServiceProvider;
use Iloveimg\Iloveimg;

class LaravelIloveImgServiceProvider extends ServiceProvider
{


    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/../config/iloveimg.php',
            'iloveimg'
        );

        $this->app->bind('iloveimg', function ($app) {
            $config = $this->app->make('config')->get('iloveimg');
            return new Iloveimg($config['project_key'], $config['secret_key']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/iloveimg.php';
       
        $this->publishes([$configPath => config_path('iloveimg.php')], 'config');
    }

}