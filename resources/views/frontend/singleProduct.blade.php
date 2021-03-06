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
                        @auth
                            <form id="add_to_cart" action="/item/{{$product->id}}/add_to_cart" method="POST">
                                @csrf
                                <button class="add-to-cart-button" style="margin-left: 190px; width:157px;" onclick="alert('Added to Chart');">
                                    <a class="blue-button" href="#">
                                        Add to Cart
                                    </a>
                                </button>
                            </form>
                        @else
                            <button class="add-to-cart-button" href="/login" style="margin-left: 190px; width:157px;">
                                <a class="blue-button" href="/login">
                                    Add to Cart
                                </a>
                            </button>
                        @endauth
                       
                    </div>
                </div>
                <br />
                <div class="flex-container">
                    <div class="flex-item-left" style="text-align:left;">
                        Quantity: <input id='pQuantity' name='quantity' form="add_to_cart" style="margin: 10px 2px;" value=1 type="number" min=1 max="{{$product->stock}}">
                        <button onclick="document.getElementById('pQuantity').stepUp();">+</button>
                        <button onclick="document.getElementById('pQuantity').stepDown()">-</button>
                        <div class="text-align-left">
                            @auth
                                <form style="width:50px; margin-bottom:10px; float:left;" action="/item/{{$product->id}}/add_to_wishlist" method="POST">
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
                            @else
                                <button type="submit" style="border: 0; background: transparent">
                                    <a href='/login'>
                                        <img src="/Assets/images/love.png" width="30" height="30" />
                                    </a>
                                </button>
                            @endauth
                            
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
                        @auth
                            <form action="/item/{{$product->id}}/checkout" name ='buy-now'method="POST">
                                @METHOD('PUT')
                                @csrf
                                <button class="buy-now-button" type="submit" value="submit">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <a class="blue-button" href="">
                                        Buy Now
                                    </a>
                                </button>
                            </form>
                        @else
                            <button class="buy-now-button">
                                <a class="blue-button" href='/login'>
                                    Buy Now
                                </a>
                            </button>
                        @endauth
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