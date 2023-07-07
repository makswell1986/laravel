<?php

namespace App\Http\Controllers;



use App\Services\ProviderService;
use Illuminate\Http\Request;


class ProviderController extends Controller
{
 public function show (Request $request, ProviderService $service){
   
    

    dd($service->start($request->all(),'plus')); 

 }  
}
