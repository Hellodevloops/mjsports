@extends('layout.app')

@section('content')
    <!-- Slider area -->
    <section class="hero-slider-container">
        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one mb-20">
            <!-- Hero Item Start -->
            <div class="hero-item hero-bg-3">
                <div class="row align-items-center justify-content-between">

                    <!-- Hero Content -->
                    <div class="hero-content col-md-6 offset-md-6 col-sm-12 offset-sm-0">
                        <h1>MJ SPORTS</h1>
                        <h2><span>ProPlay Sportswear</span></h2>
                        <p>Your Ultimate Destination for Authentic Jerseys and Sports Gear!</p>
                        {{-- <a href="shop.html">View now</a> --}}
                    </div>


                </div>
            </div><!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item hero-bg-4">
                <div class="row align-items-center justify-content-between">

                    <!-- Hero Content -->
                    <div class="hero-content col-md-6 offset-md-6 col-sm-12 offset-sm-0">

                        <h1>MJ SPORTS</h1>
                        <h2><span>Champion Gear</span></h2>
                        <p>Elevate Your Game with Premium Jerseys and Apparel!</p>
                        {{-- <a href="shop.html">View now</a> --}}

                    </div>
                </div>
            </div><!-- Hero Item End -->
        </div><!-- Hero Slider End -->
    </section>
    <!-- end of slider  area -->


    <!-- featured service section -->
    <!-- featured service -->
    <section class="featured-service-container mb-20">
        <div class="container-fluid ">
            <div class="row px-5">
                <div class="col-lg-4 col-md-6">
                    <!-- single-feature -->
                    <div class="single-featured-service featured-service-bg-1">
                        <div class="single-featured-service-content">

                            {{-- <a href="shop.html">View Collection</a> --}}
                        </div>
                    </div>
                    <!-- end of single feature -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single-feature -->
                    <div class="single-featured-service featured-service-bg-2">
                        <div class="single-featured-service-content">
                            <!-- <h3>Lorem ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing </p> -->
                            {{-- <a href="shop.html">View Collection</a> --}}
                        </div>
                    </div>
                    <!-- end of single feature -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single-feature -->
                    <div class="single-featured-service featured-service-bg-3">
                        <div class="single-featured-service-content">
                            <!-- <h3>Lorem ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing </p> -->
                            {{-- <a href="shop.html">View Collection</a> --}}
                        </div>
                    </div>
                    <!-- end of single feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured service -->



    <!-- End of featured service section -->
    <div class="homepage-content">
        <div class="container-fluid">

            {{-- <div class="row px-5">
                <div class="col-lg-3 col-md-4">
                    <!-- Header category list -->
                    <div class="hero-side-category">

                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li><a href="shop.html">Football</a></li>
                                <li class=""><a href="shop.html">Tennis</a>   </li>
                                <li class=""><a href="shop.html">Basketball</a></li>
                                <li><a href="shop.html">Cricket</a></li>
                                <li><a href="shop.html">Baseball</a></li>
                                <li><a href="shop.html">Skateboarding</a></li>
                                <li><a href="shop.html">Accessories</a></li>
                                <li><a href="shop.html">Footwear</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end of Header category list -->
                </div>
                <div class="col-lg-9 col-lg-">
                    <!-- homepage horizontal tab slider -->
                    <div class="horizontal-tab-section">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    href="#new-arrival" role="tab" aria-selected="true">NEW ARRIVALS</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#on-sale"
                                    role="tab" aria-selected="false">ON SALE</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    href="#featured-product" role="tab" aria-selected="false">FEATURED PRODUCT</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="new-arrival" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/11.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/13.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/12.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/17.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/13.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/14.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/14.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/15.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/17.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/18.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->


                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                            <div class="tab-pane fade" id="on-sale" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/7.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/14.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/17.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/16.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/19.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/20.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/7.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/23.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/25.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/26.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->


                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                            <div class="tab-pane fade" id="featured-product" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/26.jpg"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/27.jpg"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/10.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/faded-short-sleeve-tshirts.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/10.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/9.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/5.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/6.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/9.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="250" height="250"
                                                                    src="assets/images/products/10.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="#">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>Rs. 9000</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart-modal-container"><i
                                                                class="fa fa-phone"></i>
                                                            call us</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                        </div>
                    </div>
                    <!-- End of homepage horizontal tab slider -->


                </div>
            </div> --}}

            <!-- homepage double banner section -->
            <div class="homepage-banners mb-50">
                <div class="row p-5">
                    <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="">
                            <a href="shop.html">
                                <img src="assets/images/banners/banner5.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="">
                            <a href="shop.html">
                                <img src="assets/images/banners/banner6.webp" class="img-fluid" alt="">
                            </a>
                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>

                </div>
            </div>
            <!-- end of homepage double banner section -->


            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="homepage-sidebar">
                        <!-- homepage sidebar banner -->
                        <div class="sidebar">
                            <div class="homepage-sidebar-banner-container mt-40 mb-40">
                                <a href="shop.html">
                                    <img width="269" height="389" src="assets/images/banners/banner-left.webp"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- end of homepage sidebar banner -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="homepage-main-content">
                        <!-- horizontal product slider -->
                        <div class="horizontal-product-slider">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Block title -->
                                    <div class="block-title">
                                        <h2><a href="#">TENNIS</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- horizontal product slider container -->
                                    <div class="horizontal-product-list">
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/18.jpg" class="img-fluid"
                                                            alt="">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/19.jpg" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-container"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="#">Faded
                                                        Short Sleeve</a></h5>
                                                <div class="price-box">
                                                    <h4>Rs. 9000</h4>
                                                </div>

                                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#add-to-cart-modal-container"><i
                                                        class="fa fa-phone"></i> call us</a>
                                            </div>
                                        </div>
                                        <!-- end of single product -->
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/4.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/9.webp" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-container"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="#">Printed
                                                        Dress</a></h5>
                                                <div class="price-box">
                                                    <h4>Rs. 9000</h4>
                                                </div>

                                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#add-to-cart-modal-container"><i
                                                        class="fa fa-phone"></i> call us</a>
                                            </div>
                                        </div>
                                        <!-- end of single product -->
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/5.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/6.webp" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-container"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="#">Printed
                                                        Dress</a></h5>
                                                <div class="price-box">
                                                    <h4>Rs. 9000</h4>
                                                </div>

                                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#add-to-cart-modal-container"><i
                                                        class="fa fa-phone"></i> call us</a>
                                            </div>
                                        </div>
                                        <!-- end of single product -->
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/7.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/8.webp" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-container"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="#">Faded
                                                        Short Sleeve</a></h5>
                                                <div class="price-box">
                                                    <h4>Rs. 9000</h4>
                                                </div>

                                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#add-to-cart-modal-container"><i
                                                        class="fa fa-phone"></i> call us</a>
                                            </div>
                                        </div>
                                        <!-- end of single product -->
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/9.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="250" height="250"
                                                            src="assets/images/products/10.webp" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view-modal-container"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="#">Printed
                                                        Dress</a></h5>
                                                <div class="price-box">
                                                    <h4>Rs. 9000</h4>
                                                </div>

                                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal"
                                                    data-bs-target="#add-to-cart-modal-container"><i
                                                        class="fa fa-phone"></i> call us</a>
                                            </div>
                                        </div>
                                        <!-- end of single product -->


                                    </div>
                                    <!-- end of horizontal product slider container -->
                                </div>
                            </div>
                        </div>
                        <!-- end of horizontal product slider -->
                    </div>
                </div>
            </div>

            <!-- homepage double banner section -->
            <div class="homepage-banners mb-50">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="single-banner-container">
                            <a href="shop.html">
                                <img width="417" height="117" src="assets/images/banners/banner1.webp" class="img-fluid"
                                    alt="">
                            </a>
                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="single-banner-container">
                            <a href="shop.html">
                                <img width="417" height="117" src="assets/images/banners/banner2.webp" class="img-fluid"
                                    alt="">
                            </a>
                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>

                </div>
            </div>
            <!-- end of homepage double banner section -->


            <!--=======================================
	          =            brand logo slider            =
	             ========================================-->

            <div class="brand-logo-slider mb-50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="brand-logo-list">
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/8.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/9.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/10.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/11.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/12.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/14.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->
                                <!-- ======  single brand logo block  ====== -->

                                <div class="single-brand-logo">
                                    <a href="#">
                                        <img width="146" height="85" src="assets/images/brand-logos/7.webp" alt="">
                                    </a>
                                </div>

                                <!-- ====  End of single brand logo block  ==== -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--====  End of brand logo slider  ====-->


            <!-- latest product section -->

            <div class="latest-product-section mb-50">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Block title -->
                        <div class="block-title">
                            <h2>LATEST PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/1.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/8.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/9.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/4.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/5.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/6.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/7.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/8.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/9.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/10.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="#">
                                    <img width="250" height="250" src="assets/images/products/4.webp" class="img-fluid"
                                        alt="">
                                    <img width="250" height="250" src="assets/images/products/9.webp" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
                                <div class="price-box">
                                    <h4>Rs. 9000</h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i
                                        class="fa fa-phone"></i>
                                    call us</a>
                                <p>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view-modal-container">Quick
                                        View</a> | <a href="#">Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                </div>
            </div>

            <!-- end of latest product section -->
        </div>
    </div>

@endsection



