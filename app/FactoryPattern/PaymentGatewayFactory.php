<?php

namespace App\FactoryPattern;

use App\Service\BkashPaymentService;
use App\Service\NagadPaymentService;
use App\Service\PaypalPaymentService;

class PaymentGatewayFactory
{
    public function getPaymentType(string $type)
    {
        return match ($type) {
            'bkash' => new BkashPaymentService(),
            'nagad' => new NagadPaymentService(),
            'paypal' => new PaypalPaymentService(),
            default => throw new \InvalidArgumentException('Invalid Payment Type')
        };

    }

}
