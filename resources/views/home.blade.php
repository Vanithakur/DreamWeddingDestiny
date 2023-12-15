@extends('layouts.default')
@section('title', 'Home Page')
@php $user = auth()->user(); @endphp
@section('header')
    @include('includes.header')
@endsection

@section('content')
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h1>
                                        Chocolate <br>
                                        <span>
                                            Yummy
                                        </span>
                                    </h1>
                                    <a href="#">
                                        <span>
                                            Read More
                                        </span>
                                        <img src="images/white-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h1>
                                        Chocolate <br>
                                        <span>
                                            Yummy
                                        </span>
                                    </h1>
                                    <a href="#">
                                        <span>
                                            Read More
                                        </span>
                                        <img src="images/white-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h1>
                                        Chocolate <br>
                                        <span>
                                            Yummy
                                        </span>
                                    </h1>
                                    <a href="#">
                                        <span>
                                            Read More
                                        </span>
                                        <img src="images/white-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding ">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Our Company
                            </h2>
                        </div>
                        <p>
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                            using 'Content here, content here', making it look like readable English. Many desktop
                            publishing packages and web pagend web page editors now use Lorem Ipsum as their default
                            model text, </p>
                        <a href="#">
                            <span>
                                Read More
                            </span>
                            <img src="images/color-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- chocolate section -->

    <section class="chocolate_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our chocolate products
                </h2>
                <p>
                    Many desktop publishing packages and web pagend web page editors now use Lorem Ipsum as their
                </p>
            </div>
        </div>
        <div class="container">
            <div class="chocolate_container">
                @foreach ($servicesInfo as $service)
                    <div class="box">
                        <div class="img-box">
                            <img src="images/chocolate1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                Yummy <span>chocolate {{ $service->name }}</span>
                            </h6>
                            <h5>
                                $5.0
                            </h5>
                            <a href="">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- end chocolate section -->

    <!-- offer section -->

    <section class="offer_section layout_padding">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h2>
                        Offers on chocolates
                    </h2>
                    <h3>
                        Get 5% Offer <br>
                        any Chocolate items
                    </h3>
                    <a href="">
                        Buy Now
                    </a>
                </div>
                <div class="img-box">
                    <img src="images/offer-img.png" alt="">
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    <span>
                        See More
                    </span>
                    <img src="images/color-arrow.png" alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- end offer section -->

    <!-- client section -->

    <section class="client_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <div class="img-box sub_img-box">
                        <img src="images/client-chocolate.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="client_container">
                        <div class="heading_container">
                            <h2>
                                Testimonial
                            </h2>
                        </div>
                        <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="images/client-img.jpg" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h4>
                                                Gero Miliya
                                            </h4>
                                            <p>
                                                long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that it haslong established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                                The point of using Lorem Ipsum is that it haslong established fact that
                                                a reader will be distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem Ipsum is that it has
                                            </p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="images/client-img.jpg" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h4>
                                                Gero Miliya
                                            </h4>
                                            <p>
                                                long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that it haslong established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                                The point of using Lorem Ipsum is that it haslong established fact that
                                                a reader will be distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem Ipsum is that it has
                                            </p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="images/client-img.jpg" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h4>
                                                Gero Miliya
                                            </h4>
                                            <p>
                                                long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that it haslong established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                                The point of using Lorem Ipsum is that it haslong established fact that
                                                a reader will be distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem Ipsum is that it has
                                            </p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_btn-box">
                                <a class="carousel-control-prev" href="#customCarousel2" role="button"
                                    data-slide="prev">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#customCarousel2" role="button"
                                    data-slide="next">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->


    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Full Name " />
                            </div>
                            <div>
                                <input type="text" placeholder="Phone number" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="d-flex ">
                                <button>
                                    SEND NOW
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6  px-0">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row info_form_social_row">
                <div class="col-md-8 col-lg-9">
                    <div class="info_form">
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">

                    <div class="social_box">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row info_main_row">
                <div class="col-md-6 col-lg-3">
                    <div class="info_links">
                        <h4>
                            Menu
                        </h4>
                        <div class="info_links_menu">
                            <a href="index.html">
                                Dashboard
                            </a>
                            <a href="about.html">
                                About
                            </a>
                            <a href="chocolate.html">
                                Chocolates
                            </a>
                            <a href="testimonial.html">
                                Testimonial
                            </a>
                            <a href="contact.html">
                                Contact us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_insta">
                        <h4>
                            Instagram
                        </h4>
                        <div class="insta_box">
                            <div class="img-box">
                                <img src="images/insta-img.png" alt="">
                            </div>
                            <p>
                                long established fact that a reader
                            </p>
                        </div>
                        <div class="insta_box">
                            <div class="img-box">
                                <img src="images/insta-img.png" alt="">
                            </div>
                            <p>
                                long established fact that a reader
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_detail">
                        <h4>
                            Company
                        </h4>
                        <p class="mb-0">
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4>
                        Contact Us
                    </h4>
                    <div class="info_contact">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call +01 1234567890
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope"></i>
                            <span>
                                demo@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->
@endsection
@section('footer')
    @include('includes.footer')
@endsection
