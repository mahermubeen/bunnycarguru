@extends('layouts.header')

@section('content')
    <div class="main-wrapper blog">
        <section class="heading-section">
            <h1>Blog</h1>
            <p>Home &bull; Blog</p>
        </section>

        <section class="blog-section">
            <div class="container blog-container">
                <div class="section-1">
                    <figure class="guru-img">
                        <img src="images/blog-car-guru-img.png" />
                    </figure>
                    <div class="recent-posts">
                        <h3>
                            Recent Posts
                            <div class="green-line"></div>
                        </h3>
                        <div class="recent-posts-ul">
                            <ul>
                                <li><img src="images/list-dot.png"/>Lorem Ipsum is simply dummy</li>
                                <li><img src="images/list-dot.png"/>Lorem Ipsum is simply</li>
                                <li><img src="images/list-dot.png"/>Lorem Ipsum is simply dummy</li>
                                <li><img src="images/list-dot.png"/>Lorem Ipsum is simply</li>
                                <li><img src="images/list-dot.png"/>Lorem Ipsum is simply dummy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="recent-projects">
                        <h3>
                            Recent Projects
                            <div class="green-line"></div>
                        </h3>
                        <figure>
                                <img src="images/recent-project-img1.png" />
                            <img src="images/recent-project-img2.png" />
                            <img src="images/recent-project-img3.png" />
                            <img src="images/recent-project-img4.png" />
                            <img src="images/recent-project-img5.png" />
                            <img src="images/recent-project-img6.png" />
                        </figure>
                    </div>
                    <div class="recent-tweets">
                        <h3>
                            Recent Tweets
                            <div class="green-line"></div>
                        </h3>
                        <div class="tweets-detail">
                            <figure>
                                <img src="images/tweeter-img.png"/>
                            </figure>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever…</p>
                            <span>3:38 AM - 6 Jul 2016</span>
                        </div>
                        <div class="tweets-detail">
                            <figure>
                                <img src="images/tweeter-img.png"/>
                            </figure>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever…</p>
                            <span>3:43 AM - 6 Jul 2016</span>
                        </div>
                    </div>
                    <div class="categories">
                        <h3>
                            Categories
                            <div class="green-line"></div>
                        </h3>
                        <ul class="categories-ul">
                            <li>
                                <img src="images/right-arrow-categories.png"/>
                                Phone
                            </li>
                            <li>
                                <img src="images/right-arrow-categories.png"/>
                                Website
                            </li>
                            <li>
                                <img src="images/right-arrow-categories.png"/>
                                Magento
                            </li>
                        </ul>
                    </div>
                    <div class="find-on-facebook">
                        <h3 class="find-fb-heading">
                            Find us on Facebook
                            <div class="green-line"></div>
                        </h3>
                        <div class="facebook-wrapper">
                            <img src="images/fb-carguru-img.png" />
                            <div class="fb-likes">
                                <h3 class="800-carguru">800CarGuru</h3>
                                <span>9745 likes</span>
                            </div>
                        </div>
                        <div class="like-btn-wrapper">
                            <a href={{url('/fb-likes')}}>
                                <img src="images/fb-like-btn.png" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-2">
                    <div class="main-blogs">
                        <figure>
                            <img src="images/blog-img1.png" />
                        </figure>
                        <div class="blog-details">
                            <h2>Lorem ispum Dolor Smith eme</h2>
                            <div class="admin-wrapper">
                                <span>Admin</span>
                                <p class="date-blog">Jun 11, 2018</p>
                            </div>
                            <p class="blog-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s...
                            </p>
                            <button><a href={{url('/blog-more')}}>More</a></button>
                        </div>
                    </div>
                    <div class="main-blogs">
                        <figure>
                            <img src="images/blog-img2.png" />
                        </figure>
                        <div class="blog-details">
                            <h2>Lorem ispum Dolor Smith eme</h2>
                            <div class="admin-wrapper">
                                <span>Admin</span>
                                <p class="date-blog">Jun 11, 2018</p>
                            </div>
                            <p class="blog-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s...
                            </p>
                            <button><a href={{url('/blog-more')}}>More</a></button>
                        </div>
                    </div>
                    <div class="main-blogs">
                        <figure>
                            <img src="images/blog-img3.png" />
                        </figure>
                        <div class="blog-details">
                            <h2>Lorem ispum Dolor Smith eme</h2>
                            <div class="admin-wrapper">
                                <span>Admin</span>
                                <p class="date-blog">Jun 11, 2018</p>
                            </div>
                            <p class="blog-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s...
                            </p>
                            <button><a href={{url('/blog-more')}}>More</a></button>
                        </div>
                    </div>
                    <div class="pages-back-forward"></div>
                </div>
            </div>
        </section>
    </div>
@endsection
