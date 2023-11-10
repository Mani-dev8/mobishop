<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\userAccount;
use App\Models\cart;
use App\Models\cartitems;

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
        view()->composer('*', function ($view) {
            $u_id = userAccount::where('u_mail', Session::get('user'))->value('u_id');
            $c_id = cart::where('u_id', $u_id)->value('c_id');
            $cartitems = cartitems::where('c_id', $c_id)->sum('qty');
            $qty = $cartitems;
            $i = 0;
            // foreach ([123,123] as $key) {
            //     $i+=$key;
            // }
            $view->with('session', $qty);
            $view->with('c_id', $c_id);
        });
        View::share('name', "hello");
    }
}
