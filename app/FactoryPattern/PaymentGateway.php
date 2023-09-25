<?php

namespace App\FactoryPattern;

interface PaymentGateway
{
    public function processPayment($amount);

}
