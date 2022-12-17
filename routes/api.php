<?php

use App\Http\Controllers\storeController;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(storeController::class)->group(function () {
    Route::get('/getStores', 'getStores');
    Route::post('/saveStore', 'saveStore');
    Route::get('/showStore/{id}', 'showStore');
    Route::put('/updateStore/{id}', 'updateStore');
    Route::delete('/deleteStore/{id}', 'deleteStore');
});

Route::controller(productController::class)->group(function () {
    Route::get('/getProducts', 'getProducts');
    Route::post('/saveProduct', 'saveProduct');
    Route::get('/showProduct/{id}', 'showProduct');
    Route::put('/updateProduct/{id}', 'updateProduct');
    Route::delete('/deleteProduct/{id}', 'deleteProduct');
    Route::get('/getProductsWithStores', 'getProductsWithStores');
});
