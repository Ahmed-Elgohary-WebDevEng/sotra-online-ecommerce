@extends('layouts.app')

@section('title', 'Shop Page')

@section('styles')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/css/bootstrap.css"/>
    <link rel="stylesheet" href="template/vendors/linericon/style.css"/>
    <link rel="stylesheet" href="template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="template/css/themify-icons.css"/>
    <link rel="stylesheet" href="template/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="template/vendors/lightbox/simpleLightbox.css"/>
    <link rel="stylesheet" href="template/vendors/nice-select/css/nice-select.css"/>
    <link rel="stylesheet" href="template/vendors/animate-css/animate.css"/>
    <link rel="stylesheet" href="template/vendors/jquery-ui/jquery-ui.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="template/css/style.css"/>
    <link rel="stylesheet" href="template/css/responsive.css"/>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
    <x-banner-area page="Shop" description="Shop page that view all products" category="Category" url="{{route('shop')}}"/>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <select class="sorting">
                                <option value="1">Default sorting</option>
                                <option value="2">Default sorting 01</option>
                                <option value="4">Default sorting 02</option>
                            </select>
                            <select class="show">
                                <option value="1">Show 12</option>
                                <option value="2">Show 14</option>
                                <option value="4">Show 16</option>
                            </select>
                        </div>
                    </div>

                    <div class="latest_product_inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i1.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i2.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i3.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i4.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i5.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i6.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i7.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i8.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img
                                            class="card-img"
                                            src="template/img/product/inspired-product/i2.jpg"
                                            alt=""
                                        />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Side Bar For Filter--}}
                <x-shop.sidebar-shop/>
                {{-- End of sidebar  --}}
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection


