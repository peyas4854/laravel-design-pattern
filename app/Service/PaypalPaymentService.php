<?php

namespace App\Service;

use App\FactoryPattern\PaymentGateway;

class PaypalPaymentService implements PaymentGateway
{
    public function processPayment($amount)
    {
        // TODO : Implement Paypal api call here to process payment

    }

}
