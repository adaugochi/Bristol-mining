@extends('layouts.landing')
@section('contents')
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Invest In CryptoCurrency</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Easy Way To Trade Here
                                        </p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('Liquid/images/invest.png') }}"
                                         data-src="Liquid/images/invest.png"
                                         alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Start BitCoin & Mining Trade.</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Good Guidance For Your Trade.
                                        </p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('Liquid/images/guidance.png') }}" width="500"
                                         data-src="Liquid/images/guidance.png" alt="image-slide"  height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Start Your Trade Today</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Success doesn't come without guidance
                                        </p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">
                                            Join Us
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('Liquid/images/join-us.png') }}" width="500"
                                         data-src="Liquid/images/join-us.png" alt="image-slide"  height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                   data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                   data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>
                            <li>
                                <img src="{{ asset('Liquid/images/in-liquid-ticker-1.svg') }}"
                                     data-src="Liquid/images" alt="ticker-image"
                                     data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left">
                                    <i class="fas fa-caret-up"></i>1,740.05
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('Liquid/images/in-liquid-ticker-2.svg') }}"
                                     data-src="Liquid/images/in-liquid-ticker-2.svg" alt="ticker-image"
                                     data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left">
                                    <i class="fas fa-caret-up"></i>217.90
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('Liquid/images/in-liquid-ticker-3.svg') }}"
                                     data-src="Liquid/images/in-liquid-ticker-3.svg" alt="ticker-image"
                                     data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left">
                                    <i class="fas fa-caret-down"></i>270.97
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('Liquid/images/in-liquid-ticker-4.svg') }}"
                                     data-src="Liquid/images/in-liquid-ticker-4.svg" alt="ticker-image"
                                     data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left">
                                    <i class="fas fa-caret-up"></i>3,218.51
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('Liquid/images/in-liquid-ticker-5.svg') }}"
                                     data-src="Liquid/images/in-liquid-ticker-5.svg" alt="ticker-image"
                                     data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left">
                                    <i class="fas fa-caret-down"></i>735.11
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-secondary in-liquid-1">
            <div class="uk-container uk-light">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-1-2@m">
                        <h2>Why <span class="in-highlight">Choose</span> Us?</h2>
                    </div>
                    <div class="uk-width-1-2@m">
                        <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">
                            Find out more<i class="fas fa-angle-right uk-margin-small-left"></i>
                        </a>
                    </div>
                </div>
                <div class="uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('Liquid/images/team.png') }}"
                                     data-src="Liquid/images/team.png" alt="sample-image"
                                     data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>MANAGEMENT TEAM</h3>
                                <p>
                                    Bristol-mining is a group of experts who put and dispense your assets that make
                                    the best long haul returns for you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('Liquid/images/secure.png') }}" data-height data-uk-img
                                     data-src="Liquid/images/secure.png" alt="sample-image" data-width >
                            </div>
                            <div class="uk-card-body">
                                <h3>SECURE INVESTMENTS</h3>
                                <p>
                                    We were able to balance risks and profit levels using advances and
                                    highly qualified employees of the company.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('Liquid/images/support.png') }}" data-height data-uk-img
                                     data-src="Liquid/images/support.png" alt="sample-image" data-width>
                            </div>
                            <div class="uk-card-body">
                                <h3>24/7 ONLINE SUPPORT</h3>
                                <p>
                                    Our support is working 7/24 hours online and our online chat support is
                                    working about 24 hours daily .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-2">
            <div class="uk-container">
                <div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/server.svg') }}" height="128" data-uk-img
                                 data-src="Liquid/images/server.svg" alt="sample-icon" width="128">
                        </div>
                        <div>
                            <h3>DEDICATED SERVER</h3>
                            <p>
                                We use a dedicated server with the highest level of DDOS protection to ensure
                                that your funds are safe.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/newspaper.svg') }}"
                                 data-src="Liquid/images/newspaper.svg" alt="sample-icon"
                                 width="128" height="128" data-uk-img>
                        </div>
                        <div>
                            <h3>SSL CERTIFICATE</h3>
                            <p>
                                Our website is secured with 256-bit encryption from Comodo with Extended Validation.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/card.svg') }}"  height="128" data-uk-img
                                 data-src="Liquid/images/card.svg" alt="sample-icon" width="128">
                        </div>
                        <div>
                            <h3>INSTANT PAYMENTS</h3>
                            <p>
                                Our withdrawals are all processed instantly after they are requested.
                                Minimum withdrawal is only $0.1.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/lock-closed.svg') }}"
                                 data-src="Liquid/images/lock-closed.svg"
                                 alt="sample-icon" width="128" height="128" data-uk-img>
                        </div>
                        <div>
                            <h3>DDOS PROTECTION</h3>
                            <p>
                                We use the highest level of protection. Our website can resists attacks of any size.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/analytics.svg') }}"
                                 data-src="Liquid/images/analytics.svg"
                                 alt="sample-icon" width="128" height="128" data-uk-img>
                        </div>
                        <div>
                            <h3>SOLID RISK MANAGEMENT</h3>
                            <p>
                                Our risk management protocols include rigorous internal controls and limits.
                                All trades are taken with a focus on risk
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <img src="{{ asset('Liquid/images/headset.svg') }}"
                                 data-src="Liquid/images/headset.svg"
                                 alt="sample-icon" width="128" height="128" data-uk-img>
                        </div>
                        <div>
                            <h3>24/7 SUPPORT</h3>
                            <p>
                                our support is working 7/24 hours online and our online chat support is working
                                about 24 hours daily.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center"
             style="background-image: url(Liquid/images/in-liquid-3-bg.png);" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                            <div class="uk-position-top-left">
                                <img src="{{ asset('Liquid/images/in-liquid-3-mockup.png') }}"
                                     data-src="Liquid/images/in-liquid-3-mockup.png"
                                     alt="sample-images" width="650" height="469" data-uk-img>
                            </div>
                            <div class="uk-width-1-2@m">
                                <span class="uk-label in-liquid-label uk-margin-bottom">About Bristol-mining</span>
                                <p>
                                    Bristol-mining.ltd is an association of a large number of professional traders
                                    into one group in order to achieve a higher efficiency of cryptocurrency trading.
                                    In comparison with earlier stages of development, the company has significantly
                                    expanded its activities by trading several financial instruments, which allows
                                    future investment services to diversify risks by blocking the sagging rate of one of
                                    them with successful transactions with another cryptocurrency. Thus, random
                                    failures do not become a barrier to achieving legitimate success.
                                </p>
                                <p>
                                    The development and popularization of digital currencies reaches its climax — even
                                    now such monetary units are massively used for Internet payments, and in the near
                                    future will certainly qualify for the status of a full-fledged global payment
                                    instrument
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-4">
            <div class="uk-container">
                <div class="uk-width-1-2@m">
                    <h2>Investment <span class="in-highlight">Plan</span></h2>
                </div>
                <div class="uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-body">
                                <h3 style="text-align: center">FONDS</h3>
                                <p>10% AFTER - 24HRS</p>
                                <div>
                                    <p>Min.: $50</p>
                                    <p>Max.: $1999</p>
                                    <p>REFERRALS: 5%</p>
                                </div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">
                                    Invest Now<i class="fas fa-angle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-body">
                                <h3 style="text-align: center">VALUE</h3>
                                <p>20% AFTER - 48HRS</p>
                                <div>
                                    <p>Min.: $2000</p>
                                    <p>Max.: $4999</p>
                                    <p>REFERRALS: 8%</p>
                                </div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">
                                    Invest Now<i class="fas fa-angle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-body">
                                <h3 style="text-align: center">EQUITY</h3>
                                <p>10% AFTER - 120HRS</p>
                                <div>
                                    <p>Min.: $5000</p>
                                    <p>Max.: Unlimited</p>
                                    <p>REFERRALS: 12%</p>
                                </div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">
                                    Invest Now<i class="fas fa-angle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center uk-margin-medium-top"
                             data-uk-grid>
                            <div>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Running Days</h6>
                                <p class="uk-text-small uk-margin-remove-top">1,531</p>
                            </div>
                            <div>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Total Account</h6>
                                <p class="uk-text-small uk-margin-remove-top">9.008</p>
                            </div>
                            <div>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Total Deposit</h6>
                                <p class="uk-text-small uk-margin-remove-top">NaN</p>
                            </div>
                            <div class="uk-visible@m">
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Total Withdraw</h6>
                                <p class="uk-text-small uk-margin-remove-top">NaN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted in-liquid-5 uk-background-contain uk-background-top-center in-offset-bottom-40"
             style="background-image: url(Liquid/images/in-liquid-5-bg.png);">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h4>Payment methods.</h4>
                        </div>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-6@m uk-text-center
                         uk-margin-medium in-client-logo-6" data-uk-grid>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('Liquid/images/bitcoin.png') }}"
                                     data-src="Liquid/images/bitcoin.png" alt="payment-image" width="167"
                                     height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="img/in-lazy.gif"
                                     data-src="Liquid/images/perfect.png" alt="{{ asset('Liquid/images/perfect.png') }}"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('Liquid/images/payeer.png') }}"
                                     data-src="Liquid/images/payeer.png" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('Liquid/images/geo.png') }}"
                                     data-src="Liquid/images/geo.png" alt="payment-image" width="167"
                                     height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('Liquid/images/ddos.png') }}"
                                     data-src="Liquid/images/ddos.png" alt="payment-image" width="167"
                                     height="55" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-text-center uk-text-small in-border-text">
                            <p>
                                <span>
                                    Don't see a payment methods that works for you?
                                    <br class="uk-hidden@m">We have other options.<br class="uk-hidden@m">
                                    <a class="uk-button uk-button-small uk-button-primary uk-border-rounded uk-margin-left"
                                       href="#">More options<i class="fas fa-angle-right uk-margin-small-left"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
