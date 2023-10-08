<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heliophysics Nexus</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('nexus.ico') }}">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('home.css') }}"/>
    </head>
    <body class="bg-purple">
                <div class="stars">
            <div class="custom-navbar">
                <div class="brand-logo">
                <img src="{{ asset('nexus.png') }}" alt="My Logo" style="width:50px">
                </div>
                <div class="navbar-links">
                    <ul>
                      <li><a href="/projects" target="_blank">Explore</a></li>
                      <li><a href="/communities" target="_blank">Community</a></li>
                      <li><a href="https://www.spaceappschallenge.org/2023/find-a-team/cosmocode/?tab=details" target="_blank">CosmoCode</a></li>
                            @if (Route::has('login'))
                                <div >
                                    @auth
                                    <li><a href="{{ route('user.show', ['user' => auth()->user()]) }}" class="btn-request">Profile</a></li>

                                    @else
                                    <li> <a href="{{ route('login') }}" class="btn-request" target="_blank" class="">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li>  <a href="{{ route('register') }}" class="btn-request" target="_blank">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                    
                    </ul>
                </div>
            </div>
            <div class="central-body">
                <h1 style="font-size:100px; color:white"> The Nexus</h1>

                <a href="/projects" class="btn-go-home">Start exploring</a>
            </div>
            <div class="objects">
                <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
                <div class="earth-moon">
                    <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
                    <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
                </div>
                <div class="box_astronaut">
                    <img class="object_astronaut" src="http://salehriaz.com/404Page/img/astronaut.svg" width="140px">
                </div>
            </div>
            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>

            </div>

        </div>
        </div>
    </body>
</html>
