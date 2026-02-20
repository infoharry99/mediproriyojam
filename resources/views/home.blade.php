@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">

<section class="herosection">

{{-- DESKTOP --}}
<div class="d-none d-lg-block">

    <div class="swiper myHeroSlider">
        <div class="swiper-wrapper">

            @foreach($desktopBanners as $banner)
            <div class="swiper-slide">
                <img src="{{ asset($banner->image) }}"
                     class="w-100 hero-desktop-img">
            </div>
            @endforeach

        </div>

        <div class="swiper-pagination desktop-pagination"></div>
    </div>

</div>


{{-- MOBILE --}}
<div class="d-block d-lg-none">

    <div class="swiper myHeroSliderMobile">
        <div class="swiper-wrapper">

            @foreach($mobileBanners as $banner)
            <div class="swiper-slide">
                <img src="{{ asset($banner->image) }}"
                     class="w-100 hero-mobile-img">
            </div>
            @endforeach

        </div>

        <div class="swiper-pagination mobile-pagination"></div>
    </div>

</div>

</section>

<style>
.herosection{
  margin-top: 70px;
}

.hero-desktop-img {
    width: 100%;
    height: 75vh;
}

.hero-mobile-img {
    width: 100%;
    height: 100%;
}
</style>
<script>
var desktopSwiper = new Swiper(".myHeroSlider", {
    loop:true,
    autoplay:{
        delay:3000,
        disableOnInteraction:false,
    },
    pagination:{
        el:".desktop-pagination",
        clickable:true,
    }
});

var mobileSwiper = new Swiper(".myHeroSliderMobile", {
    loop:true,
    autoplay:{
        delay:3000,
        disableOnInteraction:false,
    },
    pagination:{
        el:".mobile-pagination",
        clickable:true,
    }
});
</script>




<!-- ABOUT SECTION -->
<section class="py-5" style="background:#FFF5F6;">

  <div class="container">

    <div class="row align-items-center g-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-5">

        <h2 class="fw-semibold mb-4"
            style="font-size:clamp(2.5rem,5vw,3.5rem); color:#313131;">

          {{ $about->title ?? 'ABOUT US' }}

        </h2>

        <p class="text-muted fs-5 mb-4" style="max-width:520px;">

          {{ $about->description ?? '' }}

        </p>

        <!-- Buttons -->
        <div class="d-flex gap-3 flex-wrap">

          <!-- Learn More -->
          <a href="#"
             class="btn btn-danger px-4 py-2 rounded">

            Learn More

          </a>

          <!-- Watch Video -->
          <a href="#"
             class="btn btn-outline-danger px-4 py-2 rounded
                    d-flex align-items-center gap-2">

            Watch Video <span>▶</span>

          </a>

        </div>

      </div>


      <!-- CENTER LINE -->
      <div class="col-lg-1 d-none d-lg-flex justify-content-center">

        <div style="width:1px;height:350px;background:#ccc;"></div>

      </div>


      <!-- RIGHT STATS -->
      <div class="col-lg-6">

        <div class="row g-4">

          @foreach($stats as $stat)

          <div class="col-6">

            <div class="bg-light p-4 p-lg-5 text-center shadow-sm
                        h-100 stat-box">

              <h3 class="fw-semibold mb-2 fs-2">

                {{ $stat->number }}

              </h3>

              <p class="text-muted mb-0">

                {{ $stat->label }}

              </p>

            </div>

          </div>

          @endforeach

        </div>

      </div>


    </div>

  </div>

</section>

<style>
  .stat-box{
    transition:all .3s ease;
}

.stat-box:hover{
    transform:scale(1.05);
    background:#fff !important;
    box-shadow:0 15px 30px rgba(0,0,0,0.12);
}

.btn{
    transition:all .3s ease;
}

.btn:hover{
    transform:scale(1.05);
}
</style>


     
<section class="py-5" style="background:#FFF5F6;">

  <!-- Title -->
  <div class="text-center mb-5">
    <h2 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
      Course
    </h2>
  </div>


  <div class="container">

    <!-- Cards -->
    <div class="row g-4">

      <!-- CARD 1 -->
      <div class="col-md-4">

        <div class="card course-card h-100 border-0 shadow-sm">

          <!-- Image -->
          <div class="overflow-hidden">
            <img src="/assets/img/education/course_thumb01.jpg.png"
                 class="card-img-top course-img"
                 alt="">
          </div>

          <div class="card-body p-4">

            <!-- Top -->
            <div class="d-flex justify-content-between align-items-center mb-3">

              <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                NEET
              </span>

              <div>
                <small class="text-muted text-decoration-line-through me-2">$29.00</small>
                <span class="fw-bold text-primary">$9.00</span>
              </div>

            </div>


            <!-- Title -->
            <h5 class="fw-semibold mb-4">
              Foundation course – <br>11th+12th
            </h5>


            <!-- Author -->
            <div class="d-flex justify-content-between align-items-center mb-4">

              <div class="d-flex align-items-center gap-2">
                <img src="/assets/img/education/Rectangle 729 (2).png"
                     width="32" height="32"
                     class="rounded-circle object-fit-cover">

                <small class="text-muted">Mohit Roa</small>
              </div>

              <small class="text-muted">⭐ 4.8 (Reviews)</small>

            </div>


            <hr>


            <!-- Info -->
            <div class="d-flex justify-content-between text-muted small mt-3">

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/List → Item.png" width="16"> <span>05</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16"> <span>11h 20m</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16"> <span>22</span>
              </div>

            </div>

          </div>
        </div>

      </div>


      <!-- CARD 2 -->
      <div class="col-md-4">

        <div class="card course-card h-100 border-0 shadow-sm">

          <div class="overflow-hidden">
            <img src="/assets/img/education/course_thumb02.jpg.png"
                 class="card-img-top course-img">
          </div>

          <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

              <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                NEET
              </span>

              <div>
                <small class="text-muted text-decoration-line-through me-2">$20.00</small>
                <span class="fw-bold text-primary">$10.00</span>
              </div>

            </div>

            <h5 class="fw-semibold mb-4">
              Countdown course – <br>12th
            </h5>

            <div class="d-flex justify-content-between align-items-center mb-4">

              <div class="d-flex align-items-center gap-2">
                <img src="/assets/img/education/Rectangle 729 (2).png"
                     width="32" height="32"
                     class="rounded-circle">
                <small class="text-muted">Kriti Mishra</small>
              </div>

              <small class="text-muted">⭐ 4.5 (Reviews)</small>

            </div>

            <hr>

            <div class="d-flex justify-content-between text-muted small mt-3">

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/List → Item.png" width="16"> <span>05</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16"> <span>11h 20m</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16"> <span>22</span>
              </div>

            </div>

          </div>
        </div>

      </div>


      <!-- CARD 3 -->
      <div class="col-md-4">

        <div class="card course-card h-100 border-0 shadow-sm">

          <div class="overflow-hidden">
            <img src="/assets/img/education/course_thumb03.jpg.png"
                 class="card-img-top course-img">
          </div>

          <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

              <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                NEET
              </span>

              <span class="fw-bold text-primary">$20.00</span>

            </div>

            <h5 class="fw-semibold mb-4">
              Target Course – After 12th passed
            </h5>

            <div class="d-flex justify-content-between align-items-center mb-4">

              <div class="d-flex align-items-center gap-2">
                <img src="/assets/img/education/Rectangle 729 (2).png"
                     width="32" height="32"
                     class="rounded-circle">
                <small class="text-muted">Rohit</small>
              </div>

              <small class="text-muted">⭐ 4.8 (Reviews)</small>

            </div>

            <hr>

            <div class="d-flex justify-content-between text-muted small mt-3">

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/List → Item.png" width="16"> <span>05</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16"> <span>11h 20m</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16"> <span>22</span>
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>


    <!-- Button -->
    <div class="text-center mt-5">

      <a href="#"
         class="btn btn-primary px-5 py-2 rounded-pill course-btn">

        See All Courses →

      </a>

    </div>

  </div>


  <!-- Bottom Title -->
  <div class="text-center mt-5">

    <h5 class="d-inline-block px-4 py-2 border border-dark rounded-pill shadow-sm">
      Our Top Doctors
    </h5>

  </div>

</section>
<style>
  .course-card{
    border-radius:16px;
    transition:all .3s ease;
}

.course-card:hover{
    transform:translateY(-5px);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

.course-img{
    height:220px;
    object-fit:cover;
    transition:transform .5s ease;
}

.course-card:hover .course-img{
    transform:scale(1.1);
}

.course-btn{
    background:#5751E1;
    border:none;
}

.course-btn:hover{
    background:#4a45c9;
}
</style>

<!-- OUR TOP DOCTORS -->
<section class="position-relative py-5 overflow-hidden"
         style="background:#FFEFF0; padding-top:7rem; padding-bottom:7rem;">

  <!-- Pink Glow Circle -->
  <div class="position-absolute start-50 translate-middle-x"
       style="
        bottom:-180px;
        width:520px;
        height:520px;
        background:rgba(255,126,126,0.7);
        filter:blur(120px);
        border-radius:50%;
       ">
  </div>


  <div class="container position-relative text-center">

    <div class="row justify-content-center g-5 align-items-end">


      <!-- CARD 1 -->
      <div class="col-md-4 d-flex justify-content-center">

        <div class="doctor-card">

          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1.png"
               class="doctor-img"
               alt="">

          <div class="doctor-name">
            Rasika Ghorpade
          </div>

        </div>

      </div>


      <!-- CARD 2 -->
      <div class="col-md-4 d-flex justify-content-center">

        <div class="doctor-card">

          <img src="/assets/img/education/697078c6bd0682489206e2ce 1.png"
               class="doctor-img"
               alt="">

          <div class="doctor-name">
            Satyabrata Pal
          </div>

        </div>

      </div>


      <!-- CARD 3 -->
      <div class="col-md-4 d-flex justify-content-center">

        <div class="doctor-card">

          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1 (1).png"
               class="doctor-img"
               alt="">

          <div class="doctor-name">
            Kresha Kubhalwar
          </div>

        </div>

      </div>


    </div>

  </div>

</section>

<style>
  /* Doctor Cards */

.doctor-card{
    width:330px;
    background:#fff;
    border-radius:32px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,0.2);
    transition:all .5s ease;
    position:relative;
    z-index:1;
}

.doctor-card:hover{
    transform:scale(1.1) translateY(-25px);
    box-shadow:0 30px 60px rgba(0,0,0,0.35);
    z-index:10;
}

.doctor-img{
    width:100%;
    height:430px;
    object-fit:cover;
    transition:transform .5s ease;
}

.doctor-card:hover .doctor-img{
    transform:scale(1.05);
}

.doctor-name{
    padding:18px;
    text-align:center;
    border-top:1px solid #eee;
    font-weight:600;
    font-size:18px;
}
</style>

<section class="position-relative py-5 overflow-hidden"
         style="background:#FFF5F6; padding-top:6rem; padding-bottom:6rem;">

  <!-- Top Pink Circle -->
  <div class="position-absolute start-50 translate-middle-x"
       style="top:-320px;width:450px;height:450px;background:#FF7E7E;border-radius:50%;">
  </div>

  <div class="container position-relative">

    <!-- Badge -->
    <div class="text-center mb-3">
      <span class="px-4 py-1 border border-dark rounded-pill small">
        Testimonial
      </span>
    </div>

    <!-- Title -->
    <div class="text-center mb-5">
      <h2 class="fw-semibold mb-2">Testimonial</h2>
      <p class="text-muted small">
        Don’t take our word for it. Trust our students
      </p>
    </div>

    <!-- Cards -->
    <div class="row g-4">

      @foreach($testimonials as $testimonial)
      <div class="col-md-4">
        <div class="testimonial-card h-100 p-4 shadow-sm bg-white">

          <div class="d-flex justify-content-between mb-3">

            <div>
              <img src="{{ asset($testimonial->image ?? 'assets/img/profile.png') }}"
                   width="60" height="60"
                   class="mb-2 object-fit-cover rounded-circle">

              <h6 class="fw-semibold mb-0">
                  {{ $testimonial->name }}
              </h6>

              <small class="text-muted">
                  {{ $testimonial->designation }}
              </small>
            </div>

            <!-- Rating -->
            <div class="text-warning fs-5">
                @for($i=1;$i<=5;$i++)
                    @if($i <= $testimonial->rating)
                        ★
                    @else
                        ☆
                    @endif
                @endfor
            </div>

          </div>

          <p class="text-muted small">
            {{ $testimonial->message }}
          </p>

        </div>
      </div>
      @endforeach

    </div>

    <!-- Pagination -->
   <div class="position-relative text-center mt-5">

    <!-- Gradient Strip -->
    <div class="position-absolute start-50 translate-middle-x"
         style="width:60%;
                height:45px;
                background:linear-gradient(90deg,rgba(255,255,255,0) 0%,#CF242A 50%,rgba(255,255,255,0) 100%);
                opacity:.6;
                border-radius:50px;">
    </div>

    <div class="position-relative d-inline-flex align-items-center gap-2">

        {{-- Previous Button --}}
        @if ($testimonials->onFirstPage())
            <button class="btn btn-sm disabled">‹</button>
        @else
            <a href="{{ $testimonials->previousPageUrl() }}"
               class="btn btn-sm">‹</a>
        @endif


        {{-- Page Numbers --}}
        @foreach ($testimonials->getUrlRange(1, $testimonials->lastPage()) as $page => $url)

            @if ($page == $testimonials->currentPage())
                <span class="btn btn-sm btn-light border fw-bold">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $url }}"
                   class="btn btn-sm btn-light">
                    {{ $page }}
                </a>
            @endif

        @endforeach


        {{-- Next Button --}}
        @if ($testimonials->hasMorePages())
            <a href="{{ $testimonials->nextPageUrl() }}"
               class="btn btn-sm">›</a>
        @else
            <button class="btn btn-sm disabled">›</button>
        @endif

    </div>

</div>

  </div>
</section>

<style>
 
.btn-light.border {
    border: 2px solid #CF242A !important;
    color: #CF242A;
}

  .testimonial-card{
  border-radius:10px;
  transition:all .3s ease;
}

.testimonial-card:hover{
  transform:translateY(-5px);
  box-shadow:0 20px 40px rgba(0,0,0,0.15);
}
</style>





<!-- STUDENT FEEDBACK -->
<section class="py-5" style="background:#FFF5F6;">

  <div class="container text-center">

    <!-- Title -->
    <h2 class="fw-medium mb-4">
      Our Student Feedback
    </h2>


    <!-- Video Cards -->
    <div class="row justify-content-center g-4 mt-4">

      <!-- CARD 1 -->
      <div class="col-md-4">

        <div class="video-card position-relative overflow-hidden shadow">

          <!-- Image -->
          <img src="/assets/img/education/image 3youtube.png"
               class="img-fluid video-img"
               alt="Student Feedback">

          <!-- Overlay -->
          <div class="video-overlay"></div>

          <!-- Play Button -->
          <div class="position-absolute top-50 start-50 translate-middle">

            <div class="play-btn">

              ▶

            </div>

          </div>

        </div>

      </div>


      <!-- CARD 2 -->
      <div class="col-md-4">

        <div class="video-card position-relative overflow-hidden shadow">

          <img src="/assets/img/education/image 3youtube.png"
               class="img-fluid video-img">

          <div class="video-overlay"></div>

          <div class="position-absolute top-50 start-50 translate-middle">

            <div class="play-btn">▶</div>

          </div>

        </div>

      </div>


      <!-- CARD 3 -->
      <div class="col-md-4">

        <div class="video-card position-relative overflow-hidden shadow">

          <img src="/assets/img/education/image 3youtube.png"
               class="img-fluid video-img">

          <div class="video-overlay"></div>

          <div class="position-absolute top-50 start-50 translate-middle">

            <div class="play-btn">▶</div>

          </div>

        </div>

      </div>

    </div>


    <!-- Navigation -->
    <div class="d-flex justify-content-center gap-4 mt-4">

      <button class="btn btn-outline-dark rounded-circle px-3">
        ‹
      </button>

      <button class="btn btn-outline-dark rounded-circle px-3">
        ›
      </button>

    </div>

  </div>

</section>

<style>
  /* Video Cards */

.video-card{
    border-radius:30px;
    transition:all .3s ease;
}

.video-card:hover{
    transform:translateY(-5px);
    box-shadow:0 20px 40px rgba(0,0,0,0.2);
}

.video-img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.video-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.1);
}

/* Play Button */

.play-btn{
    width:64px;
    height:48px;
    background:#dc3545;
    color:#fff;
    font-size:20px;
    border-radius:10px;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
    transition:.3s;
    cursor:pointer;
}

.video-card:hover .play-btn{
    transform:scale(1.1);
}
</style>

<!-- ENQUIRY FORM -->
<section class="py-5" style="background:#FFF5F6;">

  <!-- Heading -->
  <div class="text-center mb-4">
    <h3 class="d-inline-block px-4 py-2 border border-dark rounded-pill fs-5 fw-medium">
      Enquiry form with lead
    </h3>
  </div>


  <div class="container">

    <div class="row g-5 align-items-center">

      <!-- LEFT: FORM -->
      <div class="col-md-6">

        <div class="bg-white rounded-4 shadow p-4 p-lg-5 h-100">

          <h2 class="fw-bold text-danger mb-4">
            Admission Enquiry Form
          </h2>


          <form>

            <!-- Full Name -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                Full Name
              </label>

              <div class="row g-3">

                <div class="col-6">
                  <input type="text"
                         class="form-control"
                         placeholder="First">
                </div>

                <div class="col-6">
                  <input type="text"
                         class="form-control"
                         placeholder="Last">
                </div>

              </div>

            </div>


            <!-- Phone -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                Phone number
              </label>

              <input type="text"
                     class="form-control"
                     placeholder="Phone number">

            </div>


            <!-- Course -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                Choose course
              </label>

              <select class="form-select">

                <option selected>Choose course</option>
                <option>NEET</option>
                <option>Medical</option>

              </select>

            </div>


            <!-- City -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                City
              </label>

              <input type="text"
                     class="form-control"
                     placeholder="City">

            </div>


            <!-- Query -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                Query
              </label>

              <textarea rows="4"
                        class="form-control resize-none"
                        placeholder="Query"></textarea>

            </div>


            <!-- Submit -->
            <div class="pt-2">

              <button type="submit"
                      class="btn btn-danger px-4 py-2 d-inline-flex align-items-center gap-2">

                Submit
                <span>→</span>

              </button>

            </div>

          </form>

        </div>

      </div>


      <!-- RIGHT: IMAGE -->
      <div class="col-md-6">

        <div class="rounded-4 overflow-hidden shadow">

          <img src="/assets/img/education/formImage.png"
               class="img-fluid w-100 object-fit-cover"
               alt="Doctors">

        </div>

      </div>

    </div>

  </div>

</section>
<style>
  .form-control:focus,
.form-select:focus{
  border-color:#dc3545;
  box-shadow:0 0 0 .2rem rgba(220,53,69,.25);
}

.btn-danger{
  transition:.3s;
}

.btn-danger:hover{
  background:#bb2d3b;
}
</style>

<!-- DOWNLOAD APP SECTION -->
<section class="py-5" style="background:#FFF5F6;">

  <!-- Top Title -->
  <div class="text-center mb-5">
    <h4 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
      Download our app
    </h4>
  </div>


  <div class="container position-relative">

    <!-- Pink Box -->
    <div class="bg-danger bg-opacity-25 rounded-4 p-5 position-relative">

      <div class="row align-items-center">

        <!-- LEFT CONTENT -->
        <div class="col-md-6">

          <h2 class="fw-medium display-6 text-dark mb-4">
            Download our app
          </h2>


          <!-- QR Codes -->
          <div class="d-flex gap-3 mb-4">

            <div class="bg-white p-3 rounded-4 shadow-sm">
              <img src="/assets/icons/barcode.png"
                   width="130" height="130"
                   class="img-fluid">
            </div>

            <div class="bg-white p-3 rounded-4 shadow-sm">
              <img src="/assets/icons/barcode.png"
                   width="130" height="130"
                   class="img-fluid">
            </div>

          </div>


          <!-- Store Buttons -->
          <div>
            <img src="/assets/img/education/PhotoshopExtension_Image (3) 1.png"
                 class="img-fluid"
                 style="max-height:90px;">
          </div>

        </div>


        <!-- RIGHT SPACE (for phone) -->
        <div class="col-md-6 d-none d-md-block"></div>

      </div>

    </div>


    <!-- Floating iPhone -->
    <div class="position-absolute bottom-0 end-0 pe-md-5">

       <img src="/assets/img/education/iphoneMask group (3).png"
                 class="img-fluid"
                 style="max-height:450px;"
                 alt="App Preview">

    </div>

  </div>


  <!-- Bottom Title -->
  <div class="text-center mt-5">
    <h4 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
      Award and achievement
    </h4>
  </div>

</section>

<style>
  /* Phone Image */

.phone-img{
  max-width:320px;
  filter:drop-shadow(0 20px 30px rgba(0,0,0,.3));
}

/* Responsive Fix */

@media(max-width:768px){
  .phone-img{
    position:static;
    max-width:220px;
    margin-top:20px;
  }
}
</style>

<!-- BADGE / ACHIEVEMENT SECTION -->
<section class="position-relative py-5 mb-5 overflow-hidden"
         style="background:#FFF5F6;">

  <!-- Background Image -->
  <div class="position-absolute top-0 start-0 w-100 h-100">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-100 h-100 object-fit-cover"
         style="object-fit:cover;"
         alt="">
  </div>

  <div class="container position-relative">

    <div class="row text-center text-white g-4">

      <!-- ITEM 1 -->
      <div class="col-6 col-md-2">

        <div class="d-flex flex-column align-items-center">

          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-4"
               style="max-width:180px;"
               alt="Badge">

          <h2 class="display-4 fw-light">
            2020
          </h2>

          <p class="small mt-2 px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>

        </div>

      </div>

      <!-- Duplicate 4 Times -->

      <div class="col-6 col-md-2">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-4"
               style="max-width:180px;">
          <h2 class="display-4 fw-light">2020</h2>
          <p class="small mt-2 px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-4"
               style="max-width:180px;">
          <h2 class="display-4 fw-light">2020</h2>
          <p class="small mt-2 px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-4"
               style="max-width:180px;">
          <h2 class="display-4 fw-light">2020</h2>
          <p class="small mt-2 px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-4"
               style="max-width:180px;">
          <h2 class="display-4 fw-light">2020</h2>
          <p class="small mt-2 px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

    </div>

  </div>

</section>

  </main>

@endsection
