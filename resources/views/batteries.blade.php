@extends('layouts.header')

@section('content')
    <div class="wrapper search-by-cart">
        <div class="container">
            <section class="car-battery shadow">
                <div class="batteries-headiing">
                    <h2>CAR BATTERIES:</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                </div>
            </section>
            <div class="flex car-tyre-section">
                <aside class="battry-aside">
                    <div class="price-range-wrapper">
                        <h2>PRICE RANGE</h2>
                        <div class="price-gray">
                            <div class="price-white">
                                <div class="price-green-left"></div>
                                <div class="price-green-right"></div>
                            </div>
                        </div>
                        <p>AED 458.90 - AED 987.90</p>
                    </div>
                    <div class="voltage-wrapper">
                        <h2>VOLTAGE</h2>
                        <form class="voltage-form-wrapper">
                            <div class="voltage-form">12V (54)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </div>
                            <div class="voltage-form">25V (54)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="voltage-form">36V (54)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                        </form>
                    </div>
                    <div class="capacity-wrapper">
                        <h2>CAPACITY</h2>
                        <form class="capacity-form-wrapper">
                            <div class="capacity-form">100AH (1)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">105AH (1)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">110AH (2)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">35AH (3)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">40AH (5)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">45AH (8)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">35AH (2)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                            <div class="capacity-form">425AH (4)
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </div>
                        </form>
                        <div class="show-more">SHOW MORE +</div>
                    </div>
                </aside>
                <section>
                    <div class="car-battery-header">
                        <h2>
                            BATTERIES BRANDS:
                        </h2>
                        <div class="battery-options">
                            <div class="battery-form-list">
                                <ul class="battery-form-ul">
                                    <li class="tab-links" onclick="openBattery(event, 'varta')">
                                        VARTA
                                    </li>
                                    <li class="tab-links" onclick="openBattery(event, 'bosch')">
                                        BOSCH
                                    </li>
                                    <li class="tab-links" onclick="openBattery(event, 'trane')">
                                        TRANE
                                    </li>
                                    <li class="tab-links" onclick="openBattery(event, 'amaron')">
                                        AMARON
                                    </li>
                                </ul>
                            </div>
                            <div class="battery-select">
                                <select class="battery-show-select">
                                    <option hidden>Show (35)</option>
                                    <option>hello</option>
                                    <option>hello 1</option>
                                    <option>hello 2</option>
                                    <option>hello 3</option>
                                    <option>hello 4</option>
                                    <option>hello 5</option>
                                    <option>hello 6</option>
                                </select>
                                <select class="battery-sort-select">
                                    <option hidden>Sort By</option>
                                    <option>hello</option>
                                    <option>hello 1</option>
                                    <option>hello 2</option>
                                    <option>hello 3</option>
                                    <option>hello 4</option>
                                    <option>hello 5</option>
                                    <option>hello 6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="car-battery-body">
                        <div id="varta" class="battery-item-wrapper tab-content">
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Varta Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Varta Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Varta Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <button class="batteries-show-more">Show More</button>
                        </div>
                        <div id="bosch" class="battery-item-wrapper tab-content">
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Bosch Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Bosch Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Bosch Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Bosch Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Bosch Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <button class="batteries-show-more">Show More</button>
                        </div>
                        <div id="trane" class="battery-item-wrapper tab-content">
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Trane Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <button class="batteries-show-more">Show More</button>
                        </div>
                        <div id="amaron" class="battery-item-wrapper tab-content">
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Amaron Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-item">
                                <div class="battery-nameReviews">
                                    <img class="battry-item-img" src="images/battery-item.png"/>
                                    <div class="battery-review-main">
                                        <div class="review-bottom">
                                            <p>S4 023 Amaron Car Battery 12V 45Ah Type 049 S4023</p>
                                            <div class="battery-reviewsWrapper">
                                                <span>Reviews</span>
                                                <img src="images/reviews.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-buy-wrapper">
                                    <div class="battry-buy-details">
                                        <div class="batry-detail">
                                            <span>Voltage</span>
                                            <span>12V</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Coldstart</span>
                                            <span>330</span>
                                        </div>
                                        <div class="batry-detail">
                                            <span>Capacity</span>
                                            <span>45ah</span>
                                        </div>
                                    </div>
                                    <p>AED <span>991.90</span></p>
                                    <div class="buy-btns">
                                        <select class="batry-buy-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <button class="batry-buy-btn">BUY NOW</button>
                                    </div>
                                </div>
                            </div>
                            <button class="batteries-show-more">Show More</button>
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
