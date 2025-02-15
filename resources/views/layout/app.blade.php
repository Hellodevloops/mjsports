<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/rossi/rossi/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2025 04:04:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MJ SPORTS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- ************************* CSS ************************* -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

     <!-- Fontawesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-9a26f71a0382097754e89a94b43cf564.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css">

     <!-- IcoFont CSS -->
    <link href="{{ asset('assets/css/icon-font.min.css')}}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body class="full-width">

    <!--=============================
	=            Header             =
	==============================-->

    <header>
        <!-- header top nav -->
        <div class="header-top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- user information menu -->
                        <div class="user-information-menu">
                            <ul>
                                <li><i class="fa fa-phone"></i> 08141273565 <span class="separator">|</span></li>
                                <li><i class="fa fa-location-dot"></i> GF-10, Kanha Dreams, Opp. Lakulesh-1, Ajwa Rd, Kamlanagar, Vadodara, Gujarat 390019<span class="separator">|</span></li>
                                <li><i class="fa-solid fa-envelope"></i> Mjsports@gmail.com <span class="separator">|</span></li>
                            </ul>
                        </div>
                        <!-- end of user information menu -->
                    </div>

                </div>
            </div>
        </div>
        <!-- end of header top nav -->


        <!-- header navigation menu -->
        <nav class="header-navigation black-bg">
            <div class="container px-0">
                <div class="navigation-container mb-0 p-0">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                             <!-- logo -->
                        <div class="logo">
                            <a href="index.html"><img width="70px"  src="{{ asset('assets/images/logo-mj.png')}}"
                                    class="img-fluid p-0 m-0" alt="logo"></a>
                        </div>
                        <!-- end of logo -->
                        </div>
                        <div class="col-lg-9 col-md-12 my-auto">

                            <!-- Header navigation right side-->

                            <!-- main menu start -->
                            <div class="main-menu">
                                <nav>
                                    <ul class="" >
                                        <li class="active "><a href="{{ route('home') }}">Home</a> </li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('jersey') }}">Custom Jersey</a></li>
                                        <!-- <li class=""><a href="shop.html">Shop</a> </li> -->
                                        <li class=""><a href="{{ route('blog.index') }}">Blog</a></li>
                                        <li class=""><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>

                                <!-- Mobile Menu -->
                                <div class="mobile-menu order-12 d-block col d-lg-none"></div>

                            </div>

                            <!-- end of Header navigation right side-->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end of header navigation menu -->

    </header>
    <!-- Content -->

        @yield('content')


    <!-- Footer -->
    <footer>
        <div class="container-fluid bg-black p-5">
            <!-- footer navigation -->
            <div class="footer-navigation section-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-4 ">
                        <!-- footer description -->
                        <div class="footer-description">
                            <div class="footer-logo text-center">
                                <img width="167" height="69" src="{{ asset('assets/images/logo-mj.png')}}" alt="">
                            </div>
                            <div class="text-center">
                                <p class="text-wrap mb-1 "><i class="fa fa-phone"></i> 08141273565 <span class="separator"></span> </p>
                                <p class="text-wrap mb-1 "><i class="fa fa-location-dot"></i> GF-10, Kanha Dreams, Opp. Lakulesh-1, Ajwa Rd,
                                    Kamlanagar, Vadodara, Gujarat 390019<span class="separator"></span>
                                </p>
                                <p class="text-wrap mb-1 "> <i class="fa-solid fa-envelope"></i> Mjsports@gmail.com</p>
                            </div>
                        </div>
                        <!-- end of footer description -->
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <!-- footer nav links -->
                        <div class="row ">
                            <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">OUR SERVICES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About US</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div>
                            {{-- <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">OUR SERVICES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="store.html">Our Stores</a></li>
                                        <li><a href="about.html">Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">CATEGORIES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="jersey.html">Oder Our Jersey</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Visit Us</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div> --}}
                        </div>
                        <!-- end of footer nav links -->

                    </div>
                </div>
            </div>
            <!-- end of footer navigation -->

            <!-- copyright section -->
            <div class="copyright-section">
                <div class="copyright-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-text text-center text-md-start">Copyright &copy; 2025 <a
                                    href="#">Devloops</a>.
                                All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment-logos text-md-end text-center">
                                <img width="252" height="28" src="{{ asset('assets/images/payment.webp')}}" alt="payment logo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of copyright section -->
            </div>
        </div>
    </footer>

    <!--====  End of footer  ====-->


<!-- quick view modal -->
<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <!-- product quickview image gallery -->
                    <!--Modal Tab Content Start-->
                    <div class="tab-content product-details-large" id="myTabContent">
                        <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                            aria-labelledby="single-slide-tab-1">
                            <!--Single Product Image Start-->
                            <div class="single-product-img img-full">
                                <img width="458" height="458"
                                    src="{{ asset('assets/images/product-slider-images/image1.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <!--Single Product Image End-->
                        </div>
                        <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                            aria-labelledby="single-slide-tab-2">
                            <!--Single Product Image Start-->
                            <div class="single-product-img img-full">
                                <img width="458" height="458"
                                    src="{{ asset('assets/images/product-slider-images/image2.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <!--Single Product Image End-->
                        </div>
                        <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                            aria-labelledby="single-slide-tab-3">
                            <!--Single Product Image Start-->
                            <div class="single-product-img img-full">
                                <img width="458" height="458"
                                    src="{{ asset('assets/images/product-slider-images/image3.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <!--Single Product Image End-->
                        </div>
                        <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                            aria-labelledby="single-slide-tab-4">
                            <!--Single Product Image Start-->
                            <div class="single-product-img img-full">
                                <img width="458" height="458"
                                    src="{{ asset('assets/images/product-slider-images/image4.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <!--Single Product Image End-->
                        </div>
                    </div>
                    <!--Modal Content End-->
                    <!--Modal Tab Menu Start-->
                    <div class="single-product-menu">
                        <div class="nav single-slide-menu" role="tablist">
                            <div class="single-tab-menu img-full">
                                <a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img
                                        width="458" height="458"
                                        src="{{ asset('assets/images/product-slider-images/image1.webp')}}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="single-tab-menu img-full">
                                <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                        width="458" height="458"
                                        src="{{ asset('assets/images/product-slider-images/image2.webp')}}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="single-tab-menu img-full">
                                <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                        width="458" height="458"
                                        src="{{ asset('assets/images/product-slider-images/image3.webp')}}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="single-tab-menu img-full">
                                <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                        width="458" height="458"
                                        src="{{ asset('assets/images/product-slider-images/image4.webp')}}" class="img-fluid"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Modal Tab Menu End-->
                    <!-- end of product quickview image gallery -->
                </div>
                <div class="col-lg-7 col-md-5">
                    <!-- product quick view description -->
                    <div class="product-options">
                        <h2 class="product-title">FADED SHORT SLEEVE</h2>
                        <p class="condition"><span>Condition:</span> New</p>
                        <h2 class="product-price">Rs.12.90</h2>
                        <p class="product-description">Faded short sleeve t-shirt with high neckline. Soft and
                            stretchy material
                            for a
                            comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                        <div class="social-share-buttons">
                            <ul>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i>
                                        Google+</a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i> Pinterest</a>
                                </li>
                            </ul>
                        </div>
                        <p class="stock-details">288 items <span class="stock-status in-stock">In Stock</span>
                        </p>
                        <p class="quantity">Quantity:
                            <span class="pro-qty counter"><input type="text" value="1" class="mr-5"></span>

                        </p>
                        <p class="size">
                            Size: <br>
                            <select name="chooseSize" id="chooseSize">
                                <option value="0">XXL</option>
                                <option value="0">L</option>
                                <option value="0">M</option>
                                <option value="0">S</option>
                            </select>
                        </p>
                        <p class="color">
                            Color: <br>
                            <a href="#"><span class="color-block color-choice-1"></span></a>
                            <a href="#"><span class="color-block color-choice-2"></span></a>
                            <a href="#"><span class="color-block color-choice-3 active"></span></a>
                        </p>

                    </div>
                    <!-- end of product quick view description -->
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- end of quick view modal -->







<!-- scroll to top  -->
<a href="#" class="scroll-top"></a>
<!-- end of scroll to top -->



<!-- ************************* JS ************************* -->
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery.min.js')}}"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

</body>
</html>
