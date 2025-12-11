@extends('layouts.main')
@section('content')

<div class="page-banner-wrapper">
    <img src="{{ asset('img/inverter-banner.jpg') }}" alt="" class="img-fluid">
</div>


<div class="product-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('img/inverter-img.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Inverter Batteries</h2>
                    <p>
                        Cronex inverter batteries are engineered to deliver reliable, uninterrupted power during electricity outages. Built to perform in demanding conditions, our batteries ensure smooth operation for homes, offices, and small businesses. With stable output and consistent performance, Cronex provides the power support you can trust when it matters the most.
                    </p>
                    <p>
                        Each Cronex inverter battery is designed with advanced technology to support deep charge and discharge cycles, ensuring long backup time and extended battery life. Our batteries are optimized for efficiency, faster charging, and superior durability, making them ideal for households, healthcare equipment, and commercial applications that require dependable energy solutions.
                    </p>
                    <p>
                        With Cronex, choosing the right inverter battery becomes simple and effective. We offer a range of capacities suited for different power needs—from areas with frequent power cuts to spaces requiring maintenance-free, high-performance systems. Investing in Cronex inverter batteries means investing in long-term reliability, energy efficiency, and complete peace of mind.
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

<!-- <div class="products-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach ($product as $item)
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('storage/product/' . $item->image) }}" alt="{{ $item->model }}"
                                class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4>{{ $item->model }}</h4>
                            <a href="{{ route('inverter-battery', $item->id) }}" class="btn-view">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div> -->

@endsection