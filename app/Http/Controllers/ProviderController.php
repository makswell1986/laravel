<?php

namespace App\Http\Controllers;



use App\Services\ProviderService;
use App\Utilities\Notification;
use Illuminate\Http\Request;


class ProviderController extends Controller
{
 public function show (Request $request, ProviderService $service, Notification $not){
   
    
dd($not);
    /* dd($service->start($request->all(),'plus'));  */

 }  
}
