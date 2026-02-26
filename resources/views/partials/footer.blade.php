<!-- FOOTER -->
<footer class="text-white py-5" style="background:#D62828;">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-3">

        <img src="{{ asset('assets/img/education/footerlogo.png') }}"
             class="mb-3"
             style="max-height:60px;"
             alt="Logo">

        <p class="small">
          Download the app by clicking the link below :
        </p>

        <div class="d-flex gap-3 mt-4">

          <img src="{{ asset('assets/img/education/googleplay.png') }}"
               height="40"
               alt="Google Play">

          <img src="{{ asset('assets/img/education/appstore.png') }}"
               height="40"
               alt="App Store">

        </div>

      </div>


      <!-- Pages -->
      <div class="col-md-2">

        <h5 class="fw-bold mb-3">Pages</h5>

        <ul class="list-unstyled small">

          <li class="mb-2"><a href="#" class="footer-link">Home it work</a></li>
          <li class="mb-2"><a href="#" class="footer-link">About</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Announcement</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Gallery</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Blog</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Contact</a></li>

        </ul>

      </div>


      <!-- Service -->
      <div class="col-md-2">

        <h5 class="fw-bold mb-3">Courses</h5>

        <ul class="list-unstyled small">

          <li class="mb-2">Magic Bullet batch (11th + 12th + NEET)</li>
          <li class="mb-2"> Platinum Batch (12th + NEET)</li>
          <li class="mb-2"> Eklavya Batch (After 12th)</li>

        </ul>

      </div>


      <!-- Contact -->
      <div class="col-md-3">

        <h5 class="fw-bold mb-3">Contact</h5>

        <div class="small">

          <div class="d-flex gap-2 mb-3">

            <img src="{{ asset('assets/icons/footerFrame 1.png') }}"
                 width="18">

            <span>+91 8669667300</span>

          </div>


          <div class="d-flex gap-2 mb-3">

            <img src="{{ asset('/assets/icons/footerdashicons_email.png') }}"
                 width="18">

            <span>medicalprayojanam@gmail.com</span>

          </div>


          <div class="d-flex gap-2">

            <img src="{{ asset('/assets/icons/footerfa6-solid_location-dot.png') }}"
                 width="18" height="20">

            <span>
              Plot no. 99, Infront Little Angel School, Near NMC Zonal Office,
              Water Tank, Laxminagar, Nagpur, Maharashtra 440022
            </span>

          </div>

        </div>

      </div>


      <!-- Social -->
      <div class="col-md-1">

        <h5 class="fw-bold mb-3">Social</h5>

        <div class="d-flex gap-3">

          <a href="https://www.facebook.com/MedicalPrayojanam/" target="_blank">
            <img src="{{ asset('/assets/icons/Group 85.svg') }}" width="22">
          </a>

          <a href="https://x.com/NeetPrayojanam" target="_blank">
            <img src="{{ asset('/assets/icons/Group 86.svg') }}" width="22">
          </a>

          <a href="https://www.youtube.com/@NEET_Prayojanam" target="_blank">
            <img src="{{ asset('/assets/icons/Group 87.svg') }}" width="22">
          </a>

          <a href="https://www.instagram.com/medicalprayojanam/" target="_blank">
            <img src="{{ asset('/assets/icons/Group 88.svg') }}" width="22">
          </a>

        </div>

      </div>

    </div>

  </div>

</footer>

<style>
  .footer-link{
  color:#fff;
  text-decoration:none;
  transition:.3s;
}

.footer-link:hover{
  text-decoration:underline;
  opacity:.8;
}

footer img{
  transition:.3s;
}

footer img:hover{
  transform:scale(1.1);
}
</style>