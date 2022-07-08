<!-- header start -->
<div class="header">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="/Assets/images/gamesome.png" alt="gamesome" style="width: 130px; height:40px;"/>
        </a>
    </div>
    <div class="dropdown">
        <a href="/item"><button class="dropbtn">Products</button></a>
    </div>
    <div class="searchBar">
        <form action="/item/search" method="GET">
            <input id="searchQueryInput" style="float: left;" type="text" name="searchQueryInput" placeholder="Search" value="" />
            <button id="searchQuerySubmit" style="margin-top:3px;" type="submit" name="searchQuerySubmit">
                <img src="/Assets/images/search.png" width="20" height="20" />
            </button>
        </form>
        
    </div>
    <div class="wishlist-header">
        <button type="submit" style="border: 0; background: transparent">
            @auth
                <a href="/wishlist/{{Auth::user()->id}}">
                    <img src="/Assets/images/love-header.png" width="25" height="25" />
                </a>
            @else
                <a href="{{ route('login')   }}">
                    <img src="/Assets/images/love-header.png" width="25" height="25" />
                </a>
            @endauth
            
        </button>
    </div>
    <div class="cart-header">
        <button type="submit" style="border: 0; background: transparent">

            @auth
                <a href="/cart/{{   Auth::user()->id    }}">
                    <img src="/Assets/images/shopping-cart.png" width="25" height="25" />
                </a>
            @else
                <a href="{{ route('login')   }}">
                    <img src="/Assets/images/shopping-cart.png" width="25" height="25" />
                </a>
            @endauth
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
                    <a href="{{ route('login') }}">LogIn</a>
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
<div class="credit">
    @Auth
        <p>Credit: {{  Auth::user()->credit_card   }}</p>
    @else
        login
    @endauth
</div>