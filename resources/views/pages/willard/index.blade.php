@extends('layouts.main')
@section('content')

<div class="main-wrapper l1">
    <img src="{{ asset('img/willard-banner.jpg') }}" alt="" class="img-fluid">

<div class="willard-info-wrapper section-entry" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <video width="100%" height="100%" autoplay muted loop playsinline>
                    <source src="{{ asset('img/willard-video.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h2>
                    Willard is our flagship brand in Afghanistan, and for us at Cronex
                </h2>
                <p>
                    It represents far more than just a product line — it’s a legacy of reliability, built over years of dedication to quality and performance. Every Willard Battery we ship carries with it a sense of purpose: to keep life moving, no matter what challenges come your way.
                </p>
                <p>
                    In today’s fast-changing world, uninterrupted energy is something everyone depends on — whether it’s for a home inverter, a commercial setup, or a vehicle that runs day and night. That’s where Willard makes all the difference. Our inverter, automotive, solar, and E-rickshaw batteries are designed with care and built tough for the everyday power needs of Afghanistan. Known for its long life and solid backup, it’s trusted by countless users who simply want power they can count on.
                </p>
                <p>
                    Over the years, we’ve learned that real progress comes from dependable energy. From powering small shops and local transport to supporting homes during long outages, our batteries stand quietly behind every moment of productivity. Each unit goes through strict quality checks before it ever leaves our facility — because we know how much reliability matters in the real world.
                </p>

                <!-- Button trigger modal -->
                <div class="btn-willard">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Enquiry Now
                </a>
                </div>

            </div>
        </div>
    </div>
</div>

<section class="why-choose-us section-entry" data-aos="fade-up">
  <div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="why-header">
              <div>
                <h2>Why Choose Us</h2>
                <p>
                    For us, our customers are our top priority. Hence we ensure our batteries are able to exceed their expectations. When you choose Cronex, you are choosing trust and a promise that goes a long way. And with Willard, you get batteries that are known for durability and performance you can rely on.
                </p>
              </div>
            </div>  
        </div>
    </div>

    <div class="why-features">
      <div class="feature-box">
        <img src="{{ asset('img/quality.png')  }}" alt="Quality">
        <h4>QUALITY</h4>
      </div>
      <div class="feature-box">
        <img src="{{ asset('img/customer-first.png') }}" alt="Customer First">
        <h4>CUSTOMER FIRST</h4>
      </div>
      <div class="feature-box">
        <img src="{{ asset('img/innovation.png') }}" alt="Innovation">
        <h4>INNOVATION</h4>
      </div>
      <div class="feature-box">
        <img src="{{ asset('img/teamwork.png') }}" alt="Teamwork">
        <h4>TEAMWORK</h4>
      </div>
    </div>
  </div>
</section>

   <div class="product-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h3>Our</h3>
                    <h2>Product Range</h2>
                    <p>
                        Our Willard Battery range in Afghanistan caters to a variety of power needs — each designed with precision and built to last.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="product-card">
                        <img src="{{ asset('img/it.jpg') }}" alt="IT Sector" class="bg-img">
                        <img src="{{ asset('img/willar-tubular-battery.png') }}" alt="IT Battery" class="battery-img">
                        <div class="btn-pro">
                            <a href="">Tubular</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="product-card">
                        <img src="{{ asset('img/willar-solar.jpg') }}" alt="IT Sector" class="bg-img">
                        <img src="{{ asset('img/willar-tubular-battery.png') }}" alt="IT Battery" class="battery-img">
                        <div class="btn-pro">
                            <a href="">Solar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="product-card">
                        <img src="{{ asset('img/automotive.jpg') }}" alt="IT Sector" class="bg-img">
                        <img src="{{ asset('img/willar-tubular-battery.png') }}" alt="IT Battery" class="battery-img">
                        <div class="btn-pro">
                            <a href="">Automotive</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="product-card">
                        <img src="{{ asset('img/tractor.jpg') }}" alt="IT Sector" class="bg-img">
                        <img src="{{ asset('img/willar-tubular-battery.png') }}" alt="IT Battery" class="battery-img">
                        <div class="btn-pro">
                            <a href="">Tractor</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="client-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="heading-box mb-4">
                    <h2>Our <br><span>Brands</span></h2>
                    <p>
                        Don’t just take our word for it—here’s what some of our customers have to say about us on Google
                        Reviews:
                    </p>
                </div>

                <div class="col-lg-12 col-md-12 col-smn-12">
                    <div class="brands owl-carousel owl-theme">
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-1.webp') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-2.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-3.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-4.png') }} " class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-5.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-6.png') }} " class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection