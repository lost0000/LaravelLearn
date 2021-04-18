<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script>

        </script>

    </head>

    <body class="bg-gray-200">

        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">

                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="p-3">Shop</a>
                </li>
                <li>
                    <a href="{{ route('cart') }}" class="p-3">Cart</a>
                </li>
            </ul>

            <ul class="flex items-center">
                {{-- BLADE IF ELSE STATMENT, CHECKS IF LOGGED IN BEFORE DISPLAYING INFO --}}
                {{-- @if (auth()->user())
                <li>
                    <a href="" class="p-3">Thomas Baynes</a>
                </li>
                <li>
                    <a href="" class="p-3">Logout</a>
                </li>
                @else
                <li>
                    <a href="" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                @endif --}}

                {{-- //ALTERNATE AUTH STATEMENT, BETTER --}}
                @if (Auth::check())
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
                
                @else
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                @endif

                
            </ul>
        </nav>
        @yield('content')
    </body>
</html>