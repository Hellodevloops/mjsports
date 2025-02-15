@extends('layout.app')

@section('content')
    <!-- Slider area -->
    <section class="hero-slider-container">
        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one mb-20">
            <!-- Hero Item Start -->
            <div class="hero-item hero-bg-3">
                <div class="row align-items-center justify-content-between">

                    <div class="hero-content col-md-6 offset-md-6 col-sm-12 offset-sm-0">
                        <!-- <h1 class="">MJ SPORTS</h1> -->
                        <h1 class=""><span>ProPlay Sportswear</span></h1>
                        <h4 class="text-dark"><span>Your Ultimate Destination for Authentic Jerseys and Sports Gear!</span></h4>
                        {{-- <a href="#">Call now</a> --}}
                    </div>

                </div>
            </div>
            <!-- Hero Item End -->

             <!-- Hero Item Start -->
             <div class="hero-item hero-bg-2">
                <div class="row align-items-center justify-content-between">

                    <div class="hero-content col-md-6 offset-md-6 col-sm-12 offset-sm-0">
                        <!-- <h1 class="text-white fw-bold">MJ SPORTS</h1> -->
                        <h1 class="text-white fw-bold"><span>Create Your Dream Sports Jersey</span></h1>
                        <h4 class="text-white fw-bold">Custom jerseys for every team, every sport. Made to fit your style and performance.</h4>
                        {{-- <a href="#" class="btn btn-outline-danger">Call now</a> --}}
                    </div>

                </div>
            </div>
            <!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item hero-bg-4">
                <div class="row align-items-center justify-content-between">

                    <!-- Hero Content -->
                    <div class="hero-content col-md-6 offset-md-6 col-sm-12 offset-sm-0">

                        <!-- <h1>MJ SPORTS</h1> -->
                        <h1><span>Champion Gear</span></h1>
                        <h4>Elevate Your Game with Premium Jerseys and Apparel!</h4>
                        {{-- <a href="#">Call now</a> --}}

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

                            <a href="{{route('contact')}}">Contact US</a>
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
                            <a href="{{route('contact')}}">Contact US</a>
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
                            <a href="{{route('contact')}}">Contact US</a>
                        </div>
                    </div>
                    <!-- end of single feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured service -->


    <section class="page-content about-page-content mt-50 mb-50">
        <div class="container-fluid px-5">
            <div class="row px-5  ">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-single-block">
                        <h1 class="text-danger mb-0">Welcome</h1>
                        <hr class="text-danger mt-0 border border-top border-danger">
                        <p>At <span class="fw-bold text-danger"> MJ Sport</span>, we specialize in designing and
                            creating custom sports jerseys tailored to your team’s needs. Whether you're a professional
                            athlete, a weekend warrior, or a school team, we bring your vision to life. With top-quality
                            fabrics, vibrant colors, and expert craftsmanship, we ensure every jersey meets the highest
                            standards of comfort, durability, and style.

                            we have a passion for sports and a commitment to providing the best in personalized athletic
                            apparel. Our team of experts works with you from start to finish, ensuring that each jersey
                            is unique, functional, and exactly what you need to perform at your best.
                        </p>

                        <p>We believe that every athlete deserves to feel confident and empowered in their gear. That’s
                            why we take pride in offering not just jerseys, but a representation of your team’s spirit
                            and identity. From local leagues to professional squads, we collaborate with athletes,
                            coaches, and organizations to create jerseys that inspire pride and performance. Our team is
                            dedicated to ensuring a seamless experience from concept to delivery, and we’re committed to
                            bringing your team’s vision to life with the highest level of craftsmanship and customer
                            care.

                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 d-flex align-items-stretch">
                    <div class="about-single-block">


                        <div class="about-team-image">
                            <img src="{{ asset('assets/images/products/home.jpg')}}" class="img-fluid" alt="">
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>


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
                                <img width="146" height="85" src="{{ asset('assets/images/brand-logos/8.webp')}}" alt="">
                            </a>
                        </div>

                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->

                        <div class="single-brand-logo">
                            <a href="#">
                                <img width="146" height="85" src="{{ asset('assets/images/brand-logos/9.webp')}}" alt="">
                            </a>
                        </div>

                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->



                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->

                        <div class="single-brand-logo">
                            <a href="#">
                                <img width="146" height="85" src="{{ asset('assets/images/brand-logos/11.webp')}}" alt="">
                            </a>
                        </div>

                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->

                        <div class="single-brand-logo">
                            <a href="#">
                                <img width="146" height="85" src="{{ asset('assets/images/brand-logos/12.webp')}}" alt="">
                            </a>
                        </div>

                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->

                        <div class="single-brand-logo">
                            <a href="#">
                                <img width="146" height="85" src="{{ asset('assets/images/brand-logos/14.webp')}}" alt="">
                            </a>
                        </div>

                        <!-- ====  End of single brand logo block  ==== -->
                        <!-- ======  single brand logo block  ====== -->


                        <!-- ====  End of single brand logo block  ==== -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====  End of brand logo slider  ====-->

     <!--========================================
					=            newsletter section            =
					=========================================-->

                    <section class="newsletter-section">
                        <div class="container">
                            <div class="newsletter-container dark-bg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12 col-sm-12">

                                            <!-- ======  Newsletter input box  ======= -->

                                            <div class="newsletter-wrapper d-md-flex">
                                                <!-- newsletter text -->
                                                <div class="newsletter-text ps-2">
                                                    <h2 class="text-danger">Ready to Design Your Custom Jersey? <span
                                                            class="text-white">Bring your vision to life with our easy-to-use design
                                                            tool.</span></h2>
                                                </div>
                                                <!-- end of newsletter text -->


                                            </div>

                                            <!-- ====  End of Newsletter input box  ==== -->

                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <!-- ======  Social icon list  ======= -->

                                            <div class="social-icons text-end mt-5">
                                                <a href="{{ route('jersey') }}" class="btn btn-danger">Contact Now</a>
                                            </div>


                                            <!-- ====  End of Social icon list  ==== -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--====  End of newsletter section  ====-->



    <section class="page-content about-page-content mt-50 mb-50">
        <div class="container-fluid px-5">
            <div class="row px-5  ">
                <div class="col-lg-6 col-md-6 col-12 d-flex align-items-stretch">
                    <div class="about-single-block">


                        <div class="about-team-image">
                            <img src="{{ asset('assets/images/products/home2.webp')}}" class="img-fluid" alt="">
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-single-block">
                        <h1 class="text-danger mb-0">Why Choose Our Jerseys?</h1>
                        <hr class="text-danger mt-0 border border-top border-danger">
                        <p>At <span class="fw-bold text-danger"> MJ Sport</span>, we believe that a great jersey is more
                            than just a uniform – it's an essential part of every athlete’s performance and pride. Our
                            jerseys are designed with the highest attention to detail, combining top-notch materials and
                            cutting-edge design techniques to ensure you not only look great but also feel your best on
                            the field, court, or track. We understand that each team has its own personality, goals, and
                            unique style, which is why we work closely with you to create custom jerseys that reflect
                            your team's identity while providing the comfort and functionality athletes need to perform
                            at their peak. Whether you're a professional athlete, part of a recreational league, or
                            representing your school team, our jerseys are built to meet the demands of every level of
                            competition.
                        </p>

                        <div class="featured-points">
                            <ul>
                                <li>Premium Quality. </li>
                                <li>Customizable Designs.</li>
                                <li>Perfect Fit for Every Athlete</li>
                                <li> Expert advice for all your sporting needs</li>
                                <li>Durability You Can Trust</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- End of featured service section -->
    <div class="homepage-content">
        <div class="container-fluid">
            <!-- homepage double banner section -->
            <div class="homepage-banners mb-50">
                <div class="row p-5">
                    <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="d-flex align-items-stretchv">

                            <img src="{{ asset('assets/images/banners/banner5.jpg')}}" class="img-fluid" alt="">

                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- ======  Homepage single split banner  ======= -->

                        <div class="d-flex align-items-stretch">

                            <img src="{{ asset('assets/images/banners/banner7.webp')}}" class="img-fluid" alt="">

                        </div>

                        <!-- ====  End of Homepage single split banner  ==== -->

                    </div>

                </div>
            </div>
            <!-- end of homepage double banner section -->
        </div>
    </div>

    <!--====  End of homepage content section  ====-->


    <!--========================================
					=            newsletter section            =
					=========================================-->

    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-container dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">

                            <!-- ======  Newsletter input box  ======= -->

                            <div class="newsletter-wrapper d-md-flex">
                                <!-- newsletter text -->
                                <div class="newsletter-text">
                                    <h2>Don’t wait until the last minute – get your jerseys for the upcoming season
                                        today!<span></span></h2>
                                </div>
                                <!-- end of newsletter text -->


                            </div>

                            <!-- ====  End of Newsletter input box  ==== -->

                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <!-- ======  Social icon list  ======= -->

                            <div class="social-icons text-end mt-5">
                                <a href="{{ route('jersey') }}" class="btn btn-danger">Order Now</a>
                            </div>

                            <!-- ====  End of Social icon list  ==== -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of newsletter section  ====-->


    <section class="page-content mt-50 mb-50">
        <div class="container">

            <div class="row d-flex">
                <div class="col-lg-12 col-md-12 col-12 d-flex">
                    <div class="contact-form-container flex-grow-1">
                        <h2>SEND A MESSAGE</h2>
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <button type="submit" name="submit"> Submit <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                    </div>
                </div>


            </div>

        </div>
    </section>




    @endsection
