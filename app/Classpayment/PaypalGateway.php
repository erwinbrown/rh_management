<?php

namespace App\Classpayment;


use App\Interface\PaymentGateway;

class PaypalGateway implements PaymentGateway

{ 
    
    public function __construct()
    {
        //
    }

    public function doPayment ()
    {
       echo "pago por Paypal";
    }
}
