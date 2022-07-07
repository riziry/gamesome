@extends('layouts.app')

@section('content')
    <br /><br /><br />
    <div class="wishlist">
        <div class="cart-text">
            <h1>Wishlist</h1>
        </div>
        <div class="cart-and-wishlist">
            @foreach($wishlists as $ws)
                <div class="container-wishlist">
                    <div class="cart-product-image">
                        <img src="{{    $ws->image_url  }}" alt="">
                    </div>
                    <div class="detail-wishlist">
                        <h3>{{$ws->title}}</h3>
                        <p>{{$ws->description}}</p>
                        <b><p>Rp {{   number_format($ws->price, 2, ",", ".")     }}</p></b>
                        <form action="/wishlist/{{$ws->id}}/delete" method="POST" style="margin-right:10px; float:left;">
                            @METHOD('DELETE')
                            @csrf
                            <button class="add-to-cart-button" style="background-color: #ff6e6e;" onclick="return confirm('Are you sure to remove this product from wishlish?')">
                                remove
                            </button>
                        </form>
                        <form action="/wishlist/{{$ws->product_id}}/add_to_cart" method="POST">
                            @csrf
                            <button class="add-to-cart-button" onclick="alert('Product added to cart')">
                                Add to cart
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
            <!-- endloop -->
        </div>
    </div>
@endsection