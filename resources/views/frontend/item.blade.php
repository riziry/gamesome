@extends('layouts.app')

@section('content')
<div class="product-margin">
    <div class="filter-margin">
        <div class="availibility-margin">
            <form action="/item/search" name='filter' method="GET">
                <p><b>Category</b></p>

                <input type="checkbox" id="category1" value="">
                <label for="category1">All</label><br>

                <input type="checkbox" id="category2" name="category[]" value="accessories">
                <label for="category2">Accessories</label><br>

                <input type="checkbox" id="category3" name="category[]" value="external Mic">
                <label for="category3">External Mic</label><br>

                <input type="checkbox" id="category4" name="category[]" value="gaming Chair">
                <label for="category4">Gaming Chair</label><br>

                <input type="checkbox" id="category5" name="category[]" value="gaming Desk">
                <label for="category5">Gaming Desk</label><br>

                <input type="checkbox" id="category6" name="category[]" value="headset">
                <label for="category6">Headset</label><br>

                <input type="checkbox" id="category7" name="category[]" value="keyboard">
                <label for="category7">Keyboard</label><br>

                <input type="checkbox" id="category8" name="category[]" value="monitor">
                <label for="category8">Monitor</label><br>

                <input type="checkbox" id="category9" name="category[]" value="mouse">
                <label for="category9">Mouse</label><br>

                <input type="checkbox" id="category10" name="category[]" value="mousepad">
                <label for="category10">Mousepad</label><br>
                
                <!-- <button type="submit"></button> -->
                <input class="apply-filter-button" type="submit" value="Apply Filter" onclick="this.form.submit()">
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