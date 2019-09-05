<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercedes-Benz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/ico" href="{{ asset('images/logo-icon.png') }}" />
    <script src="{{ asset('https://kit.fontawesome.com/b11236bde2.js') }}"></script>
</head>
<body>
<div class="wrapper">
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
                        <li>
                            <div class="signOut-btn">
                                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                    Sign out

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
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

@yield('content')

@include('layouts.footer')
