{{-- layout.blade.php --}}

<html>
    <head><title> @yield('title')</title></head>
    <body>
        @yield('content')
        <ul>
            <li><a href="/"> Home </a></li>
            <li><a href="/news"> News</a></li>
            <li><a href="/schedule"> Matches Schedule</a></li>
        </ul>
    </body>
</html>