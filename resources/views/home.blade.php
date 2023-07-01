@extends('layouts.app')

@section('title', 'Home Page')

@section('styles')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/css/bootstrap.css"/>
    <link rel="stylesheet" href="template/vendors/linericon/style.css"/>
    <link rel="stylesheet" href="template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="template/css/themify-icons.css"/>
    <link rel="stylesheet" href="template/css/flaticon.css"/>
    <link rel="stylesheet" href="template/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="template/vendors/lightbox/simpleLightbox.css"/>
    <link rel="stylesheet" href="template/vendors/nice-select/template/css/nice-select.css"/>
    <link rel="stylesheet" href="template/vendors/animate-template/css/animate.css"/>
    <link rel="stylesheet" href="template/vendors/jquery-ui/jquery-ui.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="template/css/style.css" />
    <link rel="stylesheet" href="template/css/responsive.css" /></head>
@endsection

@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">men Collection</p>
                        <h3><span>Show</span> Your <br/>Personal <span>Style</span></h3>
                        <h4>Fowl saw dry which a above together place.</h4>
                        <a class="main_btn mt-40" href="#">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-money"></i>
                            <h3>Money back gurantee</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-truck"></i>
                            <h3>Free Delivery</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-support"></i>
                            <h3>Alway support</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-blockchain"></i>
                            <h3>Secure payment</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!--================ Feature Product Area =================-->
    <x-products.featured-products/>
    <!--================ End Feature Product Area =================-->

    <!--================ Offer Area =================-->
    <section class="offer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="offset-lg-4 col-lg-6 text-center">
                    <div class="offer_content">
                        <h3 class="text-uppercase mb-40">all men’s collection</h3>
                        <h2 class="text-uppercase">50% off</h2>
                        <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
                        <p>Limited Time Offer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Offer Area =================-->

    <!--================ New Product Area =================-->
    <x-products.new-products/>
    <!--================ End New Product Area =================-->

    <!--================ Inspired Product Area =================-->
    <x-products.inspired-products/>
    <!--================ End Inspired Product Area =================-->

    <!--================ Start Blog Area =================-->
    <x-blogs.latest-blog/>
    <!--================ End Blog Area =================-->

@endsection



