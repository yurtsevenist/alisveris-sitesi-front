<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Contracts\Auth\Guard;
use App\Models\Sepet;
use Illuminate\Support\Facades\View;
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
    public function boot(Guard $auth)
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
       
            View::composer('*', function ($view) use($auth) {
                $sepet=0;
                if($auth->user())
                $sepet=Sepet::where('user_id',$auth->user()->id)->get()->sum('adet');
                $view->with('sepet',$sepet);                          
            });
        
      
      
    
    }
    

}
