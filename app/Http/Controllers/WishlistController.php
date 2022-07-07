<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;

class WishlistController extends Controller
{
    public function index($id)
    {
        $wishlists = Wishlist::where('user_id', $id)->get();
        // dd($wishlists);

        foreach ($wishlists as $wishlist) {
            $wishlist->image_url = Product::find($wishlist->product_id)->image_url;
            $wishlist->title = Product::find($wishlist->product_id)->name;
            $wishlist->price = Product::find($wishlist->product_id)->price;
            $wishlist->description = Product::find($wishlist->product_id)->description;
        }

        return view('frontend.wishlist', compact('wishlists'));
    }

    public function delete($id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return redirect()->back()->with('success', 'Product has been removed from wishlist');
    }

    public function add_to_cart($id, Request $request)
    {
        $product = Product::find($id);
        $myCart = Cart::where('user_id', auth()->user()->id);

        if ($myCart->where('product_id', $id)->exists()) {
            $myCart = $myCart->where('product_id', $id)->first();
            $myCart->quantity += 1;
            $myCart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->quantity = 1;
            $cart->save();
        }
        return redirect()->back()->with('success', 'Product has been added to cart');
    }
}
