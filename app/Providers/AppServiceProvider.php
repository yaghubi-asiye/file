<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Basket;
use App\Category;

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
      view()->composer('layouts.partials.header', function($view){
        $categories = Category::where('chid', 0)->get();
        $cats = Category::where('chid', '!=', 0)->get();
        $auth = auth()->user();
        if($auth != null){
          $baskets=Basket::where('user_id', auth()->user()->id)->where('status', '0')->get();
          $view->with([
            'baskets'=>$baskets,
            'categories'=>$categories,
            'cats'=>$cats,

          ]);
        }else{
          $view->with([
            'baskets'=>null,
            'categories'=>$categories,
            'cats'=>$cats,
          ]);
        }
      });
    }
}
