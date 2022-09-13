<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = new \Twig\Loader\FilesystemLoader('C:\Users\Ishan\OneDrive - EV Software Solutions Pvt Ltd\Documents\Projects\Project1\resources\views');
        $twig = new \Twig\Environment($loader, [
            'cache' => 'C:\Users\Ishan\OneDrive - EV Software Solutions Pvt Ltd\Documents\Projects\Project1\public\cache',
        ]);

        $this->app->singleton(\Twig\Environment::class , fn()=>$twig);
    }
}
