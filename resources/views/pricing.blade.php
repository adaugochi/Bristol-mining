@extends('layouts.landing')
@section('contents')
<header class="page-title page-bg" style="background-image: url(assets1/images/about-page.png);">
    <div class="container">
       <div class="page-title-inner">
          <div class="section-title">
             <h1>Investment Pricing</h1>
             <ul class="page-breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li>Pricing</li>
             </ul>
          </div>
       </div>
    </div>
 </header>
 <section class="home-pricing-section p-tb-100">
    <div class="container">
       <div class="section-title">
          <h2>Our Trading Packs</h2>
       </div>
       <div class="home-pricing-content">
          <div class="home-pricing-category">
             <table>
                <thead>
                   <tr class="orange-gradient">
                      <th class="t-align-left">Pricing list</th>
                      <th>Gold</th>
                      <th>Professional</th>
                      <th>Promo</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td class="pricing-name blue-gradient"><img src="assets1/images/check-white.png" alt="check">Minimum</td>
                      <td><span class="">$100</span></td>
                      <td><span class="">$5,000</span></td>
                      <td><span class="">$10,000</span></td>
                   </tr>
                   <tr>
                      <td class="pricing-name blue-gradient"><img src="assets1/images/check-white.png" alt="check">Maximum</td>
                      <td><span class="">$5,000</span></td>
                      <td><span class="">$10,000</span></td>
                      <td><span class="">$200,000</span></td>
                   </tr>
                   <tr>
                      <td class="pricing-name blue-gradient"><img src="assets1/images/check-white.png" alt="check">Interest Rate</td>
                      <td>2%</span></td>
                      <td>5%</span></td>
                      <td>10%</span></td>
                   </tr>
                   <tr>
                      <td class="pricing-name blue-gradient"><img src="assets1/images/check-white.png" alt="check">Investment Span</td>
                      <td>30 Days</span></td>
                      <td>180 Days (6 Months)</span></td>
                      <td>360 Days (1 Year)</span></td>
                   </tr>
                </tbody>
             </table>
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