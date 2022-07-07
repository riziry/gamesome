<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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


}
