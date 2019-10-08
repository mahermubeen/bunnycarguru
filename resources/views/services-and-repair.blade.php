@extends('layouts.header')

@section('content')
    <div class="wrapper services-and-repair">
        <section class="service-and-repair-home">
            <div class="container home-container">
                <div class="servicesRepair-wrapper">
                    <h1 class="heading">{{ $car->name }}<br> Service and Repair</h1>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="form-services">
                    <div class="services-form-list">
                        <ul>
                            <li class="active-service"><a href="#"><img alt="battery" src="../images/battery.png"></a></li>
                            <li><a href="#"><img alt="tyre" src="../images/tyre.png"></a></li>
                            <li><a href="#"><img alt="oil" src="../images/oil.png"></a></li>
                            <li><a href="#"><img alt="customer" src="../images/customer.png"></a></li>
                        </ul>
                    </div>
                    <form class="services-form">
                        <label class="labels" class="row" for="carModel">{{ $car->name }} Models*</label>
                        <select class="row inputs" id="carModel">
                            <option>-----------Select Car Model-----------</option>
                             @foreach($models as $model)
                                    <option>{{$model}}</option>
                             @endforeach
                        </select>
                        <label class="labels" class="row" for="batteryBrand">Batteries Brands*</label>
                        <select class="row inputs" id="batteryBrand">
                            <option></option>
                            <option>hello</option>
                            <option>hello</option>
                            <option>hello</option>
                        </select>
                        <label class="labels" for="name">Name</label>
                        <label class="labels" for="phone">Mob#*</label>
                        <input class="inputs" id="name" type="text" name="name">
                        <input class="inputs" id="phone" type="text" name="phone">
                        <label class="labels" class="row" for="location">Your Location</label>
                        <select class="row inputs" id="location">
                            <option></option>
                            <option>hello</option>
                            <option>hello</option>
                            <option>hello</option>
                        </select>
                        <label class="row form-btn">
                            <button type="button" class="benz-btn">Click for Price <img src="../images/send-arrow.png" alt="send-arrow"/></button>
                        </label>
                    </form>
                </div>
            </div>
        </section>


        <section class="service-and-repair-aboutUs">
            <div class="container">
                <div class="about-section">
                    <h1 class="heading6">About Us</h1>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                </div>
                <div class="services-section">
                    <h1 class="heading6">Our Services</h1>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    <div class="our-services-list">
                        <ul class="services">
                            <li>
                                <img src="../images/car.png" />
                                <h3 class="heading2">Everything About Mercedes</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                                <button class="benz-btn">
                                    Details
                                    <img src="../images/send-arrow.png" alt="send-arrow" />
                                </button>
                            </li>
                            <li>
                                <img src="../images/Icon1.png" />
                                <h3 class="heading2">Battery Testing & Installation</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                                <button class="benz-btn">
                                    Details
                                    <img src="../images/send-arrow.png" alt="send-arrow" />
                                </button>
                            </li>
                            <li>
                                <img src="../images/Icon2.png" />
                                <h3 class="heading2">Flat Tyre Replacement</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                                <button class="benz-btn">
                                    Details
                                    <img src="../images/send-arrow.png" alt="send-arrow" />
                                </button>
                            </li>
                            <li>
                                <img src="../images/Icon3.png" />
                                <h3 class="heading2">Car Oil <br/>Change</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                                <button class="benz-btn">
                                    Details
                                    <img src="../images/send-arrow.png" alt="send-arrow" />
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="schedule">
            <div class="container">
                <div class="schedule-wrapper">
                    <h1 class="heading3">Schedule a Free Consultation</h1>
                    <p class="paragraph3">Lorem Ipsum is simply dummy text of the </p>
                    <ul class="schedule-list">
                        <li>
                            <h3 class="heading4">International Call</h3>
                            <p class="paragraph4">+88 (0) 101 0000 000</p>
                        </li>
                        <li>
                            <h3 class="heading4">What's app</h3>
                            <p class="paragraph4">+88 (0) 101 0000 000</p>
                        </li>
                        <li>
                            <h3 class="heading4">Skype Call</h3>
                            <p class="paragraph4">+88 (0) 101 0000 000</p>
                        </li>
                        <li>
                            <h3 class="heading4">Mail Us</h3>
                            <p class="paragraph4">+88 (0) 101 0000 000</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="work">
            <div class="container">
                <div class="work-section">
                    <figure class="work-img">
                        <img src="../images/business-car-img.png" alt="business-car" />
                    </figure>
                    <div class="how-wrapper">
                        <h1 class="heading6">How We Work</h1>
                        <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <div class="how-content">
                            <h3 class="heading5">Stuck with dead Car Battery?</h3>
                            <p class="paragraph5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                    <img class="car-img" src="../images/car-business.png">
                </div>
            </div>
        </section>
        <section class="chooseService">
            <div class="choose-service-wrapper container">
                <h1 class="heading6">Choose Your Service Here</h1>
                <p class="paragraph5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="choose-service-images">
                <figure><img src="../images/car1.png" alt="" /></figure>
                <figure><img src="../images/car2.png" alt=""/></figure>
                <figure><img src="../images/car3.png" alt="" /></figure>
                <figure><img src="../images/car4.png" alt=""/></figure>
                <figure><img src="../images/car5.png" alt=""/></figure>
                <figure><img src="../images/car6.png" alt=""/></figure>
            </div>
        </section>
        <section class="choose-us-section">
            <div class="container">
                <div class="choose-us-wrapper">
                    <h1 class="heading3">Why Choose Us</h1>
                    <p class="paragraph3">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    <div class="choose-us-carousal">
                        <div class="carousal">
                            <img src="../images/group1.png" />
                            <h3 class="heading5">Best Value</h3>
                            <p class="paragraph6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
                        </div>
                        <div class="carousal">
                            <img src="../images/group2.png" />
                            <h3 class="heading5">Effective Service</h3>
                            <p class="paragraph6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
                        </div>
                        <div class="carousal">
                            <img src="../images/group3.png" />
                            <h3 class="heading5">Reliable Warranty</h3>
                            <p class="paragraph6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
                        </div>
                    </div>
                </div>
                <div class="customers-wrapper">
                    <h1 class="heading8">Loved By Our Customers</h1>
                    <p class="paragraph7">With our experience, we always bring the best services for Clients</p>
                    <div class="customers-carousal">
                        <div class="carousal">
                            <div class="carousal-idea">
                                <p class="paragraph8">“Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                            <div class="polygon"></div>
                            <div class="carousal-man-detail">
                                <figure class="man-img">
                                    <img src="../images/man1.png" />
                                </figure>
                                <div class="man-details">
                                    <h3 class="man-heading">Jenny Adams</h3>
                                    <span class="man-des">(Dubai Resident)</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousal">
                            <div class="carousal-idea">
                                <p class="paragraph8">“Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                            </div>
                            <div class="polygon"></div>
                            <div class="carousal-man-detail">
                                <figure class="man-img">
                                    <img src="../images/man2.png" />
                                </figure>
                                <div class="man-details">
                                    <h3 class="man-heading">John Doe</h3>
                                    <span class="man-des">(California Resident)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <h1 class="heading3">Contact Us</h1>
                <p class="paragraph3">Drop us a line or give us a ring. We love to hear from you and are happy to answer
                    any questions.</p>
                <ul class="contact-list">
                    <li>
                        <img src="../images/location1.png"/>
                        <h3 class="heading2">Our Office</h3>
                        <p class="paragraph8">16122 Collins Street Victoria 8007 Country</p>
                    </li>
                    <li>
                        <img src="../images/location3.png"/>
                        <h3 class="heading2">Email</h3>
                        <p class="paragraph8">Email 1: Info@company.com</p>
                        <p class="paragraph8">Email 2: Support@sample.com </p>
                    </li>
                    <li>
                        <img src="../images/location2.png"/>
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

