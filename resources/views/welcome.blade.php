@extends('layouts.app')

@section('content')
<div class="background-lp">
    <div>
        <div class="lp-header">
            Gamesome
        </div>
        <!-- <div class="lp-p">
            Upgrade your gaming experience!
            <br>
            <br>
            <button type="button" class="start-shopping-button-2">
                <a class="blue-button" href='shopping.html'>
                    Start Shopping
                </a>
            </button>
        </div> -->
    </div>
</div>
<div class="lp-p">
    Upgrade your gaming experience!
    <br>
    <br>
    <button type="button" class="start-shopping-button-2">
        <a class="blue-button" href='shopping.html'>
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
        <div class="shopping-card-margin">
            <div class="shopping-margin">
                <a class="card" href="product.html">
                    <div class="product-card">
                        <img src="{{  $products[0]->image_url }}" alt="">
                       
                        <div class="card-p">
                            {{  $products[0]->name}}<br>
                            <b>Rp. {{  $products[0]->price}}</b>
                            <p class="card-sold">Terjual 999+</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- endloop -->
    </div>

    <!-- featured product -->
    <div class="lp-featured-product-text">
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
            <div class="shopping-card-margin">
                <div class="shopping-margin">
                    <a class="card" href="product.html">
                        <div class="product-card">
                            <img src="./assets/images/product_image.png" alt="">
                            <div class="card-p">
                                all<br>
                                <b>Rp 1.000.000</b>
                                <p class="card-sold">Terjual 999+</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- endloop -->
        </div>
    </div>

    <div id="Mouse" class="tabcontent">
        <div class="lp-shopping-main">
            <!-- loop here -->
            <div class="shopping-card-margin">
                <div class="shopping-margin">
                    <a class="card" href="product.html">
                        <div class="product-card">
                            <img src="./assets/images/product_image.png" alt="">
                            <div class="card-p">
                                Product Name<br>
                                <b>Rp 1.000.000</b>
                                <p class="card-sold">Terjual 999+</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- endloop -->
        </div>
    </div>

    <div id="Monitor" class="tabcontent">
        <div class="lp-shopping-main">
            <!-- loop here -->
            <div class="shopping-card-margin">
                <div class="shopping-margin">
                    <a class="card" href="product.html">
                        <div class="product-card">
                            <img src="./assets/images/product_image.png" alt="">
                            <div class="card-p">
                                Product Name<br>
                                <b>Rp 1.000.000</b>
                                <p class="card-sold">Terjual 999+</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- endloop -->
        </div>
    </div>

    <div id="Keyboard" class="tabcontent">
        <div class="lp-shopping-main">
            <!-- loop here -->
            <div class="shopping-card-margin">
                <div class="shopping-margin">
                    <a class="card" href="product.html">
                        <div class="product-card">
                            <img src="./assets/images/product_image.png" alt="">
                            <div class="card-p">
                                Product Name<br>
                                <b>Rp 1.000.000</b>
                                <p class="card-sold">Terjual 999+</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- endloop -->
        </div>
    </div>

    <div id="Headset" class="tabcontent">
        <div class="lp-shopping-main">
            <!-- loop here -->
            <div class="shopping-card-margin">
                <div class="shopping-margin">
                    <a class="card" href="product.html">
                        <div class="product-card">
                            <img src="./assets/images/product_image.png" alt="">
                            <div class="card-p">
                                Product Name<br>
                                <b>Rp 1.000.000</b>
                                <p class="card-sold">Terjual 999+</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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

