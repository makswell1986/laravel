<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentInterface;

use Illuminate\Http\Request;

class PaypalController extends Controller
{

    public function show(Request $request, PaymentInterface $amount){

     dd(response()->json(['data']=$amount->send($request->pay)));

    }
}
