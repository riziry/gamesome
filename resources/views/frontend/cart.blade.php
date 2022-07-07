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
                <p>Total:<b> Rp {{   number_format(10000, 2, ",", ".")     }}<b></p>
                <button id ="myBtn" class="add-to-cart-button">
                    Buy
                </button>

                <div id="myBuy" class="buy">
                    <div class="buy-content">
                        <h1>Purchase Confirmed</h1>
                        <p>Shipment process will take no longer than a week. Please wait for the package after!</p>
                        <button type="button" class="start-shopping-button-2">
                            <a class="blue-button" href='cart.html'>
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
    <!-- <div class="cart">
        <div></div>
    </div>
    <br /><br /><br />
    <div class="cart-text">
        <h1>Cart</h1>
    </div>
    <div class="cart-and-wishlist">
        <table>
            <tr>
                <td rowspan="5">
                    <img src="./assets/images/mousepadsmall.png" alt="mousepadsmall">
                </td>
                <td>HyperX FURY S - Gaming Mouse Pad - Cloth (L)</td>
            </tr>
            <tr>
                <td><b>Rp 259.000<b></td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    Quantity: 1
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td rowspan="5">
                    <img src="./assets/images/mousepadsmall.png" alt="mousepadsmall">
                </td>
                <td>HyperX FURY S - Gaming Mouse Pad - Cloth (L)</td>
            </tr>
            <tr>
                <td><b>Rp 259.000<b></td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    Quantity: 1
                </td>
            </tr>
        </table>
        <hr>
        <div class="flex-container">
            <div class="flex-item-left">
                <div class="summary-left">
                    Summary
                    <br />Total Price
                </div>
            </div>
            <div class="flex-item-right">
                <div class="summary-right">
                    2 item
                    <br />Rp518.000
                    <br />
                    <br />
                    <button id ="myBtn" class="add-to-cart-button">
                        Buy
                    </button>

                    <div id="myBuy" class="buy">

                    <div class="buy-content">
                        <h1>Purchase Confirmed</h1>
                        <p>Shipment process will take no longer than a week. Please wait for the package after!</p>
                        <button type="button" class="start-shopping-button-2">
                            <a class="blue-button" href='cart.html'>
                                Confirm
                            </a>
                        </button>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br /><br /> -->
@endsection