<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function index($id){
        $carts = Cart::where('user_id', $id)->get();
        
        foreach($carts as $cart){
            $cart->title = Product::find($cart->product_id)->name;
            $cart->image_url = Product::find($cart->product_id)->image_url;
            $cart->price = Product::find($cart->product_id)->price;
            $cart->desc = Product::find($cart->product_id)->description;
            $cart->stock = Product::find($cart->product_id)->stock;
        }

        return view('frontend.cart', compact('carts'));
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('alert', 'Product has been deleted from cart!');
    }
}
