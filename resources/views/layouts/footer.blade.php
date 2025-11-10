<!-- Modal -->
<div class="modal fade willar-modal-wrapper" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form>
          <div class="form-group mb-3 modal-input">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
		  <div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="form-group mb-3 modal-input">
            <label for="email">Mobile No</label>
            <input type="email" class="form-control" id="email" placeholder="Enter mobile No.">
          </div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="form-group mb-3 modal-input">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
			</div>
			</div>
          <div class="form-group mb-3 modal-input">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter message"></textarea>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
   <div class="top-footer-wrapper section-entry">
       <div class="container">
           <div class="row">
               <div class="col-xl-3 col-lg-3 col-sm-12 mb-2">
                   <div class="footer-wrap">
                       <img src="{{ asset('img/logo.png') }}" class="img-fluid logo-img">
                       <p class="mrt30">
                           Prakash Battery Udyog, founded in 1982, is a premier manufacturer, exporter, and supplier of
                           lead-acid batteries, renowned for setting the standard in the Indian battery industry.
                       </p>

                       <ul class="footer-social-list">
                           <li class="pr-3">
                               <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li class="pr-3">
                               <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                           </li>
                           <li class="pr-3">
                               <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                           </li>
                           <li class="pr-3">
                               <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-sm-12 mb-2">
                   <div class="footer-wrap">
                       <h5>Quicks Links</h5>
                       <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="{{ url('company-profile') }}">Company Profile</a></li>
                           <li><a href="{{ url('our-journey') }}">Our Journey</a></li>
                           <li><a href="{{ url('events') }}">Events</a></li>
                           <li><a href="{{ url('certificates') }}">Certification</a></li>
                           <li><a href="{{ url('#') }}">Blog</a></li>
                           <li><a href="{{ url('#') }}">Career</a></li>
                           <li><a href="{{ url('contact-us') }}">Contact</a></li>
                       </ul>
                   </div>
               </div>
                  <div class="col-xl-2 col-lg-2 col-sm-12 mb-2">
                   <div class="footer-wrap">
                       <h5>Brands</h5>
                       <ul>
                           <li><a href="{{ url('willard') }}">Willard</a></li>
                           <li><a href="{{ url('power-xl') }}">Power XL</a></li>
                           <li><a href="{{ url('pace-setter') }}">Pace Setter</a></li>
                           <li><a href="{{ url('hawker') }}">Hawker</a></li>
                           <li><a href="{{ url('road-master') }}">Road Master</a></li>
                       </ul>
                   </div>
               </div>
                   <div class="col-xl-2 col-lg-2 col-sm-12">
                           <div class="footer-wrap">
                               <h5>Products</h5>
                               <ul>
                                   <li><a href="{{ url('inverter-batteries') }}">Inverter Batteries</a></li>
                                   <li><a href="{{ url('automotive-batteries') }}">Automotive Batteries</a></li>
                                   <li><a href="{{ url('solar-batteries') }}">Solar Batteries</a></li>
                                   <li><a href="{{ url('e-rickshaw-batteries') }}">E-rickshaw Batteries</a></li>
                                   <li><a href="{{ url('lithium-batteries') }}">Lithium-ion Batteries</a></li>

                               </ul>
                           </div>
                       </div>
                            <div class="col-xl-3 col-lg-3 col-sm-12 mb-2">
                           <div class="footer-wrap">
                               <h5>Connect Us</h5>
                               <ul class="contact-list">
                                   <li>
                                       <i class="fa-solid fa-envelope"></i> Registered Office / Factory<br>
                                       GT Road, Nai Basti, Bannadevi, Aligarh, Uttar pradesh 202001
                                   </li>
                                   <li>
                                       <i class="fa-solid fa-phone"></i><a href="tel:1800 889 1441"> 1800 889 1441</a>
                                   </li>
                                   <li>
                                       <i class="fa-solid fa-envelope"></i><a href="mailto:sales@cronexpower.com">
                                           sales@cronexpower.com</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
               
           </div>
       </div>
   </div>
   <div class="bottom-footer-wrapper">
       <div class="container">
           <p class="footer-copyright-text">
               &copy; copyright Cronex All Rights Reserved. Site Created & Maintained By <a
                   href="http://www.digilinkers.com" target="_blank" class="creator-link">Digilinkers</a>
           </p>
       </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script src="{{ asset('js/main.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script>
AOS.init({
    duration: 1200, // animation duration in ms
    once: false, // whether animation should happen only once - while scrolling down
});
   </script>

   </body>

   </html>