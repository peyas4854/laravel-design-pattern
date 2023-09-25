<?php

namespace App\Service;

use App\FactoryPattern\PaymentGateway;

class BkashPaymentService implements PaymentGateway
{
    public function processPayment($amount)
    {
        // TODO : Implement Bkash api call here to process payment

    }
}
