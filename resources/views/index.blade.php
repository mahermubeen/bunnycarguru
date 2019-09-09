@extends('layouts.header')

@section('content')
    <section class="home">
        <div class="container home-container">
            <div class="servicesRepair-wrapper">
                <h1 class="heading">CarGuru<br> Service and Repair</h1>
                <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>
    </section>
    <section class="main-section">
        <section class="aboutUs">
            <div class="container">
                <div class="about-section">
                    <h1 class="heading6">About Us</h1>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                </div>
                <div class="services-section">
                    <div class="services-heading">
                        <h1 class="heading6">Our Services</h1>
                        <span>
                            <a href="">View All Services Here</a>
                        </span>
                    </div>

                    <div class="our-services-list">
                        <ul class="services">
                            <li>
                                <img class="battery-1" src="images/battery-icon.png"/>
                                <img class="battery-2" src="images/battery-white.png"/>
                                <h3 class="heading2">Battery Replacement</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                <button class="benz-btn benz-services">
                                    Details
                                    <img src="images/send-arrow.png" alt="send-arrow"/>
                                </button>
                            </li>
                            <li>
                                <img class="tyre-1" src="images/tyre-icon.png"/>
                                <img class="tyre-2" src="images/tyre-white.png"/>
                                <h3 class="heading2">Tyre Change</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <button class="benz-btn benz-services">
                                    Details
                                    <img src="images/send-arrow.png" alt="send-arrow"/>
                                </button>
                            </li>
                            <li>
                                <img class="oil-1" src="images/oil-icon.png"/>
                                <img class="oil-2" src="images/oil-white.png"/>
                                <h3 class="heading2">Oil Change Service</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                                <button class="benz-btn benz-services">
                                    Details
                                    <img src="images/send-arrow.png" alt="send-arrow"/>
                                </button>
                            </li>
                            <li>
                                <img class="car-1" src="images/car-icon.png"/>
                                <img class="car-2" src="images/car-white.png"/>
                                <h3 class="heading2">AC Gas Change Service</h3>
                                <p class="para">Lorem Ipsum is simply dummy text of the printing and typese </p>
                                <button class="benz-btn benz-services">
                                    Details
                                    <img src="images/send-arrow.png" alt="send-arrow"/>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="latest-work">
            <div class="container latest-work-container">
                <div class="work-heading">
                    <button>
                        <a href="#">
                            View All Works
                            <img src="images/black-send-arrow.png" />
                        </a>
                    </button>
                    <h2>Discover our latest work history</h2>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
            </div>
            <div class="work-images">
                <div class="work-img">
                    <img  src="images/work-man1.png" />
                    <div class="image-hover-detail">See Our Latest Work History</div>
                </div>
                <div class="work-img">
                    <img  src="images/work-man2.png" />
                    <div class="image-hover-detail">See Our Latest Work History</div>
                </div>
                <div class="work-img">
                    <img src="images/work-man3.png" />
                    <div class="image-hover-detail">See Our Latest Work History</div>
                </div>


            </div>
        </section>
        <section class="latest-news">
            <div class="container latest-news-container">
                <div class="work-heading">
                    <button>
                        <a href="#">
                            View More News
                            <img src="images/black-send-arrow.png" />
                        </a>
                    </button>
                    <h2>Discover our latest news feed</h2>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <div class="news-feed-wrapper">
                    <div class="news-details">
                        <div class="news-detail-1">
                            <span>6 Jun 2019</span>
                            <h3>Lorem Ispum dolor smith emet text here.</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever ...</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="news-detail-2">
                            <img src="images/news-feed-img.png"/>
                            <div class="news-cover-heading">
                                <span>6 Jun 2019</span>
                                <h3>Lorem Ispum dolor smith emet text here.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-details">
                        <div class="news-detail-1">
                            <span>6 Jun 2019</span>
                            <h3>Lorem Ispum dolor smith emet text here.</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever ...</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="news-detail-2">
                            <img src="images/news-feed-img.png"/>
                            <div class="news-cover-heading">
                                <span>6 Jun 2019</span>
                                <h3>Lorem Ispum dolor smith emet text here.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-details">
                        <div class="news-detail-1">
                            <span>6 Jun 2019</span>
                            <h3>Lorem Ispum dolor smith emet text here.</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever ...</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="news-detail-2">
                            <img src="images/news-feed-img.png"/>
                            <div class="news-cover-heading">
                                <span>6 Jun 2019</span>
                                <h3>Lorem Ispum dolor smith emet text here.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
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
