<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.htmlconfig')
</head>
<body> 
    <header>
        @include('layouts.navbar')
    </header>

    <main>
        @yield('content')
        <!-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> -->
    </main>

    <footer>
       
    </footer>
</body>

</html>