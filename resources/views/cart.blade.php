@extends('layouts.header')

@section('content')
    <div class="wrapper cart">
        <div class="container">
            <section>
                <h1> ----- Shopping Cart ----- </h1>

                <div class="cart-item">
                    <img src="./images/cartyre.png"/>
                    <article>
                        <h2>Zeetex Zt3000</h2>
                        <div class="flex mb-10">
                            <p class="mr-30">Size: 195/65 R15 95H</p>
                            <p class="flex"><i class="fa fa-calendar mr-10" aria-hidden="true"></i><span>2019</span></p>
                        </div>
                        <div class="flex mb-10 pt-10">
                            <div class="tick center mr-10">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <p class="mr-5 label">Price : </p>
                            <p>AED 153.00</p>
                        </div>
                        <div class="flex justify-spaceBetween pt-10">
                            <div class="flex mt-10 select-wrapper">
                                <select class="mr-20">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                                <p class="mr-5 label">Sub-total : </p>
                                <p>AED 459.00</p>
                            </div>
                            <button class="btn">Continue Shopping</button>
                        </div>
                    </article>
                </div>

                <div class="cart-item">
                    <img src="./images/cartyre.png"/>
                    <article>
                        <h2>Zeetex Zt3000</h2>
                        <div class="flex mb-10">
                            <p class="mr-30">Size: 195/65 R15 95H</p>
                            <p class="flex"><i class="fa fa-calendar mr-10" aria-hidden="true"></i><span>2019</span></p>
                        </div>
                        <div class="flex mb-10 pt-10">
                            <div class="tick center mr-10">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <p class="mr-5 label">Price : </p>
                            <p>AED 153.00</p>
                        </div>
                        <div class="flex justify-spaceBetween pt-10">
                            <div class="flex mt-10 select-wrapper">
                                <select class="mr-20">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                                <p class="mr-5 label">Sub-total : </p>
                                <p>AED 459.00</p>
                            </div>
                            <button class="btn">Continue Shopping</button>
                        </div>
                    </article>
                </div>

                <div class="total-item">
                    <ul>
                        <li>
                            <p class="item">Item(s) Total</p>
                            <p class="cost">AED 993.00</p>
                        </li>
                        <li>
                            <p class="item">Tyres at your doorstep</p>
                            <p class="cost">AED 993.00</p>
                        </li>
                        <li>
                            <p class="item">Item(s) Total</p>
                            <p class="cost">AED 993.00</p>
                        </li>
                        <li>
                            <p class="item">Item(s) Total</p>
                            <p class="cost">AED 993.00</p>
                        </li>
                    </ul>
                    <div class="grand-total-wrapper flex justify-spaceBetween">
                        <div class="flex grand-total justify-spaceBetween">
                            <p>Grand Total(INCL. VAT)</p>
                            <p>AED 1,046.00</p>
                        </div>
                        <button class="btn">
                            Proceed To Checkout
                        </button>
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
