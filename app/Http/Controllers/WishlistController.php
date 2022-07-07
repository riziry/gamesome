<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('frontend.wishlist');
    }

    public function add()
    {
        return view('frontend.wishlist');
    }
}
