@extends('front.front-layout')
@section('main-section')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-1 bg_img oh" data-background="{{ asset('front-theme') }}/assets/images/banner/banner-bg-1.jpg">
        <div class="dot-1 d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-2 d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-3">
            <img src="{{ asset('front-theme') }}/assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="dot-4">
            <img src="{{ asset('front-theme') }}/assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="banner-1-shape d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/banner1-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content-1 cl-white">
                        <h1 class="title">Divya Enterprises
                            Makes Your Life Easier
                        </h1>
                        <p>
                            Download Today To See Why.
                        </p>
                        <div class="banner-button-group">
                            <a href="https://play.google.com/store/apps/details?id=com.pay.vani&hl=en&gl=US" target="_blank" class="button-4">Download App</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-1-slider-wrapper">
                        <div class="banner-1-slider owl-carousel owl-theme">
                            <div class="banner-thumb">
                                <img src="{{ asset('front-theme/') }}/paylap_main_banner.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="{{ asset('front-theme') }}/assets/images/banner/banner1-2.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="{{ asset('front-theme') }}/assets/images/banner/banner1-3.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="gallery/paylap_main_banner.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="{{ asset('front-theme') }}/assets/images/banner/banner1-2.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="{{ asset('front-theme') }}/assets/images/banner/banner1-3.png" alt="banner">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Sponsor Section Section Starts Here =============-->
    <div class="sponsor-section padding-bottom padding-top">
        <div class="container">

            <!-- <div class="row align-items-center"> -->

            <!-- <div class="col-lg-12">
                    <div class="sponsor-slider owl-theme owl-carousel">
                        
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/mobile.png" alt="sponsor">
                        </div>
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/electricity.png" alt="sponsor">
                        </div>
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/dth.png" alt="sponsor">
                        </div>
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/water.png" alt="sponsor">
                        </div>
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/metro.png" alt="sponsor">
                        </div>
                        <div class="sponsor-thumb" style="max-width: 59px;">
                            <img src="gallery/category/landline.png" alt="sponsor">
                        </div>
                        
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <!--============= Sponsor Section Section Ends Here =============-->


    <!--============= Amazing Feature Section Starts Here =============-->
    <section class="amazing-feature-section pos-rel" id="feature">
        <div class="shape-container oh">
            <div class="bg_img feature-background" data-background="./assets/images/bg/amazing-feature-bg.jpg"></div>
            <div class="feature-top-shape d-none d-lg-block">
                <img src="{{ asset('front-theme') }}/assets/css/img/feature-shape.png" alt="css">
            </div>
        </div>
        <div class="topper-feature oh padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-header left-style mb-lg-0 white-lg-black pos-rel">
                            <h5 class="cate">Cashback on every time you Recharge</h5>
                            <h2 class="title">Get Huge Cashback on Divya Enterprises</h2>
                            <p>Divya Enterprises is one of the fastest growing App in India for cashback. You can get cashback and save more!</p>
                            <div class="downarrow d-none d-lg-block">
                                <img src="{{ asset('front-theme') }}/assets/images/feature/downarrow.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="https://www.youtube.com/watch?v=hBMF9Fn6cqY" class="feature-video-area popup">
                            <div class="thumb">
                                <img src="gallery/fature-video.png" alt="feature">
                            </div>
                            <div class="button-area">
                                <h4 class="title">
                                    Watch Videos
                                </h4>
                                <div class="video-button">
                                    <i class="flaticon-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="amazing-feature-bottom padding-top padding-bottom pb-lg-0 pt-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header left-style cl-white">

                            <h2 class="title">Features That Matter.</h2>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center mb-30-none">

                            <div class="col-sm-6 col-lg-3">
                                <div class="am-item active">
                                    <div class="am-thumb">
                                        <img src="{{ asset('front-theme') }}/assets/images/feature/am-fea2.png" alt="feature">
                                    </div>
                                    <div class="am-content">
                                        <h5 class="title">256 Bit encryption</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="am-item">
                                    <div class="am-thumb">
                                        <img src="{{ asset('front-theme') }}/assets/images/feature/am-fea3.png" alt="feature">
                                    </div>
                                    <div class="am-content">
                                        <h5 class="title">Quick Access</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="am-item">
                                    <div class="am-thumb">
                                        <img src="{{ asset('front-theme') }}/assets/images/feature/am-fea4.png" alt="feature">
                                    </div>
                                    <div class="am-content">
                                        <h5 class="title">24h Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Amazing Feature Section Ends Here =============-->

    <section class="oh creativity-section padding-bottom bg-max-lg-dark bg_img top_center" data-background="./assets/images/feature/experience-bg.png" style="background-image: url(&quot;./assets/images/feature/experience-bg.png&quot;);" id="about_us">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 padding-top">
                    <div class="section-header left-style mb-0">
                        <h5 class="cate">We Build Apps for Creativity &amp; Productivity</h5>
                        <h2 class="title">About Divya Enterprises</h2>
                        <p>Divya Enterprises is an ultra-innovative and proficient payments & E-Commerce Plantform. Our provided services payment solutions, affiliate services, bill & recharge payments, and marketplace. </p>
                        <p>We have been rapidly thriving as a reputed and independent service provider at many levels. With the proficient squad and multiyear experience, we determine the requirements and needs of our clients and merchants before they even realize them.</p>
                        <p>Divya Enterprises is entirely consistent in its services and technical innovation and is capable of providing merchant services to its esteemed clients that are up to the mark. Our expert sales and professional staff remain available to be able to resolve your concerns related to the payments.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 d-none d-lg-block">
                    <img src="{{ asset('front-theme') }}/assets/images/feature/experience.png" alt="feature">
                </div>
            </div>
        </div>
    </section>
    <section class="how-section padding-bottom padding-top" id="how">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Describe Your App</h5>
                <h2 class="title">Let’s See How It Work</h2>
                <p>It's easier than you think.Follow 3 simple easy steps</p>
            </div>
            <div class="row justify-content-xl-between justify-content-center mb-40-none">
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('front-theme') }}/assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <a href="https://play.google.com/store/apps/details?id=com.pay.vani&hl=en&gl=US" target="_blank" class="button-3 active">Download App</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('front-theme') }}/assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <a href="https://play.google.com/store/apps/details?id=com.pay.vani&hl=en&gl=US" class="button-3">Create Account</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('front-theme') }}/assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <a href="https://play.google.com/store/apps/details?id=com.pay.vani&hl=en&gl=US" class="button-3">Enjoy The App</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Newslater Section Starts Here =============-->
    <section class="newslater-section oh bg_img pos-rel mb-120 mb-max-lg-0" data-background="./assets/images/bg/newslater2.jpg">
        <div class="top-shape d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/top-shape2.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/bottom-shape2.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newslater-area padding-bottom padding-top">
                        <div class="section-header left-style cl-white">
                            <h5 class="cate">Be the first to know</h5>
                            <h2 class="title">About New Features</h2>
                            <p>
                                If you want to receive monthly updates from us just pop your email in the box. You can
                                unsubscribe at any time. Your privacy & personal information will be treated.
                            </p>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="subscribe-thumb-2">
                        <img src="{{ asset('front-theme') }}/assets/images/newslater/newslater2.png" alt="newslater">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Newslater Section Ends Here =============-->


    <!--============= Feature Section Starts Here =============-->
    <section class="feature-section padding-top padding-bottom oh pos-rel">
        <div class="feature-shapes d-none d-lg-block">
            <img src="{{ asset('front-theme') }}/assets/images/feature/feature-shape.png" alt="feature">
        </div>
        <div class="container">
            <div class="section-header mw-725">
                <h5 class="cate">Our App Feature</h5>
                <h2 class="title">We Make Your life Easier </h2>
                <p>
                    At Divya Enterprises, we aim to create an ecosystem enabling everybody to receive payments, for bringing trust and convenience through regular new technology innovation.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-5 rtl">
                    <div class="feature--thumb pr-xl-4 ltr">
                        <div class="feat-slider owl-carousel owl-theme" data-slider-id="1">
                            <div class="main-thumb">
                                <img src="gallery/mobile-paylap.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="gallery/electricity bill.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="gallery/water bill.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="gallery/delhi metro.png" alt="feature">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-wrapper mb-30-none owl-thumbs" data-slider-id="1">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/pro1.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Mobile Recharge</h4>

                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/pro2.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">DTH & Electricity Bill Payment</h4>

                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/pro3.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Water, Gas, Landline Payments </h4>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/pro4.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Fastag, Metro, Insurance & Much More Payments</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Section Ends Here =============-->


    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-md-0 bg_img pos-rel" data-background="./assets/images/bg/pricing-bg.jpg" id="pricing">
        <div class="top-shape d-none d-md-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{ asset('front-theme') }}/assets/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{ asset('front-theme') }}/assets/images/balls/6.png" alt="balls">
        </div>

    </section>
    <!--============= Pricing Section Ends Here =============-->
    <section class="exclusive-section padding-bottom-2 padding-top oh" id="our_service">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6">
                    <div class="section-header left-style">
                        <h5 class="cate">An Exhaustive list of Amazing Features</h5>
                        <h2 class="title">OUR MAIN SERVICES
                        </h2>
                        <p>
                            Divya Enterprises is home of the best and experienced mobile app, Web developers and designers who have proved their worth by delivering most advanced and innovative apps to our clients.
                        </p>
                    </div>
                    <div class="row mb--20">
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/01.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">iPhone App
                                        Development</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/02.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Android App
                                        Development</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/03.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Hybrid App
                                        Development

                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/04.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Web App Development</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/05.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Mobile
                                        Website Design</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('front-theme') }}/assets/images/feature/06.png" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Progressive Web App</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 d-lg-block d-none">
                    <div class="feature-1-thumb mt-0 ex-feature">
                        <img src="{{ asset('front-theme') }}/assets/images/feature/feature02.png" alt="feature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="./assets/images/bg/pricing-bg.jpg" id="pricing">
        <div class="top-shape d-none d-md-block">
            <img src="{{ asset('front-theme') }}/assets/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block mw-0">
            <img src="{{ asset('front-theme') }}/assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{ asset('front-theme') }}/assets/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ asset('front-theme') }}/assets/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{ asset('front-theme') }}/assets/images/balls/6.png" alt="balls">
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-2"></div> -->
                <div class="col-lg-12">
                    <div class="contact-wrapper">
                        <h4 class="title text-center mb-30">Have a question? or just say hello!
                        </h4>
                        <form class="contact-form" id="contact_form_submit">

                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" placeholder="Enter Your Full Name" id="name" required="">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" placeholder="Enter Your Phone Number " id="phone" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email </label>
                                <input type="text" placeholder="Enter Your Email " id="email" required="">
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Your Message </label>
                                <textarea id="message" placeholder="Enter Your Message" required=""></textarea>
                                <div class="form-check">
                                    <input type="checkbox" id="check" checked=""><label for="check">I agree to receive emails, newsletters and promotional messages</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============= Coverage Section Ends Here =============-->
    
@endsection