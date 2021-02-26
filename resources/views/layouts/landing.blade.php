<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Aila">
      <meta name="keywords" content="Loan Services, Cryptocurrency Investments">
      <meta name="author" content="Blend Consults Technologies">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <title>Blend Consults - Investments and Financial Services</title>
      <link rel="icon" href="{{asset('blendconsults.png')}}" type="image/png" sizes="16x16">
      <link rel="stylesheet" href="assets1/css/bootstrap.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/animate.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/owl.carousel.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/owl.theme.default.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/meanmenu.min.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/magnific-popup.min.css" type="text/css" media="all" />
      <link rel='stylesheet' href='assets1/css/boxicons.min.css' type="text/css" media="all" />
      <link rel='stylesheet' href='assets1/css/line-awesome.min.css' type="text/css" media="all" />
      <link rel='stylesheet' href='assets1/css/flaticon.css' type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/style.css" type="text/css" media="all" />
      <link rel="stylesheet" href="assets1/css/responsive.css" type="text/css" media="all" />
      <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="preloader orange-gradient">
         <div class="preloader-wrapper">
            <div class="preloader-grid">
               <div class="preloader-grid-item preloader-grid-item-1"></div>
               <div class="preloader-grid-item preloader-grid-item-2"></div>
               <div class="preloader-grid-item preloader-grid-item-3"></div>
               <div class="preloader-grid-item preloader-grid-item-4"></div>
               <div class="preloader-grid-item preloader-grid-item-5"></div>
               <div class="preloader-grid-item preloader-grid-item-6"></div>
               <div class="preloader-grid-item preloader-grid-item-7"></div>
               <div class="preloader-grid-item preloader-grid-item-8"></div>
               <div class="preloader-grid-item preloader-grid-item-9"></div>
            </div>
         </div>
      </div>
      <div class="fixed-top">
         <div class="navbar-area">
            <div class="mobile-nav">
               <a href="/" class="logo">
               <img src="{{ asset('blendconsults.png') }}" style="width: 50px;margin-left:30px;"  alt="logo">
               </a>
               <div class="navbar-option">
                  
                  <div class="navbar-option-item">
                     <a href="{{route('login')}}">
                     <i class="flaticon-login"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="main-nav">
               <div class="container-fluid">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="/">
                     <img src="{{ asset('blendconsults.png') }}" style="width: 80px;margin-left:30px;" alt="logo">
                     </a>
                     <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="{{url("/")}}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus') }}" class="nav-link">About Us</a>
                            </li>
                            
                             
                           <li class="nav-item">
                              <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                           </li>
                           <li class="nav-item">
                              <a href="{{ route('faq') }}" class="nav-link">FAQs</a>
                           </li>
                           <li class="nav-item">
                              <a href="{{ route('privacy') }}" class="nav-link">Privacy Policy</a>
                           </li>
                        </ul>
                     </div>
                     <div class="navbar-option">
                        <div class="navbar-option-item dropdown nav-language-option">
                           
                        </div>
                        <div class="navbar-option-item">
                           <a href="{{ route('login') }}" class="btn1 blue-gradient btn-with-image text-nowrap">
                           <i class="flaticon-login"></i>
                           <i class="flaticon-login"></i>
                           Sign Up / Login
                           </a>
                        </div>
                     </div>
                  </nav>
               </div>
               
            </div>
         </div>
         
      </div>
      
      @yield('contents')
      <footer class="footer-bg">
         <div class="container">
            <div class="footer-upper">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                     <div class="footer-content-item">
                        <div class="footer-logo">
                           <a href="/"><img src="blendconsults.png" alt="logo"></a>
                        </div>
                        <div class="footer-details">
                           <p>We are investment management company regulated and approved by Finra. Our company is aimed to be one of the leading investment company globally having a professional team of experts with a 20 years of combined experience thereby providing innovative investment products that meet the specific needs of the online community. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                           <h3>Support</h3>
                        </div>
                        <ul class="footer-details footer-list">
                           <li><a href="{{ route('faq') }}">FAQ's</a></li>
                           <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                           <h3>Company</h3>
                        </div>
                        <ul class="footer-details footer-list">
                           <li><a href="/">Home</a></li>
                           <li><a href="{{ route('aboutus') }}">About Us</a></li>
                           <li><a href="{{ route('pricing') }}">Our Pricing</a></li>
                           <li><a href="{{ route('login') }}">Backoffice</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                           <h3>Address</h3>
                        </div>
                        <ul class="footer-details footer-list">
                           <li>Address: <span>456 Labisto Parkways, CA, United States</span></li>
                           <li>Message: <span><a href="#">support@blendconsults.org</span></a></span></li>
                           <li>Phone: <span><a href="tel:(+00)67834598">(+00) 678 345 98</a></span></li>
                           <li>Faq: <span>+(456) 332-897-234</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
               
            </div>
            <div class="footer-lower">
               <div class="footer-lower-item footer-copyright-text">
                  <p>Copyright © {{date('Y')}} Blendconsults LLC </p>
               </div>
               {{-- <div class="footer-lower-item footer-social-logo">
                  <ul class="footer-social-list">
                     <li class="social-btn social-btn-fb"><a href="#"><i class='bx bxl-facebook'></i></a></li>
                     <li class="social-btn social-btn-tw"><a href="#"><i class='bx bxl-twitter'></i></a></li>
                     <li class="social-btn social-btn-ins"><a href="#"><i class='bx bxl-instagram'></i></a></li>
                     <li class="social-btn social-btn-pin"><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
                     <li class="social-btn social-btn-yt"><a href="#"><i class='bx bxl-youtube'></i></a></li>
                  </ul>
               </div> --}}
            </div>
         </div>
      </footer>
      <script src="{{ asset('assets1/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{ asset('assets1/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('assets1/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('assets1/js/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('assets1/js/jquery.ajaxchimp.min.js')}}"></script>
      <script src="{{ asset('assets1/js/form-validator.min.js')}}"></script>
      <script src="{{ asset('assets1/js/contact-form-script.js')}}"></script>
      <script src="{{ asset('assets1/js/jquery.meanmenu.min.js')}}"></script>
      <script src="{{ asset('assets1/js/jquery.waypoints.js')}}"></script>
      <script src="{{ asset('assets1/js/counter-up.js')}}"></script>
      <script src="{{ asset('assets1/js/script.js')}}"></script>
   </body>
</html>