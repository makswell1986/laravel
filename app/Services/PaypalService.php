<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;

class PaypalService implements PaymentInterface
{

public function send($amount){

return "PayPal: ".$amount*2;

}

}
