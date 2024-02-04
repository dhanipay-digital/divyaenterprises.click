<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Divya Enterprises - Home</title>

    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/owl.min.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('front-theme') }}/assets/css/main.css">

    <link rel="shortcut icon" href="gallery/favicon.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->

    
    <!--============= Header Section Starts Here =============-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/') }}images/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                       
                    </li>
                    
                    <li>
                        <a href="{{url('/')}}#about_us">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">contact</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}#our_service">Main Service</a>
                    </li>
                    <li>
                        <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                    </li>
                    <li class="d-sm-none">
                        <a href="{{ url('login') }}"
                            class="m-0 header-button">Login</a>
                    </li>
                    
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="{{ url('/login') }}"
                        class="header-button d-none d-sm-inline-block">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    @yield('main-section')
    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section bg_img" data-background="./assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer-top padding-top padding-bottom">
                <div class="logo">
                    <a href="#0">
                        <img src="{{ asset('/') }}images/logo.png" alt="logo png">
                    </a>
                </div>
                {{-- <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/Payvani-APP-Cashback-Recharge-Bill-Payment-Money-Transfer-734106714077444/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Payvaniapp" class="active" target="_blank" ><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC9TEN1WuFyXLL-BCj1oTu2Q" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/payvaniapp1/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul> --}}
            </div>
            <div class="footer-bottom">
                <ul class="footer-link">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                   
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}#our_service">Main Services</a>
                    </li>
                    <li>
                        <a href="privacy-policy.php">Privacy</a>
                    </li>
                    <li>
                        <a href="products">All Products</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>
                    Copyright © 2021.All Rights Reserved By <a href="#0">Divya Enterprises  </a>
                </p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="{{ asset('front-theme') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/magnific-popup.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/waypoints.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/owl.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/counterup.min.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/paroller.js"></script>
    <script src="{{ asset('front-theme') }}/assets/js/main.js"></script>
</body>

</html>
