<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {  
        $p1 = Product::where('id', '1')->get();
        $products = Product::all();
        // dd($p1);
        return view('welcome', compact('products'));
    }
}
