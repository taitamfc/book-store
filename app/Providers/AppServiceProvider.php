<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\Paginator;

use App\View\Composers\CartComposer;
use App\View\Composers\CategoryComposer;

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
        Paginator::useBootstrap();
        
        View::share('current_url',Route::current());
        View::composer('frontend.includes.theme.cart', CartComposer::class);
        View::composer('frontend.includes.theme.category-menu', CategoryComposer::class);
    }
}
