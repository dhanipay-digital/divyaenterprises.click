
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Divya Enterprises - Recharge & Bill Payment, Booking</title>
<meta name="description" content="Divya Enterprises - Recharge & Bill Payment, Booking">
<meta name="author" content="https://dhannipaydigital.com/">

<!-- Web Fonts
============================================= -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/stylesheet.css" />
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>
<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo me-2 me-lg-3"> <a href="index.html" class="d-flex" title="Quickai - HTML Template"><img style="width: 300px;height:60px;"  src="{{ asset('/') }}images/logo.png" alt="Quickai" /></a> </div>
          <!-- Logo end --> 
          
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login Signup
		  =============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li class="profile"><a href="{{ url('/login') }}" class="pe-0"><span class="d-none d-sm-inline-block">Login</span> <span class="user-icon ms-sm-2"><i class="fas fa-user"></i></span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  
  <!-- Content
  ============================================= -->
  <div id="content"> 
    
    <!-- Secondary Navigation
    ============================================= -->
    <div class="bg-secondary">
      <div class="container">
        <ul class="nav secondary-nav" id="category-lists">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/mobile') }}"><span><i class="fas fa-mobile-alt"></i></span>Mobile</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/dth') }}"><span><i class="fas fa-tv"></i></span> DTH</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/electricity') }}"><span><i class="fas fa-lightbulb"></i></span> Electricity</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/datacard') }}"><span><i class="fas fa-credit-card"></i></span> DataCard</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/broadband') }}"><span><i class="fas fa-wifi"></i></span> Broadband</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/landline') }}"><span><i class="fas fa-phone"></i></span> Landline</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/cabletv') }}"><span><i class="fas fa-plug"></i></span> CableTv</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/metro') }}"><span><i class="fas fa-subway"></i></span> Metro</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/gas') }}"><span><i class="fas fa-flask"></i></span> Gas</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/recharge/water') }}"><span><i class="fas fa-tint"></i></span> Water</a> </li>
        </ul>
      </div>
    </div>
    <!-- Secondary Navigation end -->
    
    <section class="container">
      <div class="bg-white shadow-md rounded p-4">
        <div class="row g-4"> 
          
          @yield('recharge-service')
          
          <!-- Slideshow
          ============================================= -->
          <div class="col-lg-8 col-xxl-7">
            <div class="owl-carousel owl-theme single-slider" data-animateout="fadeOut" data-animatein="fadeIn" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">
              <div class="item"><a href="#"><img class="img-fluid" src="{{ asset('/') }}images/slider/banner-1.jpg" alt="banner 1" /></a></div>
              <div class="item"><a href="#"><img class="img-fluid" src="{{ asset('/') }}images/slider/banner-2.jpg" alt="banner 2" /></a></div>
            </div>
          </div>
          <!-- Slideshow end --> 
          
        </div>
      </div>
    </section>
    
    <!-- Tabs
    ============================================= -->
    <div class="section pt-4 pb-3">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="mobile-recharge-tab" data-bs-toggle="tab" href="#mobile-recharge" role="tab" aria-controls="mobile-recharge" aria-selected="true">Mobile Recharge</a> </li>
          <li class="nav-item"> <a class="nav-link" id="billpayment-tab" data-bs-toggle="tab" href="#billpayment" role="tab" aria-controls="billpayment" aria-selected="false">Bill Payment</a> </li>
          <li class="nav-item"> <a class="nav-link" id="why-quickai-tab" data-bs-toggle="tab" href="#why-quickai" role="tab" aria-controls="why-quickai" aria-selected="false">Why Quickai</a> </li>
        </ul>
        <div class="tab-content my-3" id="myTabContent">
          <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel" aria-labelledby="mobile-recharge-tab">
            <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam. <a href="#">Read Terms</a></p>
          </div>
          <div class="tab-pane fade" id="billpayment" role="tabpanel" aria-labelledby="billpayment-tab">
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
          </div>
          <div class="tab-pane fade" id="why-quickai" role="tabpanel" aria-labelledby="why-quickai-tab">
            <p>Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo.</p>
            <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Tabs end --> 
    
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Modal Dialog - View Plans
============================================= -->
<div id="view-plans" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Browse Plans</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3 mb-4" method="post">
          <div class="col-12 col-sm-6 col-lg-3">
            <select class="form-select" required="">
              <option value="">Select Your Operator</option>
              <option>1st Operator</option>
              <option>2nd Operator</option>
              <option>3rd Operator</option>
              <option>4th Operator</option>
              <option>5th Operator</option>
              <option>6th Operator</option>
              <option>7th Operator</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <select class="form-select" required="">
              <option value="">Select Your Circle</option>
              <option>1st Circle</option>
              <option>2nd Circle</option>
              <option>3rd Circle</option>
              <option>4th Circle</option>
              <option>5th Circle</option>
              <option>6th Circle</option>
              <option>7th Circle</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <select class="form-select" required="">
              <option value="">All Plans</option>
              <option>Topup</option>
              <option>Full Talktime</option>
              <option>Validity Recharge</option>
              <option>SMS</option>
              <option>Data</option>
              <option>Unlimited Talktime</option>
              <option>STD</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 d-grid">
            <button class="btn btn-primary" type="submit">View Plans</button>
          </div>
        </form>
        <div class="plans">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$10<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime $8 & 2 Local & National SMS & Free SMS valid for 2 day(s)</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$15<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$50<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">47<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">28 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">47 Local Vodafone min free </div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$100<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">92<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">28 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Local min 92 & 10 Local & National SMS & Free SMS valid for 28 day(s).</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$150<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">143<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">60 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime $143 & 50 Local & National SMS & Free SMS valid for 60 day(s).</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$220<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">8 <span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">7 Days <span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$250<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">250<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">28 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime + 50 SMS per day for 28 days.</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$300<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">301<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">64 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$410<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">0<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">28 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Unlimited Local,STD & Roaming calls</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$501<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">510<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">180 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime + 100 SMS per day for 180 days.</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$799<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">820<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">250 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime + 100 SMS per day for 250 days.</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
          <div class="row align-items-center">
            <div class="col-4 col-lg-2 text-5 text-primary text-center">$999<span class="text-1 text-muted d-block">Amount</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">1099<span class="text-1 text-muted d-block">Talktime</span></div>
            <div class="col-4 col-lg-2 text-3 text-center">356 Days<span class="text-1 text-muted d-block">Validity</span></div>
            <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Full Talktime + 100 SMS per day for 356 days.</div>
            <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
              <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
            </div>
          </div>
          <hr class="my-4">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Dialog - View Plans end --> 

<!-- Sign Up Modal
=========================== -->
<div id="signup-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Sign Up Form
        ====================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
              <li class="nav-item"> <a class="nav-link text-5 lh-lg" href="" >Log In</a> </li>
              <li class="nav-item"> <a class="nav-link text-5 lh-lg active">Sign Up</a> </li>
            </ul>
            <p class="text-4 fw-300 text-muted text-center mb-4">Looks like you're new here!</p>
            <form id="signupForm" method="post">
              <div class="mb-3">
                <input type="text" class="form-control" id="fullName" required placeholder="Your Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="emailAddress" required placeholder="Email Id">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
              </div>
              <div class="form-check text-3 my-4">
                <input id="agree" name="agree" class="form-check-input" type="checkbox">
                <label class="form-check-label text-2" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
              </div>
              <div class="d-grid my-4">
                <button class="btn btn-primary" type="submit">Sign Up</button>
              </div>
            </form>
            <div class="d-flex align-items-center my-3">
              <hr class="flex-grow-1">
              <span class="mx-2 text-2 text-muted">Or Sign Up with Social Profile</span>
              <hr class="flex-grow-1">
            </div>
            <div class="d-flex  flex-column align-items-center mb-3">
              <ul class="social-icons social-icons-colored social-icons-circle">
                <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Google"><i class="fab fa-google"></i></a></li>
                <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <p class="text-2 text-center mb-0">Already have an account? <a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#login-modal" data-bs-dismiss="modal">Log In</a></p>
          </div>
        </div>
        <!-- Sign Up Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Sign Up Modal End --> 

<!-- Forgot Password Modal
============================== -->
<div id="forgot-password-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Forgot Password Form
        =========================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <h3 class="text-center mt-3 mb-4">Forgot your password?</h3>
            <p class="text-center text-3 text-muted">Enter your Email or Mobile and we’ll help you reset your password.</p>
            <form id="forgotForm" class="form-border" method="post">
              <div class="mb-3">
                <input type="text" class="form-control" id="emailAddress" required placeholder="Enter Email or Mobile Number">
              </div>
              <div class="d-grid my-4">
                <button class="btn btn-primary" type="submit">Continue</button>
              </div>
            </form>
            <p class="text-center mb-0"><a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#login-modal" data-bs-dismiss="modal">Return to Log In</a> <span class="text-muted mx-3">|</span> <a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#otp-modal" data-bs-dismiss="modal">Request OTP</a></p>
          </div>
        </div>
        <!-- Forgot Password Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Forgot Password Modal End --> 

<!-- OTP Modal
============================== -->
<div id="otp-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- OTP Form
        =========================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <h3 class="text-center mt-3 mb-4">Two-Step Verification</h3>
            <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
            <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to verify your account. A Code has been sent to <span class="text-dark text-4">+1*******179</span></p>
            <form id="otp-screen" class="form-border" method="post">
              <div class="row gx-3">
                <div class="col">
                  <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col">
                  <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col">
                  <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col">
                  <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
              </div>
              <div class="d-grid my-4">
                <button class="btn btn-primary" type="submit">Verify</button>
              </div>
            </form>
            <p class="text-2 text-center">Not received your code? <a class="btn-link" href="#">Resend code</a></p>
            <p class="text-2 text-center mb-0"><a class="btn-link" href="#">Call me</a></p>
          </div>
        </div>
        <!-- OTP Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- OTP Modal End --> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h2 class="text-3">Color Switcher</h2>
  <hr>
  <ul class="mb-2">
    <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
    <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
    <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
    <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
    <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
    <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
    <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
  </ul>
  <div class="d-grid">
    <button class="btn text-white btn-sm border-0 shadow-none" data-bs-toggle="tooltip" title="Blue" id="reset-color">Reset Default</button>
  </div>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="{{ asset('/') }}vendor/jquery/jquery.min.js"></script> 
<script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="{{ asset('/') }}vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="{{ asset('/') }}js/switcher.min.js"></script>
<script src="{{ asset('/') }}js/theme.js"></script>
@yield('js-content')
<script>
    $(document).ready(function(){
        $("#category-lists li a").each(function(item){
            let itemText = $(this).text().toLowerCase().replace(" ","");
            let currentPage = "{{ request('category') }}".toLowerCase();
            if (itemText==currentPage) {
                $(this).addClass('active');
            }
        })
    })
</script>
<script src="https://kit.fontawesome.com/f60feef0c8.js" crossorigin="anonymous"></script>
</body>
</html>