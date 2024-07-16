@extends('users.layout.default')

@section('content')
<main class="main-wrapper">
    @include('users.layout.header')

    <!-- Poster Countdown Area  -->
    <div class="axil-poster-countdown">
        <div class="container">
            <div class="poster-countdown-wrap bg-lighter">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="poster-countdown-content">
                            <div class="section-title-wrapper">
                                <span class="title-highlighter highlighter-secondary"> <i
                                        class="fal fa-headphones-alt"></i> Don’t Miss!!</span>
                                <h2 class="title">Enhance Your Music Experience</h2>
                            </div>
                            <div class="poster-countdown countdown mb--40"></div>
                            <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="poster-countdown-thumbnail">
                            <img src="assets/images/product/poster/poster-03.png" alt="Poster Product">
                            <div class="music-singnal">
                                <div class="item-circle circle-1"></div>
                                <div class="item-circle circle-2"></div>
                                <div class="item-circle circle-3"></div>
                                <div class="item-circle circle-4"></div>
                                <div class="item-circle circle-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Poster Countdown Area  -->

    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our
                    Products</span>
                <h2 class="title">Explore our Products</h2>
            </div>
            <div
                class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/electric/product-01.png"
                                            alt="Product Images">
                                        <img class="hover-img" src="assets/images/product/electric/product-08.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option">
                                                <a href="single-product.html">
                                                    Add to Cart
                                                </a>
                                            </li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">(64)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Yantiti Leather & Canvas
                                                Bags</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-02.png"
                                            alt="Product Images">
                                        <img class="hover-img" src="assets/images/product/electric/product-06.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-03.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Logitech Streamcam</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-04.png"
                                            alt="Product Images">
                                        <img class="hover-img" src="assets/images/product/electric/product-05.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">(44)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-05.png"
                                            alt="Product Images">
                                        <img class="hover-img" src="assets/images/product/electric/product-04.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Bass Meets Clarity</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-06.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Mice Logitech</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-07.png"
                                            alt="Product Images">
                                        <img class="hover-img" src="assets/images/product/electric/product-08.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">(64)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Zone Headphone</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="800"
                                            loading="lazy" src="assets/images/product/electric/product-08.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="row row--15">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-01.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Yantiti Leather & Canvas
                                                Bags</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-02.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-03.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-04.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-05.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-06.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-07.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/electric/product-08.png"
                                            alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% Off</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Select
                                                    Option</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span
                                                            class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span
                                                            class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->

                    </div>
                </div>
                <!-- End .slick-single-layout -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Expolre Product Area  -->

    <!-- Start Testimonila Area  -->
    @include('users.layout.feedback')
    <!-- End Testimonila Area  -->

    <!-- Start New Arrivals Product Area  -->
    <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
        <div class="container">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>This
                        Week’s</span>
                    <h2 class="title">New Arrivals</h2>
                </div>
                <div
                    class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500"
                                        src="assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">10% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span
                                                        class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Demon's Souls</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$40</span>
                                        <span class="price current-price">$30</span>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Add to
                                                    Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500"
                                        src="assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span
                                                        class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Google Home</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$40</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                        </li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a>
                                        </li>
                                        <li class="wishlist"><a href="wishlist.html"><i
                                                    class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500"
                                        src="assets/images/product/electric/product-07.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">15% OFF</div>
                                </div>

                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span
                                                        class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Netfilx Remot</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$60</span>
                                        <span class="price current-price">$45</span>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Add to
                                                    Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500"
                                        src="assets/images/product/electric/product-08.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>

                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span
                                                        class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Digital Accessories</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30</span>
                                        <span class="price current-price">$20</span>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Add to
                                                    Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500"
                                        src="assets/images/product/electric/product-04.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span
                                                        class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">PS5 Smart Remote</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$25</span>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="single-product.html">Add to
                                                    Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
    </div>
    <!-- End New Arrivals Product Area  -->

    <!-- Start Most Sold Product Area  -->
    <div class="axil-most-sold-product axil-section-gap">
        <div class="container">
            <div class="product-area pb--50">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most
                        Sold</span>
                    <h2 class="title">Most Sold in eTrade Store</h2>
                </div>
                <div class="row row-cols-xl-2 row-cols-1 row--15">
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-09.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>100+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$29.99</span>
                                    <span class="price old-price">$49.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="200" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-10.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>50+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">HD Camera</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$49.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="300" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-11.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>120+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Gaming Controller</a>
                                </h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$50.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-12.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>30+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Wall Mount </a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$19.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-13.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>700+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Lenevo Laptop</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$999.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i
                                            class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="600" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-14.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>300+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Juice Grinder
                                        Machine</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$99.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i
                                            class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-15.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>100+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Wireless Headphone</a>
                                </h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$59.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i
                                            class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500"
                                        src="assets/images/product/electric/product-16.png"
                                        alt="Yantiti Leather Bags">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span class="rating-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <span class="rating-number"><span>100+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="single-product.html">Asus Zenbook Laptop</a>
                                </h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$899.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="cart.html" class="cart-btn"><i
                                            class="fal fa-shopping-cart"></i></a>
                                    <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Most Sold Product Area  -->


</main>
@endsection
