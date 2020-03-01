<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Billing\CreditPaymentGateway;
use App\Channel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function(){
            if (request()->has('credit')) {
            return new CreditPaymentGateway('usd');
            }
             return new BankPaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191); // Update defaultStringLength
        View::composer(['channel.index','post.index'],function($view){
            $view->with('channels', Channel::orderBy('name')->get());
        });
    }
}
