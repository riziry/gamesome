@extends('layouts.app')

@section('content')
<div class="product-margin">
    <div class="filter-margin">
        <div class="availibility-margin">
            <form action="">
                <p><b>Category</b></p>

                <input type="checkbox" id="category1" value="All">
                <label for="category1">All</label><br>

                <input type="checkbox" id="category2" value="Accessories">
                <label for="category2">Accessories</label><br>

                <input type="checkbox" id="category3" value="External Mic">
                <label for="category3">External Mic</label><br>

                <input type="checkbox" id="category4" value="Gaming Chair">
                <label for="category4">Gaming Chair</label><br>

                <input type="checkbox" id="category5" value="Gaming Desk">
                <label for="category5">Gaming Desk</label><br>

                <input type="checkbox" id="category6" value="Headset">
                <label for="category6">Headset</label><br>

                <input type="checkbox" id="category7" value="Keyboard">
                <label for="category7">Keyboard</label><br>

                <input type="checkbox" id="category8" value="Monitor">
                <label for="category8">Monitor</label><br>

                <input type="checkbox" id="category9" value="Mouse">
                <label for="category9">Mouse</label><br>

                <input type="checkbox" id="category10" value="Mousepad">
                <label for="category10">Mousepad</label><br>

                <input class="apply-filter-button" type="submit" value="Apply Filter">
            </form>
        </div>

    </div>
    <div class="container-margin">
        <!-- <div class="row-margin"> -->
            @foreach($products as $product)
                <div class="shopping-card-margin">
                    <div class="shopping-margin">
                        <a class="card" href="/item/{{$product->id}}">
                            <div class="product-card">
                                <img src="{{$product->image_url}}" alt="">
                                <div class="card-p">
                                    {{$product->name}}<br>
                                    <b>Rp. {{   number_format($product->price, 2, ",", ".")     }}</b>
                                    <p class="card-sold">sold {{$product->sold}} pcs</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        <!-- </div>       -->
    </div>
</div>
        

@endsection