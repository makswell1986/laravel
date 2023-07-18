<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentInterface;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;

class PaypalController extends Controller
{

    public function show(Request $request,  $amount){


dd($request);

     /* dd(response()->json(['data']=$amount->send($request->pay))); */

    }
}
