<?php

use App\Http\Controllers\storeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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
});
