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

        $total_price = 0;
        
        foreach($carts as $cart){
            $cart->title = Product::find($cart->product_id)->name;
            $cart->image_url = Product::find($cart->product_id)->image_url;
            $cart->price = Product::find($cart->product_id)->price;
            $cart->desc = Product::find($cart->product_id)->description;
            $cart->stock = Product::find($cart->product_id)->stock;

            $total_price += $cart->quantity * $cart->price;
        }

        return view('frontend.cart', compact('carts', 'total_price'));
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('alert', 'Product has been deleted from cart!');
    }

    public function checkout(){
        $user = User::find(auth()->user()->id);
        if(Cart::where('user_id', $user->id) ->exists()){
            $carts = Cart::where('user_id', $user->id)->get();

            $total_price = 0;
            
            foreach($carts as $cart){
                $cart->title = Product::find($cart->product_id)->name;
                $cart->image_url = Product::find($cart->product_id)->image_url;
                $cart->price = Product::find($cart->product_id)->price;
                $cart->desc = Product::find($cart->product_id)->description;
                $cart->stock = Product::find($cart->product_id)->stock;

                $total_price += $cart->quantity * $cart->price;
            }

            //decrease user credit
            if($user->credit_card >= $total_price){
                $user->credit_card -= $total_price;
                $user->save();
                
            }

            //decrese product stock
            foreach($carts as $cart){
                $product = Product::find($cart->product_id);
                $product->stock -= $cart->quantity;
                $product->save();
            }

            //remove cart item where id user
            // $carts->delete();
            Cart::where('user_id', $user->id)->delete();
        }else{
            return redirect("/cart/$user->id")->with('alert', 'Cart is empty!');
        }

        redirect("/cart/$user->id")->with('alert', 'Transaction has been completed!');
        
    }
}
