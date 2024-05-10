<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApiController;
use app\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->group(function(){
Route::post('create',[App\Http\Controllers\ApiController::class,'createProduct']);
Route::get('foodlist',[App\Http\Controllers\ApiController::class,'getProducts']);
Route::get('foods/{id}/details',[App\Http\Controllers\ApiController::class,'getProductDetails']);
Route::post('foods/{id}/update',[App\Http\Controllers\ApiController::class,'updateProductDetails']);
Route::delete('foods/{id}/delete',[App\Http\Controllers\ApiController::class,'deleteProductDetails']);
});
Route::post('signup',[App\Http\Controllers\AuthController::class,'signup']);
Route::post('login',[App\Http\Controllers\AuthController::class,'login']);