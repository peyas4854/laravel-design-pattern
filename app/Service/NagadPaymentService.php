<?php

namespace App\Service;

use App\FactoryPattern\PaymentGateway;

class NagadPaymentService implements PaymentGateway
{
    public function processPayment($amount)
    {
        // TODO : Implement Nagad api call here to process payment

    }

}
