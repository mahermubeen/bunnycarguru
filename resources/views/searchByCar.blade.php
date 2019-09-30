@extends('layouts.header')

@section('content')
    <div class="wrapper search-by-cart">
        <div class="container">
            <section class="shop-by shadow">
                <h2>Shop By</h2>
                <div class="flex space-between">
                    <div class="checkbox">
                        <input class="switch" type="checkbox"/>
                        <label></label>
                    </div>
                    <div class="flex">
                        <button class="square secondary">Width</button>
                        <button class="square secondary">Height</button>
                        <button class="square secondary">Rim Size</button>
                    </div>
                    <div class="flex type-wrapper align-center">
                        <button class="right-btn center">
                            <img src="./images/arrow-right.png">
                        </button>
                        <p>
                            Different Size for Rear Tyres?
                        </p>
                    </div>
                    <div class="flex center">
                        <button class="secondary uppercase location">Location</button>
                        <button class="primary">Search</button>
                    </div>
                </div>
            </section>
            <div class="flex car-tyre-section">
                <aside>
                    <div>
                        <div class="flex justify-spaceBetween">
                            <h2>Filter</h2>
                            <button class="clear-btn">Clear All</button>
                        </div>
                        <div class="cars">
                            <div class="car">
                                <img src="images/close.png" />
                                <p>Audi</p>
                            </div>
                            <div class="car">
                                <img src="images/close.png" />
                                <p>BMW</p>
                            </div>
                        </div>
                        <select class="dropdown">
                            <option>Vehicles</option>
                            <option>Mobiles</option>
                            <option>Vehicles2</option>
                        </select>
                        <input class="search-input shadow" type="text" placeholder="Search an Option"/>
                        <div class="checks">
                            <div class="flex">
                                <input type="checkbox"/>
                                <label>Audi (35)</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox"/>
                                <label>BMW (45)</label>
                            </div>
                            <div class="flex">
                                <input checked type="checkbox"/>
                                <label>JAGUAR (55)</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox"/>
                                <label>MERCEDES-BENZ (35)</label>
                            </div>
                            <div class="flex">
                                <input type="checkbox"/>
                                <label>FORD (15)</label>
                            </div>
                        </div>
                        <div>
                            <h2>Show More +</h2>
                        </div>
                    </div>
                    <div class="ul-dropdowns">
                        <select class="dropdown li-dropdown">
                            <option>Brand</option>
                            <option>Pattern</option>
                            <option>Performance</option>
                            <option>Run Flat</option>
                            <option>Production Year</option>
                        </select>
                        <select class="dropdown li-dropdown">
                            <option>Brand</option>
                            <option selected>Pattern</option>
                            <option>Performance</option>
                            <option>Run Flat</option>
                            <option>Production Year</option>
                        </select>
                        <select class="dropdown li-dropdown">
                            <option>Brand</option>
                            <option>Pattern</option>
                            <option selected>Performance</option>
                            <option>Run Flat</option>
                            <option>Production Year</option>
                        </select>
                        <select class="dropdown li-dropdown">
                            <option>Brand</option>
                            <option>Pattern</option>
                            <option>Performance</option>
                            <option selected>Run Flat</option>
                            <option>Production Year</option>
                        </select>
                        <select class="dropdown li-dropdown">
                            <option>Brand</option>
                            <option>Pattern</option>
                            <option>Performance</option>
                            <option>Run Flat</option>
                            <option selected>Production Year</option>
                        </select>
                    </div>
                </aside>
                <section>
                    <div class="car-tyre-header">
                        <h1>
                            Car Tyres
                        </h1>
                        <div class="filters">
                            <div>
                                <img  src="images/brand.png"/>
                                <p>Filter By Brand</p>
                            </div>
                            <div>
                                <img  src="images/price.png"/>
                                <p>Price</p>
                            </div>
                            <div>
                                <img src="images/brand.png"/>
                                <p>See Run Flat Only</p>
                            </div>
                            <div>
                                <img src="images/brand.png"/>
                                <p>Compare Selected</p>
                            </div>
                        </div>
                    </div>
                    <div class="car-tyre-body">
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header shadow">
                                <img src="./images/Dunlop.png">
                                <div class="checkbox">
                                    <input type="checkbox"/>
                                    <label>Compare</label>
                                </div>
                            </div>
                            <div class="sample">
                                <h2>Sample Tyre</h2>
                                <div>
                                    <p>235/35 R19 91Y (RO2)</p>
                                    <div class="stars">
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item-img"></div>
                            <div class="description">
                                <h2>2019</h2>
                                <img src="images/audi-logo.png">
                            </div>
                            <div class="tyre-char">
                                <div>
                                    <p> - | </p>
                                    <img src="images/petrol.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/water.png">
                                </div>
                                <div>
                                    <p> - | </p>
                                    <img src="images/sound.png">
                                </div>
                            </div>
                            <div class="tyre-state">
                                <a href="/">Free Shipping</a>
                                <div class="available">
                                    <img src="./images/available.png">
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="price-section">
                                <h1>AED <span>991.90</span> </h1>
                                <p>INCL VAT PRICE</p>
                                <div>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <button>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
