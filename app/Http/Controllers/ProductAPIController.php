<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPIController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        $top_products = $products->sortByDesc('sold')->take(5);

        // dd($top_products);
        return response()->json(['message' => 'success', 'data' => $top_products]);
    }

    public function allItem(){
        $products = Product::all();
        return response()->json($products);
    }

    public function clicked_item($id){
        $product = Product::find($id);
        return response()->json($product);
    }
}
