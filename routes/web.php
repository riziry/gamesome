<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/item', [ProductController::class, 'item']);
Route::get('/item/search', [ProductController::class, 'search']);

Route::get('/item/{id}', [ProductController::class, 'clicked_item']);
Route::post('/item/{id}/add_to_cart', [ProductController::class, 'add_to_cart']);
Route::post('/item/{id}/add_to_wishlist', [ProductController::class, 'add_to_wishlist']);
Route::put('/item/{id}/checkout', [ProductController::class, 'checkout']);

Route::get('/wishlist/{uID}', [WishlistController::class, 'index']);
// Route::post('/wishlist',[WishlistController::class, 'add']);
Route::delete('/wishlist/{id}/delete',[WishlistController::class, 'delete']);
Route::post('/wishlist/{id}/add_to_cart', [WishlistController::class, 'add_to_cart']);

Route::get('/cart/{uID}', [CartController::class, 'index']);
Route::delete('/cart/{id}/delete', [CartController::class, 'delete']);
Route::delete('/cart/{uID}/checkout', [CartController::class, 'checkout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
