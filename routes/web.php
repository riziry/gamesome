<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Models\wishlist;
use App\Http\Controllers\WishlistController;

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

Route::get('/item/{id}', [ProductController::class, 'clicked_item']);

Route::get('/wishlist', [WishlistController::class, 'index']);
Route::post('/wishlist',[WishlistController::class, 'add']);

Route::get('/cart', function () {
    return view('frontend.cart');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
