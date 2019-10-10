<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CarGuru</title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="icon" type="image/ico" href="{{ secure_asset('images/carguru-logo.png') }}"/>
    <script src="{{ secure_asset('https://kit.fontawesome.com/b11236bde2.js') }}"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div id="main-nav" class="responsive-nav">
            <div onclick="closeNav()" class="cross"></div>
            <nav>
                <ul>
                    <li><a class="active" href={{url('/home')}}>Home</a></li>
                    <li><a href={{url('/about')}}>About Us</a></li>
                    <li><a href={{url('/services')}}>Services</a></li>
                    <li><a href={{url('/blog')}}>Blog</a></li>
                    <li><a href={{url('/searchByCar')}}>Search By Car</a></li>
                    <li><a href={{url('/contact')}}>Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="brand-logo">
            <a href={{ url('/home')  }}>
                <img class="brand-img" alt="logo-icon" src="../images/carguru-logo.png">
            </a>
        </div>
        <div class="nav-content">
            <div class="container-nav">
                <div class="nav-links">
                    <ul class="admin-login">
                        <li><a href="#">Mon-Fri:09:00AM to 06:00PM</a></li>
                        <li><a href="#">Talk With Specialist: <span>+88 (0) 101 0000</span></a></li>
                        <li><a href="#">My Acc</a></li>
                        <li>
                            <div class="signOut-btn">
                                <a href="#"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                   class="btn btn-default btn-flat">
                                    Logout

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </a>
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
                        <li><a class="active" href={{url('/home')}}>HOME</a></li>
                        <li><a href={{url('/about')}}>ABOUT US</a></li>
                        <li><a href={{url('/services')}}>SERVICES</a></li>
                        <li><a href={{url('/blog')}}>BLOG</a></li>
                        <li><a href={{url('/searchByCar')}}>SEARCH BY CAR</a></li>
                        <li><a href={{url('/tyres')}}>TYRES</a></li>
                        <li><a href={{url('/contact')}}>CONTACT US</a></li>
                    </ul>
                    <ul class="search-checkout">
                        <li><a href={{ url('/cart') }}>
                            <img alt="bucket" src="../images/bucket.png">
                            <div class="cart-bubble">
                                <span>2</span>
                            </div>
                        </a></li>
                        <li><a href="#"><img alt="search" src="../images/search.png"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div onclick="openNav()" id="bars" class="bars"></div>
    </header>

@yield('content')

@include('layouts.footer')
