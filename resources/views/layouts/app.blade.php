<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--    car guru css and scripts--}}
    <title>Mercedes-Benz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/ico" href="{{ asset('images/logo-icon.png') }}" />
    <script src="{{ asset('https://kit.fontawesome.com/b11236bde2.js images/logo-icon.png') }}"></script>

    <style>
        /*hide the submenu*/
        ul.submenu {
            max-height: 0;
            overflow: hidden;
        }

        /*position the label*/
        label {
            position: relative;
            display: block;
            cursor: pointer;
        }

        /*show the submenu when checked*/
        input:checked~ul.submenu {
            max-height: 300px;
        }
    </style>

</head>
<body>
    <div id="app">

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <header class="header">
                <div class="brand-logo">
                    <img class="brand-img" alt="logo-icon" src="images/logo-icon.png">
                    <h3 class="brand-text">Mercedes-Benz</h3>
                </div>
                <div class="nav-content">
                    <div class="container-nav">
                        <div class="nav-links">
                            <ul class="admin-login">
                                <li><a href="#">Mon-Fri:09:00AM to 06:00PM</a></li>
                                <li><a href="#">Talk With Specialist: <span>+88 (0) 101 0000</span></a></li>
                                <li><a href="#">My Acc</a></li>
                                <li><a href="#">LogIn</a></li>
                                <li>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <ul class="login-apis">
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                        <nav class="nav-list">
                            <ul class="options">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">BRANDS WE OFFER</a></li>
                                <li><a href="#">CONTACT US</a></li>
                            </ul>
                            <ul class="search-checkout">
                                <li><a href="#"><img alt="bucket" src="images/bucket.png"></a></li>
                                <li><a href="#"><img alt="search" src="images/search.png"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        @endguest

        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
