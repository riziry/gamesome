@extends('layouts.app')

@section('content')
    <div class="flex-container-landing-page">
        <div class="flex-item-left">
            <img src="{{    $product->image_url }}" style="width: 650px; " alt="mousepad" />
        </div>
        <div class="flex-item-right">
            <div class="margin-container-right">
                <div class="product-name">
                    <h1>{{ $product->name }}</h1>
                </div>
                <br />
                <hr />
                <br />
                <div class="flex-container">
                    <div class="flex-item-left">
                        <div class="price">Rp. {{   number_format($product->price, 2, ",", ".")     }}</div>
                    </div>
                    <div class="flex-item-right">
                        <form id="add_to_cart" action="/item/{{$product->id}}/add_to_cart" method="POST">
                            @csrf
                            <button class="add-to-cart-button" style="margin-left: 190px; width:157px;" onclick="alert('Added to Chart');">
                                <a class="blue-button" href="#">
                                    Add to Cart
                                </a>
                            </button>
                        </form>
                       
                    </div>
                </div>
                <br />
                <div class="flex-container">
                    <div class="flex-item-left" style="text-align:left;">
                        Quantity: <input id='pQuantity' name='quantity' form="add_to_cart" style="margin: 10px 2px;" value=1 type="number" min=1 max="{{$product->stock}}">
                        <button onclick="document.getElementById('pQuantity').stepUp();">+</button>
                        <button onclick="document.getElementById('pQuantity').stepDown()">-</button>
                        <div class="text-align-left">
                            <form style="width:50px; margin-bottom:10px; margin-right:0;" action="/item/{{$product->id}}/add_to_wishlist" method="POST">
                                @csrf
                                <button type="submit" style="border: 0; background: transparent">
                                    <a href='#'>
                                        <img src="/Assets/images/love.png" width="30" height="30" />
                                    </a>
                                </button>
                                <script>
                                    var msg = "{{Session::get('alert')}}";
                                    var exist = "{{Session::has('alert')}}";
                                    if(exist){
                                    alert(msg);
                                    }
                                </script>
                            </form>
                            <button onclick="copyText()" style="border: 0; margin-left:0;  background: transparent">
                                <a href='#'>
                                    <img src="/Assets/images/share.png" width="30" height="30" />
                                    <script>
                                        function copyText() {
                                            navigator.clipboard.writeText(" {{url()->current()}}");
                                            alert("Copied to clipboard");
                                        }
                                    </script>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="flex-item-right">
                        <button class="buy-now-button">
                            <a class="blue-button" href='https://twitch.tv/dzak1ng/'>
                                Buy Now
                            </a>
                        </button>
                    </div>
                </div>
                <br />
                <div class="text-align-left">
                    <br>
                    {{  $product->description }}
                    <br />
                    <br />
                    <hr>
                    stock {{  $product->stock }} pcs
                    <br>
                    <br>
                    Sold {{  $product->sold }} pcs
                </div>
            </div>
        </div>
    </div>
@endsection