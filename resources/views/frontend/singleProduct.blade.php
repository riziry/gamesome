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
                        <button class="add-to-cart-button" onclick="alert('Added to Chart');">
                            <a class="blue-button" href="#">
                                Add to Cart
                            </a>
                        </button>
                    </div>
                </div>
                <br />
                <div class="flex-container">
                    <div class="flex-item-left">
                        <div class="text-align-left">
                            <button type="submit" style="border: 0; background: transparent" onclick="alert('Added to wishlist');">
                                <a href='#'>
                                    <img src="/Assets/images/love.png" width="30" height="30" />
                                </a>
                            </button>
                            <button onclick="copyText()" style="border: 0; background: transparent">
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
                    Sold {{  $product->sold }} pcs
                </div>
            </div>
        </div>
    </div>
@endsection