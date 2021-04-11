<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>Homepage - Liquid HTML5 Template</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('Liquid/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('Liquid/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('Liquid/css/style.css" as="style')}}">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('Liquid/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('Liquid/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('Liquid/fonts/inter-v2-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('Liquid/fonts/inter-v2-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('Liquid/fonts/inter-v2-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{asset('Liquid/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('Liquid/apple-touch-icon.png')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('Liquid/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('Liquid/css/style.css')}}">
</head>
<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
    <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="{{asset('Liquid/index.html')}}">
                                <img src="img/in-lazy.gif" data-src="img/in-logo-1.svg" alt="logo"
                                     width="160" height="34" data-uk-img>
                            </a>
                            <!-- logo end -->
                            <!-- navigation begin -->
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">Get Started</a>
                            <a href="#" class="uk-button uk-button-text"><i class="fas fa-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>
    <main>
        @yield('contents')
    </main>

    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-background-secondary uk-light">
            <div class="uk-container uk-text-small">
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                    <div>
                        <h5>Quick Links</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Account</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Sign Up</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Contact</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">support@bristol-mining.ltd</a></li>
                            <li><a href="#">21 Aylmer Parade, Aylmer Road, London, England, N2 0AT</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Verification Link</h5>
                        <ul class="uk-list uk-link-text">
                            <li>
                                <a href="https://beta.companieshouse.gov.uk/company/10322047" target="_blank">
                                    https://beta.companieshouse.gov.uk/company/10322047
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-margin-large-top">
                    <div class="uk-width-1-1">
                        <p class="uk-heading-line uk-margin-large-bottom">
                            <span>Invest-aurum Copyright © 2021. All right reserved.</span>
                        </p>
                        <p class="in-trading-risk">
                            Bristol Mining– is an investment company, which built its business on an absolutely
                            legal basis, in a cooperation with state of UK, structures controlling commercial
                            activities of a companies and other state authorities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- totop end -->
    </footer>
    <!-- Javascript -->
    <script src="{{asset('Liquid/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('Liquid/js/vendors/blockit.min.js')}}"></script>
    <script src="{{asset('Liquid/js/config-theme.js')}}"></script>
</body>
</html>
