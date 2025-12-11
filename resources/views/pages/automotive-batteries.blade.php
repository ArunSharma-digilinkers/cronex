@extends('layouts.main')
@section('content')

<div class="page-banner-wrapper">
    <img src="{{ asset('img/automotive-banner.jpg') }}" alt="" class="img-fluid">
</div>

<div class="product-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('img/car-battery.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Automotive Batteries</h2>
                    <p>
                        Cronex Automotive Batteries are engineered to deliver exceptional starting power, long-lasting performance, and maximum reliability in all driving conditions. Built with advanced grid technology and high-cranking capability, they ensure smooth ignition even in extreme temperatures. Whether you drive daily or take long highway trips, Cronex batteries provide the perfect balance of strength and endurance for every vehicle.
                    </p>
                    <p>
                        Each Cronex battery is designed with superior corrosion resistance, vibration protection, and enhanced plate life to withstand India’s toughest roads. The rugged construction minimizes wear and tear while maintaining efficient power output for years. With optimized heat tolerance and minimal maintenance needs, Cronex batteries continue performing consistently, even in demanding environments.
                    </p>
                    <p>
                       Cronex Automotive Batteries are trusted by thousands of drivers for their reliability, safety, and long-term value. Every battery goes through rigorous quality testing to meet high industry standards, ensuring you receive a product you can depend on. Backed by genuine warranty support and a strong service network, Cronex gives you complete peace of mind and confidence on every journey.
                    </p>
                    <div class="about-btn">
                        <a href="#" class="btn-read-more">Download Brochure</a>
                    </div>
            </div>
        </div>
    </div>
</div>
<section class="battery-cta-section py-5">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7">
                <span class="tag-line mb-2 d-inline-block">Powering India Since 1982</span>
                <h2 class="fw-bold mb-3">Find the Perfect Battery for Your Home, Vehicle or Business</h2>
                <p class="text-muted mb-4">
                    High-performance Automotive, Inverter, Solar & UPS batteries with fast delivery,
                    free installation and genuine warranty support.
                </p>

                <div class="d-flex gap-2 flex-wrap">
                    <a href="tel: 1800 889 1441" class="btn btn-light btn-lg">Talk to Expert</a>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="cta-box p-4 shadow-sm">
                    <h5 class="mb-3 fw-semibold">Quick Battery Finder</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>

                         <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email">
                        </div>

                        <button class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
    <div class="why-choose-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h3>Why Choose</h3>
                    <h2>Cronex?</h2>
                </div>
                <div class="feature-section">
                    <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Quality Icon">
                            </div>
                            <h3>Quality Assurance</h3>
                            <p>
                                We adhere to stringent quality control measures throughout our manufacturing process. Our
                                products are tested rigorously to ensure they meet the highest standards of performance
                                and safety.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    alt="Innovation Icon">
                            </div>
                            <h3>Innovative Technology</h3>
                            <p>
                                Innovation is at the heart of what we do. We invest in research and development to bring
                                you the latest advancements in battery technology, ensuring our products are always at
                                the forefront of the industry.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/3063/3063828.png"
                                    alt="Sustainability Icon">
                            </div>
                            <h3>Sustainability</h3>
                            <p>
                                As a responsible battery manufacturer, we are committed to sustainability. Our production
                                processes are designed to minimize environmental impact, and we offer recycling programs
                                to ensure the proper disposal of used batteries.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/151/151770.png" alt="Support Icon">
                            </div>
                            <h3>Customer Support</h3>
                            <p>
                                Our dedicated customer support team is always ready to assist you. Whether you need
                                technical guidance or have queries about our products, we are here to help.
                            </p>
                        </div>
                    </div>
                </div>
</div>
            </div>
        </div>
    </div>
   <div class="client-wrapper mb-5" data-aos="fade-up">
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
                                <img src="{{ asset('img/brand-4.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-5.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="{{ asset('img/brand-6.png') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection