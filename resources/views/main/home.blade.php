@extends('main.layout.app')
@section('content')
    @push('css')
        <style>
            .image-wrapper{
                height:300px;
                width:100%;
            }
            .image-wrapper > img{
                height:100%;
                width:100%;
            }
        </style>
    @endpush
    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">Mate<span>Finder</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=" scroll active"><a href="#home">home</a></li>
                            <li class="scroll"><a href="#works">how it works</a></li>
                            <li class="scroll"><a href="#explore">explore games</a></li>
                            <li class="scroll"><a href="#reviews">review gamers</a></li>
                            <li class="scroll"><a href="#blog">updates</a></li>
                            <li class="scroll"><a href="#contact">have fun lol</a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->
    <!-- top-area End -->

    <!--welcome-hero start -->
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>best place to find the one <br> that is really with you </h2>
                <p>
                    You have a friend to play with just one click away
                </p>
            </div>
            <div class="welcome-hero-serch-box">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <h3>Which game?</h3>
                        <form action="index.html">
                            <input type="text" placeholder="Ex: Overwatch, Rainbow six" />
                        </form>
                        <div class="welcome-hero-form-icon">
                            <i class="flaticon-list-with-dots"></i>
                        </div>
                    </div>
                    <div class="single-welcome-hero-form">
                        <h3>Where?</h3>
                        <form action="index.html">
                            <input type="text" placeholder="Ex: Budapest, Santiago, Kuala Lumpur" />
                        </form>
                        <div class="welcome-hero-form-icon">
                            <i class="flaticon-gps-fixed-indicator"></i>
                        </div>
                    </div>
                </div>
                <div class="welcome-hero-serch">
                    <button class="welcome-hero-btn" onclick="window.location.href='#'">
                        search  <i data-feather="search"></i>
                    </button>
                </div>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <h2><a href="#">resturent</a></h2>
                            <p>150 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-travel"></i>
                            </div>
                            <h2><a href="#">destination</a></h2>
                            <p>214 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="#">hotels</a></h2>
                            <p>185 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">healthcaree</a></h2>
                            <p>200 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <h2><a href="#">automotion</a></h2>
                            <p>120 listings</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>how it works</h2>
                <p>Learn More about how our website works</p>
            </div><!--/.section-header-->
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-lightbulb-idea"></i>
                            </div>
                            <h2><a href="#">choose <span> what to</span> do</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="#">find <span> what you want</span></a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-location-on-road"></i>
                            </div>
                            <h2><a href="#">explore <span> amazing</span> place</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore</h2>
                <p>Explore New place, food, culture around the world and many more</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">

                    @foreach( $games as $row )
                        <div class="col-md-4" style="height: 550px">
                            <a href="{{ route( 'chat', $row->id ) }}">
                                <div class="image-wrapper">
                                    <img src="{{ asset('public/'.$row->image) }}" width="100%" height="100%"  alt="explore image">
                                </div>
                                <div style="padding: 1rem; margin-top: 3rem">
                                    <h2>{{ isset( $row->name ) ? $row->name : "" }}</h2>
                                    <p>{{ isset( $row->description ) ? $row->description : "" }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--reviews start -->
    <section id="reviews" class="reviews">
        <div class="section-header">
            <h2>clients reviews</h2>
            <p>What our client say about us</p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c1.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c2.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c3.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c4.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c1.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c2.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>monirul islam</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c3.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Shohrab Hossain</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{ asset('public/assets/images/clients/c4.png') }}" alt="clients">
                            </div><!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>Tom Leakar</h2>
                                <h4>london, UK</h4>
                                <div class="testimonial-person-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                            </p>
                        </div><!--/.testimonial-comment-->
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->
            </div>
        </div>

    </section><!--/.reviews-->
    <!--reviews end -->

    <!-- statistics strat -->
    <section id="statistics"  class="statistics">
        <div class="container">
            <div class="statistics-counter">
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">90 </div> <span>K+</span>
                        </div><!--/.statistics-content-->
                        <h3>listings</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">40</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>listing categories</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">65</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>visitors</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">50</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>happy clients</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
            </div><!--/.statistics-counter-->
        </div><!--/.container-->

    </section><!--/.counter-->
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog" >
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{ asset('public/assets/images/blog/b1.jpg') }}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{ asset('public/assets/images/blog/b2.jpg') }}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{ asset('public/assets/images/blog/b3.jpg') }}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!--subscription strat -->
    <section id="contact"  class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    do you want to add your business listing with us?
                </h2>
                <p>
                    Listrace offer you to list your business with us and we very much able to promote your Business.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscription-input-group">
                        <form action="#">
                            <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                            <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                                creat account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/subscription-->
    <!--subscription end -->
@endsection