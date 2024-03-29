<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\AnnoucementController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::redirect('/','/en');

Route::prefix('{locale}')->group(function () {

Route::get('/', [AnnoucementController::class,'show'])->name('all');
Route::get('/category/{elem}', [CategoryController::class,'show'])->name('category');
Route::get('/form', [FormController::class,'store'])->name('form');
Route::get('/get-form', [FormController::class,'show'])->name('get-form');
/* Route::get('?page=', [FormController::class,'show'])->name('page'); */
Route::get('/provider', [ProviderController::class,'show']);

});