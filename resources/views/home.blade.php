@extends('layouts.app')

@section('title','Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
<section class="py-5 position-relative" style="background:#FFF5F6;">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-5 text-center text-lg-start">

        <h2 class="fw-semibold mb-4"
            style="font-size:clamp(2rem,4vw,3.2rem); color:#313131;">
          {{ $about->title ?? 'ABOUT US' }}
        </h2>

        <p class="text-muted fs-5 mb-4 mx-auto mx-lg-0"
           style="max-width:520px;">
          {{ $about->description ?? '' }}
        </p>

        <!-- Buttons -->
        <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">

          <!-- Learn More -->
          <a href="#"
             class="btn btn-danger px-4 py-2 rounded-pill">
            Learn More
          </a>

          <!-- Watch Video -->
          <a href="#"
             class="btn btn-outline-danger px-4 py-2 rounded-pill d-flex align-items-center gap-2">
            Watch Video <span>▶</span>
          </a>

        </div>
      </div>

      <!-- CENTER LINE (Desktop Only) -->
      <div class="col-lg-1 d-none d-lg-flex justify-content-center">
        <div class="divider-line"></div>
      </div>

      <!-- RIGHT STATS -->
      <div class="col-lg-6">
        <div class="row g-4">

          @foreach($stats as $stat)
          <div class="col-6 col-md-6">
            <div class="stat-box bg-white p-4 p-lg-5 text-center shadow-sm rounded-3 h-100">
              <h3 class="fw-bold mb-2 fs-2 text-danger">
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
  .divider-line{
      width:1px;
      height:300px;
      background:linear-gradient(to bottom, transparent, #ccc, transparent);
  }

  .stat-box{
      transition:all .35s ease;
  }

  .stat-box:hover{
      transform:translateY(-8px);
      box-shadow:0 20px 40px rgba(0,0,0,0.12);
  }

  .btn{
      transition:all .3s ease;
  }

  .btn:hover{
      transform:translateY(-3px);
  }
</style>


     
<section class="py-5" style="background:#FFF5F6;">

  <!-- Title -->
  <div class="text-center mb-4 mb-lg-5">
    <h2 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
      Course
    </h2>
  </div>

  <div class="container">

    <!-- Cards -->
    <div class="row g-4">

      <!-- CARD -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card course-card h-100 border-0 shadow-sm">

          <div class="overflow-hidden rounded-top">
            <img src="/assets/img/education/course_thumb01.jpg.png"
                 class="card-img-top course-img"
                 alt="">
          </div>

          <div class="card-body p-4">

            <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
              NEET
            </span>

            <h5 class="fw-semibold mb-3">
              Magic Bullet batch (11th + 12th + NEET)
            </h5>

            <hr>

            <div class="d-flex justify-content-between text-muted small mt-3">

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16">
                <span>2 year</span>
              </div>

              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16">
                <span>202</span>
              </div>

            </div>

          </div>
        </div>
      </div>


      <!-- Duplicate same structure for other cards -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card course-card h-100 border-0 shadow-sm">
          <div class="overflow-hidden rounded-top">
            <img src="/assets/img/education/course_thumb02.jpg.png"
                 class="card-img-top course-img">
          </div>
          <div class="card-body p-4">
            <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
              NEET
            </span>
            <h5 class="fw-semibold mb-3">
              Platinum Batch (12th + NEET)
            </h5>
            <hr>
            <div class="d-flex justify-content-between text-muted small mt-3">
              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16">
                <span>1 year</span>
              </div>
              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16">
                <span>202</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card course-card h-100 border-0 shadow-sm">
          <div class="overflow-hidden rounded-top">
            <img src="/assets/img/education/course_thumb03.jpg.png"
                 class="card-img-top course-img">
          </div>
          <div class="card-body p-4">
            <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
              NEET
            </span>
            <h5 class="fw-semibold mb-3">
              Eklavya Batch (After 12th)
            </h5>
            <hr>
            <div class="d-flex justify-content-between text-muted small mt-3">
              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/clock.png" width="16">
                <span>1 year</span>
              </div>
              <div class="d-flex align-items-center gap-1">
                <img src="/assets/icons/Vector.png" width="16">
                <span>202</span>
              </div>
            </div>
          </div>
        </div>
      </div>

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
          transform:translateY(-8px);
          box-shadow:0 20px 40px rgba(0,0,0,0.15);
      }

      .course-img{
          height:280px;
          object-fit:fill;
          transition:transform .5s ease;
      }

      .course-card:hover .course-img{
          transform:scale(1.1);
      }

      /* Smaller image on mobile */
      @media (max-width: 576px) {
          .course-img{
              height:180px;
          }
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
         style="background:#FFEFF0;">

  <!-- Pink Glow Circle -->
  <div class="pink-glow"></div>

  <div class="container position-relative text-center">

    <div class="row justify-content-center g-4 g-lg-5">

      <!-- CARD -->
      <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="doctor-card">
          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1.png"
               class="doctor-img"
               alt="">
          <div class="doctor-name">
            Rasika Ghorpade
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="doctor-card">
          <img src="/assets/img/education/697078c6bd0682489206e2ce 1.png"
               class="doctor-img"
               alt="">
          <div class="doctor-name">
            Satyabrata Pal
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
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
    /* Pink Glow */
    .pink-glow{
        position:absolute;
        left:50%;
        transform:translateX(-50%);
        bottom:-120px;
        width:400px;
        height:400px;
        background:rgba(255,126,126,0.6);
        filter:blur(120px);
        border-radius:50%;
        z-index:0;
    }

    /* Doctor Cards */
    .doctor-card{
        width:100%;
        max-width:330px;
        background:#fff;
        border-radius:28px;
        overflow:hidden;
        box-shadow:0 15px 35px rgba(0,0,0,0.15);
        transition:all .4s ease;
    }

    .doctor-card:hover{
        transform:translateY(-15px);
        box-shadow:0 25px 50px rgba(0,0,0,0.25);
    }

    .doctor-img{
        width:100%;
        height:380px;
        object-fit:cover;
        transition:transform .4s ease;
    }

    .doctor-card:hover .doctor-img{
        transform:scale(1.05);
    }

    .doctor-name{
        padding:16px;
        text-align:center;
        border-top:1px solid #eee;
        font-weight:600;
        font-size:18px;
    }

    /* Tablet adjustments */
    @media (max-width: 991px){
        .doctor-img{
            height:320px;
        }
    }

    /* Mobile adjustments */
    @media (max-width: 576px){
        .doctor-img{
            height:260px;
        }

        .pink-glow{
            width:280px;
            height:280px;
            bottom:-80px;
        }
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

        <!-- SLIDER -->
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="false">

          <div class="carousel-inner">

            @foreach($testimonials->chunk(3) as $key => $chunk)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <div class="row g-4">

                @foreach($chunk as $testimonial)
                <div class="col-12 col-md-4">
                  <div class="testimonial-card h-100 p-4 shadow-sm bg-white">

                    <div class="d-flex justify-content-between mb-3">

                      <div>
                        <img src="{{ asset($testimonial->image ?? 'assets/img/profile.png') }}"
                            width="60" height="60"
                            class="mb-2 rounded-circle object-fit-cover">

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
                          {!! $i <= $testimonial->rating ? '★' : '☆' !!}
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
            </div>
            @endforeach

          </div>

          <!-- Controls -->
          <div class="text-center mt-5">
            <button class="btn btn-danger rounded-circle me-2"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
              ‹
            </button>

            <button class="btn btn-danger rounded-circle"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
              ›
            </button>
          </div>

        </div>

      </div>
  </section>

<style>
  .testimonial-card{
    border-radius:14px;
    transition:all .3s ease;
  }

  .testimonial-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
  }

  /* Mobile glow fix */
  @media (max-width: 768px){
    .position-absolute[style*="top:-320px"]{
      width:300px !important;
      height:300px !important;
      top:-200px !important;
    }
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

      <!-- VIDEO 1 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="video-card shadow">

          <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
            <iframe 
              src="https://www.youtube.com/embed/ERhyLbUaCzs"
              title="Student Feedback 1"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>

        </div>
      </div>

      <!-- VIDEO 2 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="video-card shadow">

          <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
              <iframe 
              src="https://www.youtube.com/embed/OWUfUo8aEfU"
              title="Student Feedback 1"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/hYut6alSilw?si=ch3jFOB46KzA0BwJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe> -->
          </div>

        </div>
      </div>

      <!-- VIDEO 3 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="video-card shadow">

          <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
            <iframe 
              src="https://www.youtube.com/embed/3ZQaGUrAZtQ"
              title="Student Feedback 3"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>

        </div>
      </div>

    </div>

  </div>

</section>

<style>
    /* Video Cards */
    .video-card{
        border-radius:25px;
        transition:all .3s ease;
        background:#fff;
        padding:10px;
    }

    .video-card:hover{
        transform:translateY(-8px);
        box-shadow:0 20px 40px rgba(0,0,0,0.15);
    }

    /* Mobile spacing */
    @media (max-width:576px){
        .video-card{
            padding:6px;
        }
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
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            Admission Enquiry Form
          </h2>
          <form action="{{ route('admission.enquiry.store') }}" method="POST">
          @csrf

            <!-- Full Name -->
            <div class="mb-4">

              <label class="form-label text-muted small">
                Full Name
              </label>

              <div class="row g-3">
                <div class="col-6">
                  <input type="text" name="first_name" placeholder="First" class="form-control">
                </div>
                <div class="col-6">
                  <input type="text" name="last_name" placeholder="Last" class="form-control">
                </div>
              </div>

            </div>


            <!-- Phone -->
            <div class="mb-4">
                  <label class="form-label text-muted small">
                      Phone number
                  </label>
                  <input type="text" name="phone_number" placeholder="Phone number" class="form-control">
              </div>


            <!-- Course -->
            <div class="mb-4">
                            <label class="form-label text-muted small">
                                School
                            </label>
                            <select class="form-select" name="course">
                                <option selected>Choose course</option>
                                <option>NEET</option>
                                <option>Medical</option>
                            </select>
                        </div>


            <!-- City -->
            
                        <!-- City -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                City
                            </label>
                            <input type="text" name="city" placeholder="City" class="form-control">
                        </div>

                        <!-- Current studying -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                Current studying
                            </label>
                            <textarea rows="4" name="query" placeholder="Current studying" class="form-control"></textarea>
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
<!-- <section class="position-relative py-5 mb-5 overflow-hidden"
         style="background:#FFF5F6;">

  <div class="position-absolute top-0 start-0 w-100 h-100">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-100 h-100 object-fit-cover"
         style="object-fit:cover;"
         alt="">
  </div>

  <div class="container position-relative">

    <div class="row text-center text-white g-4">
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

</section> -->

<!-- BADGE / ACHIEVEMENT SECTION -->
<section class="position-relative py-5 overflow-hidden" style="background:#FFF5F6;">

  <!-- Background Image -->
  <div class="position-absolute top-0 start-0 w-100 h-100">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-100 h-100"
         style="object-fit: cover;"
         alt="Background">
  </div>

  <div class="container position-relative">
    <div class="row justify-content-center text-center text-white g-4">

      <!-- ITEM -->
      <div class="col-6 col-md-4 col-lg">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-3"
               style="max-width:140px;"
               alt="Badge">
          <h2 class="fw-light mb-2 fs-3 fs-md-2 fs-lg-1">2020</h2>
          <p class="small px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <!-- Repeat Items -->
      <div class="col-6 col-md-4 col-lg">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-3"
               style="max-width:140px;"
               alt="Badge">
          <h2 class="fw-light mb-2 fs-3 fs-md-2 fs-lg-1">2021</h2>
          <p class="small px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-3"
               style="max-width:140px;"
               alt="Badge">
          <h2 class="fw-light mb-2 fs-3 fs-md-2 fs-lg-1">2022</h2>
          <p class="small px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-3"
               style="max-width:140px;"
               alt="Badge">
          <h2 class="fw-light mb-2 fs-3 fs-md-2 fs-lg-1">2023</h2>
          <p class="small px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/education/badgeGroup 1000006861.png"
               class="img-fluid mb-3"
               style="max-width:140px;"
               alt="Badge">
          <h2 class="fw-light mb-2 fs-3 fs-md-2 fs-lg-1">2024</h2>
          <p class="small px-2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>
      </div>

    </div>
  </div>

</section>
  </main>

@endsection
