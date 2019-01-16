<?php

namespace smart_shop\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use smart_shop\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('name','Smart Shop');
        View::composer('frontEnd.includes.header',function($view){
            $activeCategories = Category::where('publication_status',1)->get();
            $view->with('activeCategories',$activeCategories);
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
