<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalePageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);

Route::prefix('category')->group(function() {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('foodbeverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('beautyhealth');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('homecare');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('babykid');
});
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/sales', [SalePageController::class, 'sales']);