<?php

use App\Http\Controllers\AgenceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Service;

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

Route::group(['middleware'=>'api','prefix'=>'auth'],function($router){

    //connection routes
    Route::post('/register',[AuthController::class, 'register']);
    Route::post('/login',[AuthController::class, 'login']);
    Route::post('/logout',[AuthController::class, 'logout']);
    Route::post('/update-profile/{id}',[AuthController::class, 'update']);
    Route::get('/profile',[AuthController::class, 'profile']);

    //subscription routes
    Route::apiResource('subscriptions', SubscriptionController::class);

    //agence routes
    Route::apiResource('agences', AgenceController::class);

    //service routes
    Route::apiResource('services', ServiceController::class)->except(['serviceListByAgenceId']);
    Route::get('/services-by-agence/{id}',[ServiceController::class, 'serviceListByAgenceId']);
});

