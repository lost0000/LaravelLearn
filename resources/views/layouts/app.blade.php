<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">

                <li>
                    <a href="" class="p-3">Home</a>
                </li>
                <li>
                    <a href="" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="" class="p-3">Post</a>
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
                @auth
                <li>
                    <a href="" class="p-3">Thomas Baynes</a>
                </li>
                <li>
                    <a href="" class="p-3">Logout</a>
                </li>
                @endauth
                
                @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                @endguest



                
                
                
                
            </ul>
        </nav>
        @yield('content')
    </body>
</html>