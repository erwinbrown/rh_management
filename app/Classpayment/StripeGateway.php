<?php

namespace App\Classpayment;
use App\Interface\PaymentGateway;

class StripeGateway implements PaymentGateway
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function doPayment ()
    {
       echo "pago por stripe";
    }
}
