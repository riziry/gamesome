@extends('layouts.app')

@section('content')

    <br /><br /><br />
    <div class="wishlist">
        <div class="cart-text">
            <h1>Cart</h1>
        </div>
        <div class="cart-and-wishlist">
            @foreach($carts as $product)
                <div class="container-wishlist">
                    <div class="cart-product-image">
                        <img src="{{    $product->image_url  }}" alt="">
                    </div>
                    <div class="detail-wishlist">
                        <h3>{{$product->title}}</h3>
                        <p>{{$product->desc}}</p>
                        <b><p>Rp {{   number_format($product->price, 2, ",", ".")     }}</p></b>
                        <div class="quantity">
                            Quantity: <input id="demoInput{{$product->id}}" value='{{$product->quantity}}' type=number min=1 max="{{$product->stock}}">
                            <button onclick="document.getElementById('demoInput{{$product->id}}').stepUp();">+</button>
                            <button onclick="document.getElementById('demoInput{{$product->id}}').stepDown()">-</button>
                            <br>
                            <br>
                            <p>Stock:   {{ $product->stock}} pcs</p>
                        </div>
                        <form action="/cart/{{$product->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="add-to-cart-button" style="background-color: #ff6e6e; margin-top: 10px;" onclick="return confirm('re you sure to remove this product from cart?')">
                                remove
                            </button>

                        </form>
                        
                    </div>
                </div>
                <hr>
            @endforeach
            <!-- endloop -->

            <div class="cart-price" style="margin-bottom: 50px;">
                <p>Total:<b> Rp {{   number_format($total_price, 2, ",", ".")     }}<b></p>
                <button id ="myBtn" class="add-to-cart-button">
                    Buy
                </button>

                <div id="myBuy" class="buy">
                    <div class="buy-content">
                        <h1>Purchase Confirmed</h1>
                        <p>Shipment process will take no longer than a week. Please wait for the package after!</p>
                        <button type="button" class="start-shopping-button-2">
                            <!-- <form action="/cart/{{auth()->user()->id}}/checkout" method="POST">
                                @METHOD('POST')
                                @csrf
                                <a class="blue-button" href=''>
                                    Confirm
                                </a>
                            </form> -->
                                <a class="blue-button" href='/cart/{{auth()->user()->id}}/checkout'>
                                    Confirm
                                </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myBuy");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>
@endsection