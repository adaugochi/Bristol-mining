@extends('layouts.landing')
@section('contents')
<header class="page-title page-bg" style="background-image: url(assets1/images/about-page.png);">
    <div class="container">
       <div class="page-title-inner">
          <div class="section-title">
             <h1>About us</h1>
             <ul class="page-breadcrumbs">
                <li><a href="/">Home</a></li>
                <li>About us</li>
             </ul>
          </div>
       </div>
    </div>
 </header>
 <section class="video-section pt-100 pb-70">
    <div class="container">
       <div class="home-facility-content">
          <div class="row align-items-center">
             <div class="col-sm-12 col-md-12 col-lg-6 order-lg-2">
                <div class="about-page-item pb-30">
                   <div class="about-img ml-20 overflow-hidden border-radius-5 img-shadow">
                      <img src="assets1/images/about-1.png" alt="about">
                   </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-12 col-lg-6 order-lg-1">
                <div class="about-page-item pb-30">
                   <div class="home-service-start">
                      <h2>Who we are</h2>
                      <p>We are financial investment company focused on Fiat or crypto exchange services (Trading). We are a regulated and licensed by FINRA. The feedback of satisfied clients is the best recognition of our success. Every recommendation or advertisement of the fund confirms our development. We love to help our clients, therefore we thought over an advantageous referral program that gives each partner an additional income.</p>
                      <p>If you have a website, blog or have an account on social networks, this offer is for you. Open the world of international investment for acquaintances, friends, relatives and colleagues. Bring to us new investors and get 7% from each deposit. You do not need to have a million subscribers or a thousand visitors a day.

                        Remember, your income grows along with the number of participants in our fund. Reward is our gratitude for your work on the popularization of Fortune Financial Services. Place a link to this site and become ever wealthier.</p>
                      <a href="{{route('register')}}">
                      <i class="flaticon-play-button"></i>
                      <i class="flaticon-play-button"></i>
                      Register Now
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
  
 <section class="home-contact-section overflow-hidden blue-gradient pt-100 pb-80">
    <div class="home-contact-bg-circle">
       <div class="home-contact-circle-item">
          <img src="assets1/images/lg-circle-1.png" alt="circle">
       </div>
       <div class="home-contact-circle-item">
          <img src="assets1/images/lg-circle-1.png" alt="circle">
       </div>
    </div>
    <div class="container">
       <div class="home-contact-inner">
          <h2>367K Stakeholders! Join Blendconsults now</h2>
          <ul class="section-button">
             <li>
                <a href="{{ route('register') }}" class="btn1 orange-gradient btn-with-image">
                <i class="flaticon-agenda"></i>
                <i class="flaticon-agenda"></i>
                Create Your Account
                </a>
             </li>
          </ul>
       </div>
    </div>
 </section>

@endsection