@extends('layout.app')

@section('content')
<div id="page">
    <div class="container-fluid">
        <div class="outer-row row">
            <div class="col-md-12">


                <!--===========================================
                =            contact content section            =
                ============================================-->

                <section class="page-content mt-50 mb-50">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="page-title">
                                    <h2>CUSTOMER SERVICE - CONTACT US</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-lg-6 col-md-6 col-12 d-flex">
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
                                            <!-- <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" name="contact_subject" value="{{ old('contact_subject') }}">
                                                @error('contact_subject')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div> -->
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
                                        <!-- <div class="col-lg-12">
                                            <div class="g-recaptcha" data-sitekey="6Lf_3zAqAAAAAN4jyq-bdzFbAEc-6Rlj3vqYugFe"></div>
                                            @error('g-recaptcha-response')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> -->
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

                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="card flex-grow-1">
                                    <div class="card-body p-0 m-0">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17557.425623807838!2d73.23811647158752!3d22.316064137757007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcff1cc44a8b9%3A0xf2cd676a7e60a0dd!2sM.J.%20Sports!5e0!3m2!1sen!2sin!4v1739181494714!5m2!1sen!2sin"
                                                width="100%" height="420px" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!--====  End of contact content section  ====-->




                <!--============================
                =            footer            =
                =============================-->



                <!--====  End of footer  ====-->
            </div>
        </div>
    </div>
</div>
@endsection
