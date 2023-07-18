<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;

class QiwiService implements PaymentInterface
{
    public function send($amount){

        return "Qiwi: ".$amount*5;
        
        }
}
