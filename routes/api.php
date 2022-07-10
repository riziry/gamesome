<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;

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

Route::get('/', [ProductAPIController::class, 'index']);

Route::get('/item', [ProductAPIController::class, 'allItem']);
Route::get('/item/search', [ProductAPIController::class, 'search']);

Route::get('/item/{id}', [ProductAPIController::class, 'clicked_item']);
Route::post('/item/{id}/add_to_cart', [ProductAPIController::class, 'add_to_cart']);
Route::post('/item/{id}/add_to_wishlist', [ProductAPIController::class, 'add_to_wishlist']);

Route::get('/wishlist/{uID}', [WishlistController::class, 'index']);
// Route::post('/wishlist',[WishlistController::class, 'add']);
Route::delete('/wishlist/{id}/delete',[WishlistController::class, 'delete']);
Route::post('/wishlist/{id}/add_to_cart', [WishlistController::class, 'add_to_cart']);

Route::get('/cart/{uID}', [CartController::class, 'index']);
Route::delete('/cart/{id}/delete', [CartController::class, 'delete']);
Route::get('/cart/{uID}/checkout', [CartController::class, 'checkout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');