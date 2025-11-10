@extends('layouts.main')
@section('content')

<div class="main-wrapper">

    <div class="country-export-banner">
  <div class="overlay"></div>
  <div class="container">
    <div class="export-content">
      <h2>Export to <span>Dubai</span></h2>
      <p>Connecting India’s quality manufacturing with Dubai’s fast-growing business landscape through trusted exports and partnerships.</p>
      <a href="#enquiry" class="export-btn">Become a Distributor</a>
    </div>
  </div>
</div>

    <div class="afghanishtan-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>
                        Cronex Batteries – Your Trusted Energy Partner in Dubai
                    </h2>
                    <p>
                        In the city that never sleeps, unwavering power is a necessity. Cronex Batteries, a leading exporter of inverter batteries, solar batteries, lithium batteries, solar panels, automotive batteries, and e-rickshaw batteries from India in short provides complete power solutions, keeps homes, offices, and commercial establishments running round the clock in Dubai. Our batteries are manufactured to bear extreme heat, voltage fluctuations, and continuous usage to give you hassle-free energy throughout the year.
                    </p>

                    <div class="btn-willard">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enquiry Now
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/dubai-export.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

  <section class="why-choose-cronex py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Why Dubai Distributors <span>prefer Cronex</span></h2>
    </div>

    <div class="row g-4 align-items-stretch">
      <div class="col-md-4">
        <div class="why-card h-100 text-center p-4">
          <div class="icon-wrap mb-3">
            <i class="bi bi-lightning-charge-fill"></i>
          </div>
          <h5>Smooth Shipping & Delivery</h5>
          <p>
            From small orders to bulk shipments, we ensure a timely delivery that makes the running of your distribution easy.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100 text-center p-4">
          <div class="icon-wrap mb-3">
            <i class="bi bi-truck"></i>
          </div>
          <h5>Competitive Pricing & Stronger Margins</h5>
          <p>
            Exports directly from India enable distributors to obtain high-quality products at prices that ensure healthy margins.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100 text-center p-4">
          <div class="icon-wrap mb-3">
            <i class="bi bi-currency-exchange"></i>
          </div>
          <h5>Easy Installation & Low Maintenance</h5>
          <p>
            Our batteries are designed for convenience in installation and maintenance, ensuring that you don't have to waste much time and effort.
          </p>
        </div>
      </div>
      <p class="text-center">
        Every Cronex battery and energy solution has been tested for export standards and adapted to Dubai's local conditions, assuring high and steady performance throughout the year. Distributors who trust us can confidently distribute quality power solutions and establish a trusting relationship with their clients.
      </p>
    </div>
  </div>
</section>


<div class="request-quote-wrapper text-center section-entry">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>
            Request a Quote Today
          </h3>
          <p>
            Connect with our export team to avail of the best deals and begin supplying quality inverter, solar, <br>lithium, automotive, and e-rickshaw batteries all over <strong>Dubai</strong>.
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