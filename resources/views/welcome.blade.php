@extends('layouts.app')

@section('content')
    <div class="background-lp">
        <div>
            <div class="lp-header">
                Gamesome
            </div>
        </div>
    </div>
    <div class="lp-p">
        Upgrade your gaming experience!
        <br>
        <br>
        <button type="button" class="start-shopping-button-2">
            <!-- <a id='scrollbtn' class="blue-button" href='{{ url("/item")   }}'> -->
            <a id='scrollbtn' class="blue-button" href='#featuredProduct'>
                Start Shopping
            </a>
        </button>
    </div>

    <div class="lp-brand">
        <br>
        <b>Popular Brand</b>
        <div class="lp-brand-image">
            <div class="image-margin">
                <a href="#">
                    <img src="./Assets/images/hyperx.png" alt="">
                </a>
            </div>
            <div class="image-margin">
                <a href="">
                    <img src="./Assets/images/steeleries.png" alt="">
                </a>
            </div>
            <div class="image-margin">
                <a href="">
                    <img src="./Assets/images/razer.png" alt="">
                </a>
            </div>
            <div class="image-margin">
                <a href="">
                    <img src="./Assets/images/msi.png" alt="">
                </a>
            </div>
            <div class="image-margin">
                <a href="">
                    <img src="./Assets/images/and_more.png" alt="">
                </a>
            </div>
        </div>
        <br>
    </div>

    <div class="container-main">
        <br /><br />
        <!-- top product  -->
        <div class="lp-top-product-text">
            <h1>Top Product</h1>
        </div>
        <div class="lp-shopping-main">
            <!-- loop here -->
            @foreach($top_products as $product)
                <div class="shopping-card-margin">
                    <div class="shopping-margin">
                        <a class="card" href="/item/{{$product->id}}">
                            <div class="product-card">
                                <img src="{{  $product->image_url }}" alt="">
                            
                                <div class="card-p">
                                    {{  $product->name  }}<br>
                                    <b>Rp. {{   number_format($product->price, 2, ",", ".")     }}</b>
                                    <p class="card-sold">Sold {{  $product->sold   }} pcs</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- endloop -->
        </div>

        <!-- featured product -->
        <div id='featuredProduct' class="lp-featured-product-text">
            <h1>Featured Product</h1>
        </div>

        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'All')" id="defaultOpen">All</button>
            <button class="tablinks" onclick="openTab(event, 'Mouse')">Mouse</button>
            <button class="tablinks" onclick="openTab(event, 'Monitor')">Monitor</button>
            <button class="tablinks" onclick="openTab(event, 'Keyboard')">Keyboard</button>
            <button class="tablinks" onclick="openTab(event, 'Headset')">Headset</button>
        </div>

        <hr class="lp">
        <div id="All" class="tabcontent">
            <div class="lp-shopping-main">
                <!-- loop here -->
                @foreach($featured_all as $pAll)
                    <div class="shopping-card-margin">
                        <div class="shopping-margin">
                            <a class="card" href="/item/{{$pAll->id}}">
                                <div class="product-card">
                                    <img src=" {{   $pAll->image_url  }}" alt="">
                                    <div class="card-p">
                                        {{  $pAll->name   }}<br>
                                        <b>Rp. {{   $pAll->price  }}</b>
                                        <p class="card-sold">sold {{    $pAll-> sold   }} pcs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- endloop -->
            </div>
        </div>

        <div id="Mouse" class="tabcontent">
            <div class="lp-shopping-main">
                <!-- loop here -->
                @foreach($featured_mouse as $pMouse)
                    <div class="shopping-card-margin">
                        <div class="shopping-margin">
                            <a class="card" href="/item/{{$pMouse->id}}">
                                <div class="product-card">
                                    <img src=" {{   $pMouse->image_url  }}" alt="">
                                    <div class="card-p">
                                        {{  $pMouse->name   }}<br>
                                        <b>Rp. {{   $pMouse->price  }}</b>
                                        <p class="card-sold">sold {{    $pMouse-> sold   }} pcs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- endloop -->
            </div>
        </div>

        <div id="Monitor" class="tabcontent">
            <div class="lp-shopping-main">
                <!-- loop here -->
                @foreach($featured_monitor as $pMon)
                    <div class="shopping-card-margin">
                        <div class="shopping-margin">
                            <a class="card" href="/item/{{$pMon->id}}">
                                <div class="product-card">
                                    <img src=" {{   $pMon->image_url  }}" alt="">
                                    <div class="card-p">
                                        {{  $pMon->name   }}<br>
                                        <b>Rp. {{   $pMon->price  }}</b>
                                        <p class="card-sold">sold {{    $pMon-> sold   }} pcs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- endloop -->
            </div>
        </div>

        <div id="Keyboard" class="tabcontent">
            <div class="lp-shopping-main">
                <!-- loop here -->
                @foreach($featured_keyboard as $pKey)
                    <div class="shopping-card-margin">
                        <div class="shopping-margin">
                            <a class="card" href="/item/{{$pKey->id}}">
                                <div class="product-card">
                                    <img src=" {{   $pKey->image_url  }}" alt="">
                                    <div class="card-p">
                                        {{  $pKey->name   }}<br>
                                        <b>Rp. {{   $pKey->price  }}</b>
                                        <p class="card-sold">sold {{    $pKey-> sold   }} pcs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- endloop -->
            </div>
        </div>

        <div id="Headset" class="tabcontent">
            <div class="lp-shopping-main">
                <!-- loop here -->
                @foreach($featured_headset as $pHs)
                    <div class="shopping-card-margin">
                        <div class="shopping-margin">
                            <a class="card" href="/item/{{$pHs->id}}">
                                <div class="product-card">
                                    <img src=" {{   $pHs->image_url  }}" alt="">
                                    <div class="card-p">
                                        {{  $pHs->name   }}<br>
                                        <b>Rp. {{   $pHs->price  }}</b>
                                        <p class="card-sold">sold {{    $pHs-> sold   }} pcs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- endloop -->
            </div>
        </div>


    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();

    </script>

@endsection