<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //View::share('category', $category_info);
         View::composer('front_end.includes.main_menu', function ($view) {
             $category_info = Category::where('publication_status', 1)->get();
            $view->with('all_published_category',$category_info);
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
