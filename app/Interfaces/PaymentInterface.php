<?php

namespace App\Interfaces;

interface PaymentInterface
{

    public function send($amount);

}
