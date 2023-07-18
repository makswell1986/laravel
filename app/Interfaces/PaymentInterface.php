<?php

namespace App\Interfaces;

interface PaymentInterface
{
protected $amount;
    public function send($amount);

}
