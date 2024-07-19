<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionUserController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/app', function () {
    return view('app');
})->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login'); // Assurez-vous d'avoir une vue auth.login
})->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');




Route::get('/subscription-users', [SubscriptionUserController::class, 'index']);
Route::get('/subscription-users/{id}', [SubscriptionUserController::class, 'show']);
Route::post('/subscription-users', [SubscriptionUserController::class, 'store']);
Route::put('/subscription-users/{id}', [SubscriptionUserController::class, 'update']);
Route::delete('/subscription-users/{id}', [SubscriptionUserController::class, 'destroy']);

