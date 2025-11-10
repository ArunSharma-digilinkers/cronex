@extends('layouts.main')
@section('content')

<div class="page-banner-wrapper">
    <img src="{{ asset('img/contact-us.jpg') }}" alt="" class="img-fluid">
</div>

<div class="contact-wrapper section-entry">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-card-call">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="icon-title">
                        <h4>Call Us</h4>
                        <a href="tel:+91-8877005757">+91-8877005757</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-card-email">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="icon-title">
                        <h4>Email Us</h4>
                        <a href="mailto:info@cronex.coms">info@cronex.com</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-card-address">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="icon-title">
                        <h4>Address</h4>
                        <p>
                            GT Road, Nai Basti, Bannadevi, Aligarh, Uttar pradesh 202001
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="contact-form-wrapper section-entry">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="contact-card">
                    <h2>Contact Us</h2>
                    <p>
                        We’d love to hear from you — let’s create something amazing together
                    </p>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Enter your name" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Enter your email" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" placeholder="Type your message..." class="form-control"
                                required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.5072817668447!2d77.85309127527577!3d28.287882175854723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a5fb706d843d%3A0x4f095d7fdeaceeb2!2sGT%20Rd%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1759733674851!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:20px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</div>

@endsection