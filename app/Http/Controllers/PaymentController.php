<?php

namespace App\Http\Controllers;

use App\FactoryPattern\PaymentGatewayFactory;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        try {
            $gateway = (new PaymentGatewayFactory())->getPaymentType($request->type);
            $gateway->processPayment($request->amount);
            return response()->json([
                'success' => true,
                'message' => 'Payment has been processed with ' . $request->type . ', amount is ' . $request->amount
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
        }

    }
}
