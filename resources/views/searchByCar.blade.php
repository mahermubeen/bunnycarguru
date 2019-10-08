@extends('layouts.header')

@section('content')
    <div class="wrapper search-by-car">
        <div class="container">
            <section class="shop-by shadow">
                <div class="flex space-between">
                    <form class="search-wrapper" method="GET" action="{{ url('/searchCar') }}">
                        <input type="text" name="search" class="search-input shadow" value="{{ isset($_REQUEST['search']) ? $_REQUEST['search'] : ''  }}" placeholder="Search Car" required autocomplete="search" autofocus>
                        <button type="submit" class="primary">Search</button>
                    </form>

                    <div class="carNames-wrapper">
                        <div class="cars">
                                @if(count($cars) > 0)
                                    @foreach($cars as $car)
                                    <div class="car">
                                        <a href={{ url('/servicesAndRepair/'.$car -> id) }}>
                                            {{ $car -> name }}
                                        </a>
                                    </div>
                                    @endforeach
                                @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <h1 class="heading3">Contact Us</h1>
                <p class="paragraph3">Drop us a line or give us a ring. We love to hear from you and are happy to answer
                    any questions.</p>
                <ul class="contact-list">
                    <li>
                        <img src="images/location1.png"/>
                        <h3 class="heading2">Our Office</h3>
                        <p class="paragraph8">16122 Collins Street Victoria 8007 Country</p>
                    </li>
                    <li>
                        <img src="images/location3.png"/>
                        <h3 class="heading2">Email</h3>
                        <p class="paragraph8">Email 1: Info@company.com</p>
                        <p class="paragraph8">Email 2: Support@sample.com </p>
                    </li>
                    <li>
                        <img src="images/location2.png"/>
                        <h3 class="heading2">Phone</h3>
                        <p class="paragraph8">+ 01 - 909 - 980 - 0032</p>
                        <p class="paragraph8">+ 01 - 909 - 980 - 0033 </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="map-div"></div>
@endsection
