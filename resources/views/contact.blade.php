@extends('layouts.header')

@section('content')
    <div class="main-wrapper">
        <section class="heading-section">
            <h1>Contact Us</h1>
            <p>Home &bull; Contact Us</p>
        </section>
        <div class="contact-wrapper">
            <div class="main-content">
                <div class="container">
                    <div class="info">
                        <h1>We’d love to hear from you! Send us a <a href="#">message</a> using the form opposite, or <a
                                href="#">email</a> us.</h1>
                        <article>
                            <img src="./images/location1.png" />
                            <div>
                                <p>+00-123-456-7891</p>
                                <p>+00-123-456-7891</p>
                            </div>
                        </article>
                        <article>
                            <img src="./images/location2.png" />
                            <div>
                                <p>info@carguru.com</p>
                                <p>Support@carguru.com</p>
                            </div>
                        </article>
                        <article>
                            <img src="./images/location3.png" />
                            <div>
                                <p>16122 Collins Street Victoria</p>
                                <div>
                                    <p>8007 Dubai</p>
                                    <a href="#">Go to the map</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <form>
                        <input type="text" placeholder="Name" />
                        <input type="text" placeholder="Email Address*" />
                        <textarea placeholder="Message"
                                  title="Message"
                                  cols="30"
                                  rows="14"
                                  maxlength="100" ></textarea>
                        <button>Send message
                            <img src="./images/send-arrow.png"/>
                        </button>
                    </form>
                </div>
            </div>
            <div class="img-content">
                <img src="./images/team-car.png"/>
            </div>
        </div>
    </div>
@endsection
