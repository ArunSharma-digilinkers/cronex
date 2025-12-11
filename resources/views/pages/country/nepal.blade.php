@extends('layouts.main')
@section('content')

<div class="main-wrapper">

    <div class="country-export-banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="export-content">
                <h2>Export to <span>Nepal</span></h2>
                <p>
                    Strengthening Nepal’s markets with reliable Indian exports — building lasting trade relationships
                    through quality and trust.
                </p>
                <a href="#enquiry" class="export-btn">Become a Distributor</a>
            </div>
        </div>
    </div>


    <div class="afghanishtan-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>
                        Cronex Batteries: Reliable Power Solutions for Nepal
                    </h2>
                    <p>
                        Unreliable power supply is pretty common in the hilly regions and towns of Nepal. Cronex, a
                        trusted exporter of inverter batteries, offers a comprehensive range of inverter batteries,
                        solar batteries, lithium batteries, solar panels, automotive batteries, and e-rickshaw batteries
                        for a smooth continuity of households, commerce, and transportation. Every battery is specially
                        tested for high usage, voltage fluctuations, and local weather conditions so that your customers
                        never face any power interruptions.
                    </p>

                    <div class="btn-willard">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enquiry Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/export-nepal.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <section class="why-choose-cronex py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Partner with Cronex to provide trusted power <span>solutions</span></h2>
                <p class="section-subtitle">
                  Throughout Nepal for your valued customers to have uninterruptible energy,
                    even in remote areas.
                </p>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-md-3">
                    <div class="why-card h-100 text-center p-4">
                        <div class="icon-wrap mb-3">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h5>Consistent Power Everywhere</h5>
                        <p>
                          Consistent power backup in each house, shop, and office.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-card h-100 text-center p-4">
                        <div class="icon-wrap mb-3">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5>Simple Delivery</h5>
                        <p>
                          From small shipments to bulk orders, we ensure timely delivery.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-card h-100 text-center p-4">
                        <div class="icon-wrap mb-3">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                        <h5>Exceptional Quality</h5>
                        <p>
                          Thoughtful Pricing: Direct exports from India guarantee excellent quality products at prices
                            that fit most budgets.
                          </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-card h-100 text-center p-4">
                        <div class="icon-wrap mb-3">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                        <h5>Effortless Implementation</h5>
                        <p>
                          Simple installation and low maintenance make it easy for both distributors and customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="request-quote-wrapper text-center section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>
                        Get Started Today
                    </h3>
                    <p>
                        Please contact our export team to explore tailor-made deals and to start supplying top-grade
                        batteries and energy solutions to your customers in Nepal.
                    </p>

                    <div class="btn-willard">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enquiry Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection