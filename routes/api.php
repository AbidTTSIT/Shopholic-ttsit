<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\AuthCon troller;

// User Api
use App\Http\Controllers\Api\User\ProductController;
use App\Http\Controllers\Api\User\AuthController;

Route::controller(AuthController::class)->prefix('user')->group(function(){
    Route::get('me', 'me');
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::controller(ProductController::class)->prefix('user')->group(function(){
    Route::get('products', 'products');
    Route::get('product/{id}', 'productDetails');
    Route::get('categories', 'categories');
});



// Route::post('/user-register', [AuthController::class, 'register']);
// Route::post('/user-login', [AuthController::class, 'login']);

Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('verify-code', [AuthController::class, 'verifyCode']);
Route::post('reset-password', [AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user-profile', [AuthController::class, 'profile']);
    Route::post('/user-update-profile', [AuthController::class, 'updateProfile']);
    Route::post('/user-logout', [AuthController::class, 'logout']);
});


Route::controller(ProductController::class)->group(function(){
   Route::get('buy-now/{id}', 'redirectToAffiliate')->name('buy.now');
});
