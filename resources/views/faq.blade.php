@extends('layouts.landing')
@section('contents')
<header class="page-title page-bg" style="background-image: url(assets1/images/about-page.png);">
    <div class="container">
       <div class="page-title-inner">
          <div class="section-title">
             <h1>Frequently Asked Questions</h1>
             <ul class="page-breadcrumbs">
                <li><a href="/">Home</a></li>
                <li>FAQs</li>
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
                      <h2>Frequently Asked Questions?</h2>
                      <div id="accordion" class="accordion">
                        <div class="card active">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse1" aria-expanded="true">What is Blend Consults?</a>
                            </h6>
                          </div>
                          <div id="collapse1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">Blend Consults is a hedge-fund. Our main activity is safe investment by using risk management.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse2">Does Blend Consults have an official registration?</a>
                            </h6>
                          </div>
                          <div id="collapse2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">Yes, we are legally registered in the UK. You can check our certificate on the site.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse3">What services does Blend Consults provide?</a>
                            </h6>
                          </div>
                          <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="card-body">We are engaged in trust management of capital.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse4">Does the Blend Consults team already have investment experience? </a>
                            </h6>
                          </div>
                          <div id="collapse4" class="collapse show" data-parent="#accordion">
                            <div class="card-body">Yes, we have formed an investment portfolio that brings a stable income.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse2">What are the advantages of Blend Consults?</a>
                            </h6>
                          </div>
                          <div id="collapse2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">We aim for a long-term relationship with each client. Our goal is to become the leader of the investment market.</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse3">How can I make a deposit?</a>
                            </h6>
                          </div>
                          <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="card-body">When making a deposit, you transfer the capital to us in trust management. We invest your contribution, and you will receive interest according to plan. In addition, you can take part in the affiliate program and receive 5% from the deposit of each new depositor that you have invited.
                          </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse2">How long for my withdrawal to be processed? </a>
                            </h6>
                          </div>
                          <div id="collapse2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">Withdrawals are done by our support team in 8 hours maximum.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0">
                            <a  href="#collapse3">What should I do if your site is not available?</a>
                            </h6>
                          </div>
                          <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="card-body">We make sure that access to the site is permanent. For this purpose, we leased a dedicated server and paid for its protection. If you have any problems, please email us at support@blendconsults.org              </div>
                          </div>
                        </div>
                      </div>
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