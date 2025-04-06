<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


// interface
use App\Interface\PaymentGateway;
// classes
use App\Classpayment\PaypalGateway;
use App\Classpayment\StripeGateway;

class Mimodelos extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         $this->app->bind(PaymentGateway::class, function () {
            if (request()->pepe === 's') {
                return new StripeGateway();
            }

          
                return new PaypalGateway();
        
        });
   
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
