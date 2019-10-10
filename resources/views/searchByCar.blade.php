@extends('layouts.header')

@section('content')
    <div class="wrapper search-by-car">
        <div class="container">
            <section class="shop-by shadow">
                <div class="flex space-between">

                    <div class="container">
                        <h1>Select Car</h1>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

{{--                    <div class="search-wrapper">--}}
{{--                        <input type="text" name="search" class="search-input shadow" value="{{  }}" placeholder="Search Car" required autofocus/>--}}

{{--                        <button id="filter" name="filter" type="button" class="primary">Search</button>--}}
{{--                        <button id="reset" name="reset" type="button" class="primary">Reset</button>--}}
{{--                    </div>--}}

{{--                    <div id="car_data" class="carNames-wrapper">--}}
{{--                        <div class="cars" id="filter_name">--}}
{{--                                    @foreach($carName as $car)--}}
{{--                                    <div class="car">--}}
{{--                                        <a href={{ url('/servicesAndRepair/'.$car -> id) }}>--}}
{{--                                            {{ $car -> name }}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
