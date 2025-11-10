@extends('layouts.main')
@section('content')

<div class="page-banner-wrapper">
    <img src="{{ asset('img/company-profile-banner.jpg') }}" alt="" class="img-fluid">
</div>

<div class="company-history-wrapper section-entry">
    <div class="container">
        <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ asset('img/company-profile.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1>Company Profile</h1>

                    <p>
                        Prakash Battery Udyog, founded in 1982, is a premier manufacturer, exporter, and supplier of
                        lead-acid batteries, renowned for setting the standard in the Indian battery industry. With over
                        37 years of experience, we have established ourselves as a trusted leader, serving a diverse
                        range of industries with high-quality battery solutions.
                    </p>

                    <p>
                        Our expansive portfolio includes more than 200 battery models, covering automotive (both
                        maintenance-free and wet charge), motorcycle, tubular, e-rickshaw, and solar tubular batteries.
                        These products support critical applications across the automotive sector, solar & UPS backup
                        systems, and the rapidly growing electric vehicle market.
                    </p>

                    <p>
                        At Prakash Battery Udyog, we pride ourselves on our technical expertise and attention to detail,
                        ensuring every product meets the highest standards of safety, efficiency, and durability.
                    </p>

                    <p>
                        Led by Mr. Naveen Prakash Gupta, our company's growth and success are a testament to his
                        visionary leadership and unwavering commitment to excellence.
                    </p>
                    
                </div>
        </div>
    </div>
</div>
    <div class="why-choose-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h3>Why Choose</h3>
                    <h2>Cronex?</h2>
                </div>
                <div class="row feature-section">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Quality Icon">
                            </div>
                            <h3>Quality Assurance</h3>
                            <p>We adhere to stringent quality control measures throughout our manufacturing process. Our
                                products are tested rigorously to ensure they meet the highest standards of performance
                                and safety.</p>
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
                            <p>Innovation is at the heart of what we do. We invest in research and development to bring
                                you the latest advancements in battery technology, ensuring our products are always at
                                the forefront of the industry.</p>
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
                            <p>As a responsible battery manufacturer, we are committed to sustainability. Our production
                                processes are designed to minimize environmental impact, and we offer recycling programs
                                to ensure the proper disposal of used batteries.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/151/151770.png" alt="Support Icon">
                            </div>
                            <h3>Customer Support</h3>
                            <p>Our dedicated customer support team is always ready to assist you. Whether you need
                                technical guidance or have queries about our products, we are here to help.</p>
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
                                <img src="img/brand-1.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="img/brand-2.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="img/brand-3.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="img/brand-4.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="img/brand-5.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-box">
                                <img src="img/brand-6.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection