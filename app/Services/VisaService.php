<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;

class VisaService implements PaymentInterface
{

    public function send($amount){

        return "Visa: ".$amount*10;
        
        }

}
