<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        $top_products = $products->sortByDesc('sold')->take(5);

        // featured product
            //mouse
        $featured_mouse = $products->where('model', 'mouse')->sortByDesc('sold')->take(5);
            //keyboard
        $featured_keyboard = $products->where('model', 'keyboard')->sortByDesc('sold')->take(5);
            //monitor
        $featured_monitor = $products->where('model', 'monitor')->sortByDesc('sold')->take(5);
            //headset
        $featured_headset = $products->where('model', 'headset')->sortByDesc('sold')->take(5);
            //all  
        $featured_all = $products->sortBy('price')->take(10)->sortByDesc('sold')->take(5);

        // dd($top_products);
        return view('welcome', compact('products', 'top_products', 'featured_mouse', 'featured_keyboard', 'featured_monitor', 'featured_headset', 'featured_all'));
    }

    public function item()
    {
        $products = Product::all();
        $top_products = $products->sortByDesc('sold');
        return view('frontend.item', compact('products', 'top_products'));
    }

    public function clicked_item($id){
        $product = Product::find($id);
        return view('frontend.singleProduct', compact('product'));
    }

    public function add_to_cart($id, Request $request){
        $product = Product::find($id);
        $myCart = Cart::where('user_id', auth()->user()->id);
        
        if($myCart->where('product_id', $id)->exists()){
            $myCart = $myCart->where('product_id', $id)->first();
            $myCart->quantity += 1;
            $myCart->save();
        }else{
            // dd($request);
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect('/cart/'.auth()->user()->id);
    }

    public function add_to_wishlist($id){
        $product = Product::find($id);
        $myWishlist = Wishlist::where('user_id', auth()->user()->id);
        
        if($myWishlist->where('product_id', $id)->exists()){
            return redirect('/item/'.$id)->with('alert', 'Product already in your wishlist');
        }else{
            $wishlist = new Wishlist;
            $wishlist->user_id = auth()->user()->id;
            $wishlist->product_id = $product->id;
            $wishlist->save();
        }
        return redirect('/item/'.$id)->with('alert', 'Added to wishlist');
    }

    public function search(Request $request){
        if($request->has('category')){
            $search = implode(' ', $request->category);
        }else{
            $search = $request->searchQueryInput;
        }
        
            // $search = $request->searchQueryInput;
            // $tempSearchResult = Product::all();
        $list_word = explode(' ', $search);
        // dd($list_word);

        // foreach($list_word as $word){
        //     $tempSearchResult = $tempSearchResult->where('name', 'like', '%'.$word.'%')->orWhere('model', 'like', '%'.$word.'%')->orWhere('category', 'like', '%'.$word.'%')->orWhere('brand', 'like', '%'.$word.'%')->orWhere('brand', 'like', '%'.$word.'%');
        // }

        $products = Product::where( function($query) use ($list_word){
            foreach($list_word as $word){
                $query->orWhere('name', 'like', '%'.$word.'%')->orWhere('model', 'like', '%'.$word.'%')->orWhere('category', 'like', '%'.$word.'%')->orWhere('brand', 'like', '%'.$word.'%')->orWhere('brand', 'like', '%'.$word.'%');
            }
        } )->get();

        return view('frontend.item', compact('products'));
    }

    public function filter(Request $request){
        $filter = $request->category;

        $query = implode(' ', $filter);
        dd($query);

        foreach($filter as $word){
            $products = Product::where('category', $word)->get();
        }

        return 1;
    }

    public function checkout(Request $request)
    {   
        $user = User::find(auth()->user()->id);
        $product = Product::find($request->id);
        
        if($user->credit_card >= $product->price) {
            $user->credit_card -= $product->price;
            $user->update();
            $product->sold += 1;
            $product->update();
            return redirect()->back()->with('alert', 'Successfully purchased');
        }else{
            return redirect()->back()->with('alert', 'Insufficient credit');
        }

        return redirect()->back()->with('alert', 'Successfully purchased');
    }


}
