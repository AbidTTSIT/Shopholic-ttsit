<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\Admin\Products\ProductController;
use App\Http\Controllers\Admin\Products\BrandController;
use App\Http\Controllers\Admin\Products\BrandImageController;
use App\Http\Controllers\Admin\Products\CategoryController;
use App\Http\Controllers\Admin\Products\SubcategoryController;
use App\Http\Controllers\Admin\Products\CategoryImageController;

use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\UserProductController;

use App\Http\Controllers\Admin\Products\ProductImageController;
use Illuminate\Support\Facades\Artisan;


Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'Index')->name('home');
    Route::get('/category/{id}', 'show')->name('category.show');
    Route::get('/category/{id}/modal', 'modal')->name('category.modal');
});

Route::controller(UserProductController::class)->group(function(){
   Route::get('product/view/{id}', 'productDetails')->name('product.details');
   Route::get('buy-now/{id}', 'redirectToAffiliate')->name('buy.now');
   Route::get('compare/{id}/product', 'redirectCompare')->name('compare.id');
   Route::get('product-search', 'productSearch')->name('product-search');
});


Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin.auth')->name('dashboard');
    Route::get('/dashboard/some-route', action: [DashboardController::class, 'someMethod'])->middleware('admin.auth');

    Route::any('/login', [DashboardController::class, 'login'])->name('login');
    Route::post('/check-user-send-otp', [AuthController::class, 'sendOtp'])->name('send.otp.admin');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-chart-record', [DashboardController::class, 'getUserData']);

    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});


Route::get('/auth/google', [SocialLoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);

// Route::get('/auth/facebook', [SocialLoginController::class, 'redirectToFacebook']);
// Route::get('/auth/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);

Route::delete('product-image/{image}', [ProductController::class, 'deleteImage'])->name('product.image.delete');
// routes/web.php
Route::delete('/brand-images/{image}', [BrandImageController::class, 'destroy'])->name('brand-images.destroy');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::resource('products', controller: ProductController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('brands', BrandController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('categories', CategoryController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('subcategories', SubcategoryController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::delete('/category-images/{categoryImage}', [CategoryImageController::class, 'destroy'])->name('category-images.destroy');



Route::delete('/product-images/{id}', [ProductImageController::class, 'destroy'])->name('product-images.destroy');



