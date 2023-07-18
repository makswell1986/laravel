<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QiwiController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\PaypalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/api/paypal',function (){

    return 'hi';

});

/* 
Route::get('/api/paypal',[PaypalController::class,'show']);
Route::post('/api/qiwi',[QiwiController::class,'show']);
Route::post('/api/visa',[VisaController::class,'show']); */