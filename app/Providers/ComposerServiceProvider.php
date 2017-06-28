<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
        

    public function boot()
    {

        View::composer(['partials._main_nav', 'partials._sidebar'], function($view)
        {
            $categories = Category::orderBy('name')->with('groups')->get();

            return $view->with(compact('categories'));
        });


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
