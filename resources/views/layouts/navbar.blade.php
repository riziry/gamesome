<!-- header start -->
<div class="header">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="/Assets/images/gamesome.png" alt="gamesome" style="width: 130px; height:40px;"/>
        </a>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Category</button>
        <div class="dropdown-content">
            <a href="shopping.html">All</a>
            <a href="shopping.html">Accessories</a>
            <a href="shopping.html">External Mic</a>
            <a href="shopping.html">Gaming Chair</a>
            <a href="shopping.html">Headset</a>
            <a href="shopping.html">Keyboard</a>
            <a href="shopping.html">Monitor</a>
            <a href="shopping.html">Mouse</a>
            <a href="shopping.html">Mousepad</a>
        </div>
    </div>
    <div class="searchBar">
        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <img src="/Assets/images/search.png" width="20" height="20" />
        </button>
    </div>
    <div class="wishlist-header">
        <button type="submit" style="border: 0; background: transparent">
            <a href='wishlist.html'>
                <img src="/Assets/images/love-header.png" width="25" height="25" />
            </a>
        </button>
    </div>
    <div class="cart-header">
        <button type="submit" style="border: 0; background: transparent">
            <a href='cart.html'>
                <img src="/Assets/images/shopping-cart.png" width="25" height="25" />
            </a>
        </button>
    </div>
    <div class="dropdownAccount">
        @auth
            <button class="dropbtn">{{ Auth::user()->name }}</button>
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a> 
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>    
        @else
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Sign In</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Sign Up</a>
                @endif
            </div>
        @endauth
    </div>
    <div class=""></div>
    <br /><br />

</div>
