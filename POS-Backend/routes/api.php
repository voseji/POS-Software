<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductsController::class,'index']);
Route::post('/products', [ProductsController::class,'create']);
Route::get('/products/{productCode}', [ProductsController::class,'show']);
Route::patch('/products/{productCode}', [ProductsController::class,'edit']);
Route::delete('/products/{productCode}', [ProductsController::class,'destroy']);


Route::get('/stock', [StockController::class,'index']);
Route::post('/stock', [StockController::class,'create']);
Route::get('/stock/{stockId}', [StockController::class,'show']);
Route::patch('/stock/{stockId}', [StockController::class,'edit']);
Route::delete('/stock/{stockId}', [StockController::class,'destroy']);


Route::get('/sales', [SalesController::class,'index']);
Route::post('/sales', [SalesController::class,'create']);
Route::get('/sales/{salesId}', [SalesController::class,'show']);
Route::patch('/sales/{salesId}', [SalesController::class,'edit']);
Route::delete('/sales/{salesId}', [SalesController::class,'destroy']);

Route::get('/customer', [CustomerController::class,'index']);
Route::post('/customer', [CustomerController::class,'create']);
Route::get('/customer/{customerId}', [CustomerController::class,'show']);
Route::patch('/customer/{customerId}', [CustomerController::class,'edit']);
Route::delete('/customer/{customerId}', [CustomerController::class,'destroy']);
