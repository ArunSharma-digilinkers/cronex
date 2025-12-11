<header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('company-profile') }}">Company Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('our-journey') }}">Our Journey</a></li>
                        <li><a class="dropdown-item" href="{{ url('events') }}">Events</a></li>
                        <li><a class="dropdown-item" href="certificates">Certification</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('inverter-batteries') }}">Inverter Batteries</a></li>
                        <li><a class="dropdown-item" href="{{ url('automotive-batteries') }}">Automotive Batteries</a></li>
                        <li><a class="dropdown-item" href="{{ url('solar-batteries') }}">Solar Batteries</a></li>
                        <li><a class="dropdown-item" href="{{ url('e-rickshaw-batteries') }}">E-rickshaw Batteries</a></li>
                        <li><a class="dropdown-item" href="{{ url('lithium-batteries') }}">Lithium-ion Batteries</a></li>
                    </ul>
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Brands
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('willard') }}">Willard</a></li>
                        <li><a class="dropdown-item" href="#">Power XL</a></li>
                        <li><a class="dropdown-item" href="#">Pace Setter</a></li>
                        <li><a class="dropdown-item" href="#">Hawker</a></li>
                        <li><a class="dropdown-item" href="#">Road Master</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Global Presence
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('afghanistan') }}">Afghanistan</a></li>
                        <li><a class="dropdown-item" href="{{ url('dubai') }}">Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ url('nigeria') }}">Nigeria</a></li>
                        <li><a class="dropdown-item" href="{{ url('lebanon') }}">Lebanon</a></li>
                        <li><a class="dropdown-item" href="{{ url('nepal') }}">Nepal</a></li>
                        <li><a class="dropdown-item" href="{{ url('yemen') }}">Yemen</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('loadcalculator') }}">Battery Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>