<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
return view('welcome');
});
Route::view('/', 'welcome');
Route::post('/auth', [SiteController::class, 'auth']);
Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'index']);
