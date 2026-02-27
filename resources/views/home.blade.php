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
    margin-top: 0px;
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
     class="btn btn-danger px-4 py-2 square-btn">
    Learn More
  </a>

  <!-- Watch Video -->
  <a href="#"
     class="btn btn-outline-danger px-4 py-2 d-flex align-items-center gap-2 square-btn">
    Watch Video <span class="play-icon"></span>
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
  <div class="stat-card  p-4 p-lg-5 text-center shadow-sm h-100">
    
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
  .stat-card {
    border-radius: 0; /* Square box */
    transition: all 0.3s ease;
    background: #FAFAFA;
    cursor: pointer;
}

.square-btn{
    border-radius: 0 !important;   /* Pure square */
    min-width: 160px;              /* Same width */
    justify-content: center;
    transition: all 0.25s ease;
}

/* Icon always red */
.square-btn .play-icon{
    color: red !important;
    font-weight: bold;
}

/* Hover Effect (Optional Premium Feel) */
.square-btn:hover{
    transform: translateY(-3px) scale(1.03);
}
/* Hover Effect */
.stat-card:hover {
    background:white;              /* White */
    transform: translateY(-8px) scale(1.05); /* Up + Zoom */
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    z-index: 5;
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
         <a href="/course" class="text-decoration-none text-dark">
        <div class="card course-card  border-0 shadow-sm">

          <div class="overflow-hidden rounded-top p-4">
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
          <div class="d-flex gap-4 text-muted small mt-3">

                        <div class="d-flex align-items-center gap-1">
                          <img src="/assets/icons/clock.png" width="16">
                          <span>2 year</span>
                        </div>

                        <div class="d-flex align-items-center gap-1">
                          . <img src="/assets/icons/Vector.png" width="16">
                          <span>202</span>
                        </div>

                      </div>
                    

                    </div>
                  </div>
                  </a>
                </div>


                <!-- Duplicate same structure for other cards -->
                <div class="col-12 col-sm-6 col-lg-4">
                   <a href="/foundation" class="text-decoration-none text-dark">
                  <div class="card course-card1 h-100 border-0 ">
                    <div class="overflow-hidden rounded-top p-4">
                      <img src="/assets/img/education/course_thumb02.jpg.png"
                          class="card-img-top course-img ">
                    </div>
                    <div class="card-body p-4">
                      <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">
                        NEET
                      </span>
                      <h5 class="fw-semibold mb-3">
                        Platinum Batch (12th + NEET)
                      </h5>
                     
                      <hr>
                      <div class="d-flex gap-4 text-muted small mt-3">
                        <div class="d-flex align-items-center gap-1">
                          <img src="/assets/icons/clock.png" width="16">
                          <span>1 year</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                        . <img src="/assets/icons/Vector.png" width="16">
                          <span>202</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                   <a href="/target" class="text-decoration-none text-dark">
                  <div class="card course-card h-100 border-0 shadow-sm">
                    <div class="overflow-hidden rounded-top p-4">
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
                      <div class="d-flex justify-content-between text-muted small mt-3">


                      </div>
                      <hr>
                      <div class="d-flex gap-4  text-muted small mt-3">
                        <div class="d-flex align-items-center gap-1">
                          <img src="/assets/icons/clock.png" width="16">
                          <span>1 year</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                        . <img src="/assets/icons/Vector.png" width="16">
                          <span>202</span>
                        </div>
                      </div>
                    </div>
                  </div>
                   </a>
                </div>

                <div class="text-center my-4">
              <!-- <a href="#" class="see-all-btn">
                  See All Courses <span>→</span>
              </a> -->
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
    .see-all-btn{
    display: inline-flex;
    align-items: center;
    gap: 8px;

    background: linear-gradient(135deg, #6a5cff, #7b6cff);
    color: #fff;

    padding: 10px 22px;
    border-radius: 30px;

    font-size: 14px;
    font-weight: 500;
    text-decoration: none;

    box-shadow: 0 4px 12px rgba(106,92,255,0.3);
    transition: all 0.25s ease;
}

/* Arrow style */
.see-all-btn span{
    font-size: 16px;
    transition: transform 0.25s ease;
}

/* Hover Effect */
.see-all-btn:hover{
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(106,92,255,0.4);
}

/* Arrow move on hover */
.see-all-btn:hover span{
    transform: translateX(4px);
}
      .course-card{
        border-radius:16px;
        transition:all .3s ease;
      }
 .course-card1{
  background:transparent;
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
          transform:scale(1);
      }
/* Move card body content slightly up */
.course-card .card-body {
    padding-top: 15px !important;   /* upar ka padding kam */
    margin-top: -10px;              /* content ko upar uthao */
}

/* Optional: adjust heading spacing */
.course-card h5 {
    margin-top: 5px;
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
    
    <section class="position-relative overflow-hidden"
         style="background:#FFF5F6; ">
         <div class="container">
        
<div class="schoolershipsection">
  <div class="headingtext text-center">
  <h1 class="font-bold">Einstein Scholarship Test 2026</h1>
  <h6>For NEET & Science Aspirants</h6>
  <div class="scholarship-wrapper mt-5 mb-5">

    <div class="scholarship-banner">

        <!-- Yellow Floating Badge -->
        <div class="badge-float">
            40 Marks | Physics • Chemistry • Maths • Biology
        </div>

        <div class="banner-inner">

            <!-- Left Text -->
            <div class="banner-left">

                <p class="win-text">Win Up to</p>

                <h2 class="price-text">₹2,00,000</h2>

                <p class="sub-text">Scholarship</p>

            </div>

            <!-- Right Image -->
            <div class="banner-right">
                <img src="{{ asset('assets/boys.png') }}" alt="Students">
            </div>

        </div>

    </div>

</div>

<div class="exam-section mt-5 mb-5">


        <div class="row justify-content-center  mt-5">

            <!-- Card 1 -->
            <div class="col-md-4">

                <div class="exam-card card-up">

                    <div class="card-header-custom">
                        <img src="/assets/exam.png" alt="Exam">
                        <h5>Exam Pattern</h5>
                    </div>

                    <ul>
                        <li><img src="/assets/star.png" alt="Exam"> 40 MCQs</li>
                        <li><img src="/assets/star.png" alt="Exam"> 1 Mark Each</li>
                        <li><img src="/assets/star.png" alt="Exam"> Total: 40 Marks</li>
                        <li><img src="/assets/star.png" alt="Exam"> Total: 40 min</li>
                    </ul>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="col-md-4">

                <div class="exam-card card-down">

                    <div class="card-header-custom">
                        <img src="/assets/exam.png" alt="Exam">

                        <h5>Subjects</h5>
                    </div>

                    <ul>
                        <li><img src="/assets/star.png" alt="Exam"> Physics — 10</li>
                        <li><img src="/assets/star.png" alt="Exam"> Chemistry — 10</li>
                        <li><img src="/assets/star.png" alt="Exam"> Maths — 10</li>
                        <li><img src="/assets/star.png" alt="Exam"> Biology — 10</li>
                    </ul>

                </div>

            </div>

        </div>


</div>

<div class="topper-section">


    <div class="topper-bg">

      <div class="row justify-content-center align-items-end">

        <div class="col-md-3 text-center topper-card down">

          <div class="rank-badge silver">
          <img src="/assets/2.png" >

          </div>

          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1.png"  class="topper-img">


          <img src="/assets/Off1.png" class="name-ribbon2">


        </div>

        <div class="col-md-4 text-center topper-card up">

          <div class="rank-badge gold">
          <img src="/assets/1.png" >

          </div>

          <img src="/assets/img/education/697078c6bd0682489206e2ce 1.png" class="topper-img main">

          <img src="/assets/Off.png" class="name-ribbon1">

        </div>

        <div class="col-md-3 text-center topper-card down">

          <div class="rank-badge bronze">
          <img src="/assets/3.png" >

          </div>

          <img src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1 (1).png"
           class="topper-img">

          <img src="/assets/Off2.jpeg" class="name-ribbon2">


        </div>

      </div>

    </div>


</div>
<div class="redline my-10"></div>

<div class="contact-section">


    <div class="contact-box mt-5 mb-5">

        <div class="row g-0 align-items-stretch h-100">

          <div class="col-md-4 contact-image h-100">
          <img src="{{ asset('assets/Frame 12.png') }}" alt="Doctor">
        </div>

      <div class="col-md-8 contact-form h-100 d-flex flex-column justify-content-center">
                <h2>Get in Touch</h2>

                <form>

                  <input type="text" placeholder="Full Name">

                  <input type="text" placeholder="Mobile Number">

                  <div class="row g-3">
                    <div class="col-6">
                      <input type="text" placeholder="Class">
                    </div>
                    <div class="col-6">
                      <input type="text" placeholder="City">
                    </div>
                  </div>

                  <input type="email" placeholder="Email">

                  <input type="text" placeholder="Target Exam">

                  <button type="submit">Register for Free</button>

                </form>

              </div>

            </div>

          </div>


      </div>
  </div>
</div>
      <div class="testimonial-header position-relative text-center">
            <div class="top-circle"></div>
            <div class="container position-relative">
              <h2 class="fw-semibold">Testimonial</h2>
              <p class="text-muted mb-0">
                  Don’t take our word for it. Trust our students
              </p>
          </div>
      </div>

        <div class="position-relative mt-10">

            <!-- Slider -->
            <div id="feedbackSlider"
                 class="d-flex gap-4 overflow-auto pb-4"
                 style="scroll-behavior:smooth;">

                @foreach($testimonials as $testimonial)
                <div class="p-4 rounded-4 shadow position-relative testimonial-card"
                     style="min-width:350px;
                            background:linear-gradient(to bottom,#FFD7D7,#FFF5F6);">

                    <!-- Quote -->
                    <!-- <div class="display-6 mb-2">“</div> -->

                    <!-- Message -->
                  <p class="small text-muted testimonial-message">
                   {{ $testimonial->message }}
                       </p>

                    <!-- Rating -->
                    <div class="mb-5 text-warning">
                        @for($i=1;$i<=5;$i++)
                            @if($i <= $testimonial->rating)
                                <i class="bi bi-star-fill"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                    </div>

                    <!-- Bottom Profile Section -->
                    <div class="d-flex align-items-center gap-2 position-absolute"
                         style="bottom:15px; left:15px; ">

                        <img src="{{ asset($testimonial->image ?? 'assets/img/profile.png') }}"
                             style="width:50px;height:50px;object-fit:cover;"
                             class="rounded-circle border"
                             alt="{{ $testimonial->name }}">

                        <div class="text-start">
                            <h6 class="mb-0 small fw-semibold">
                                {{ $testimonial->name }}
                            </h6>
                            <small class="text-muted">
                                {{ $testimonial->designation }}
                            </small>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>

            <!-- Buttons -->
            <div class="mt-3 d-flex justify-content-center gap-4">
                <button onclick="slideLeft()" class="btn btn-outline-secondary rounded-circle me-2">‹</button>
                <button onclick="slideRight()" class="btn btn-outline-secondary rounded-circle">›</button>
            </div>

        </div>
         
         </div>
    </section>

    <style>



/* Curved BG */
.exam-section{
  padding-top: 20px;

}
.scholarship-wrapper{
  padding-top: 40px;

}
.topper-bg{
  padding-top: 100px;
  padding-bottom: 100px;
}

/* Card */
.topper-card {
    position: relative;
}

/* Image */
.topper-img {
    width: 100%;
    max-width: 250px;
    border-radius: 15px;
    padding: 5px;
}
/* Main Image */
.topper-img.main {
    max-width: 250px;
}

/* Rank Badge */
.rank-badge {
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translateX(-50%);

    width: 40px;
    height: 40px;

    border-radius: 50%;
    font-weight: 700;
    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
}

/* Colors */
.gold {
   
margin-left: 90px;


  }
.silver { 
margin-left: 90px;
}
.bronze { 
margin-left: 90px;


}

/* Name Ribbon */
.name-ribbon1 {
    /* background: #D62828; */
    color: #fff;

    /* padding: 6px 14px; */
    /* border-radius: 0 0 10px 10px; */

    font-size: 14px;
    font-weight: 600;

    margin-top: -5px;
    margin-left: -18px;
}
.name-ribbon2 {
    /* background: #D62828; */
    color: #fff;

    /* padding: 6px 14px; */
    /* border-radius: 0 0 10px 10px; */
          <img src="/assets/Off1.png" class="name-ribbon">

    font-size: 14px;
    font-weight: 600;

    margin-top: -5px;
    margin-left: -32px;
}

/* Position */
.up {
    transform: translateY(-30px);
}

.down {
    transform: translateY(20px);
}

/* Mobile */
@media (max-width: 768px) {

    .up,
    .down {
        transform: none;
        margin-bottom: 25px;
    }

    .topper-img {
        max-width: 150px;
    }

    .topper-img.main {
        max-width: 170px;
    }
}
      /* Section Background */

.redline{
    width: 100%;
    height: 2px;              /* Line thickness */
    background-color: #D62828; /* Red color */
}
/* Main Box */
.contact-box {
    background: #fff;
    /* border-radius: 20px; */
    overflow: hidden;
     height: 700px; 
    max-width: 1400px;
    margin: auto;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}
@media (max-width: 768px) {
    .contact-box {
        height: auto;
    }
    .contact-image,
    .contact-form {
        height: auto !important;
    }
}


/* Left Image */
.contact-image {
    background: #ccc;
}

.contact-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Right Form */
.contact-form {
    padding: 50px 45px;
}

.contact-form h2 {
    color: #D62828;
    font-weight: 700;
    margin-bottom: 30px;
}

/* Inputs */
.contact-form input {
    width: 100%;
    border: 1px solid #eee;
    border-radius: 30px;
    padding: 12px 20px;
    margin-bottom: 18px;
    font-size: 14px;
    outline: none;
}

.contact-form input:focus {
    border-color: #D62828;
}

/* Button */
.contact-form button {
    background: #D62828;
    color: #fff;
    border: none;
    border-radius: 30px;
    padding: 12px 35px;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    transition: 0.3s;
}

.contact-form button:hover {
    background: #b71c22;
}

/* Mobile Responsive */
@media (max-width: 768px) {

    .contact-section {
        padding: 50px 10px;
    }

    .contact-form {
        padding: 30px 25px;
    }

    .contact-form h2 {
        text-align: center;
    }

    .contact-image {
        height: 250px;
    }
}
      /* Card Design */
.exam-card {
    background: #FFDCD3;
    border-radius: 20px;
    padding: 25px 30px;
    min-height: 260px;

    box-shadow: 0 6px 15px rgba(0,0,0,0.05);
}

/* Header */
.card-header-custom {
    display: flex;
    align-items: center;
    gap: 12px;

    font-weight: 600;
    margin-bottom: 20px;
}

.card-header-custom i {
    color: #D62828;
    font-size: 22px;
}

.card-header-custom h5 {
    margin: 0;
    font-weight: 700;
}

/* List */
.exam-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.exam-card ul li {
    display: flex;
    align-items: center;
    gap: 10px;

    font-size: 15px;
    margin-bottom: 12px;
    color: #333;
}

.exam-card ul li i {
    color: #F05454;
    font-size: 14px;
}

/* Position Effect */
.card-up {
    transform: translateY(-25px);
}

.card-down {
    transform: translateY(25px);
}

/* Mobile Responsive */
@media (max-width: 768px) {

    .card-up,
    .card-down {
        transform: none;
        margin-bottom: 25px;
    }

    .exam-section {
        padding: 50px 15px;
    }
}
      /* Wrapper */
.scholarship-wrapper {
    max-width: 1100px;
    margin: auto;
}

/* Main Banner */
.scholarship-banner {
    background: #D62828;
    border-radius: 18px;
    position: relative;
    overflow: visible;
    padding: 35px 35px 0 35px;
}

/* Yellow Tag (Floating) */
.badge-float {
    position: absolute;
    top: -37px;
    left: 3px;

    background: #FFD700;
    color: #000;

    padding: 10px 14px;
    font-size: 12px;
    font-weight: 600;

    border-radius: 18px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);

    z-index: 5;
}

/* Layout */
.banner-inner {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}

/* Left Text */
.banner-left {
    color: #fff;
    padding-bottom: 22px;
}

.win-text {
    margin: 0;
    font-size: 15px;
}

.price-text {
    margin: 4px 0;
    font-size: 42px;
    font-weight: 700;
    color: #FFD700;
}

.sub-text {
    margin: 0;
    font-size: 15px;
}

/* Right Image */
.banner-right {
    position: relative;
}

.banner-right img {
    max-height: 200px;
    /* margin-bottom: 21px; */
    margin-top: -80px;
    display: block;
}

/* ============ MOBILE ============ */

@media (max-width: 768px) {

    .scholarship-banner {
        padding: 25px 20px 0 20px;
    }

    .banner-inner {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .banner-left {
        padding-bottom: 15px;
    }

    .price-text {
        font-size: 32px;
    }

    .banner-right img {
        max-height: 140px;
        margin-top: -15px;
    }

    .badge-float {
        font-size: 11px;
        left: 12px;
    }
}
      .headingtext h1{
        color:#CF242A;
        font-weight: 500;  
        
      }
.testimonial-card {
    min-width: 280px;
    min-height: 250px;
    background: linear-gradient(to bottom,#FFD7D7,#FFF5F6);
    padding-bottom: 90px; /* space for bottom profile */
}

.testimonial-message {
    margin-bottom: 20px;
}
</style>
<script>
const slider = document.getElementById("feedbackSlider");

function slideLeft(){
    slider.scrollBy({left:-280,behavior:'smooth'});
}
function slideRight(){
    slider.scrollBy({left:280,behavior:'smooth'});
}
</script>

<style>
.object-fit-cover{
    object-fit:cover;
}
#feedbackSlider::-webkit-scrollbar{
    display:none;
}
#feedbackSlider{
    -ms-overflow-style:none;
    scrollbar-width:none;
}
</style>

<style>
  .testimonial-card{
    max-width:100%;
    width:100%;
    border-radius:16px;
    transition:all .3s ease;
}

.testimonial-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
}
.testimonial-header{
    padding-top:120px;
    padding-bottom:60px;
    overflow:hidden;
}

.top-circle{
    position:absolute;
    top:-300px;
    left:50%;
    transform:translateX(-50%);
    width:400px;
    height:400px;
    background:#f36c6c;   
    border-radius:50%;
    z-index:0;
}

.testimonial-header h2{
    font-size:38px;
    position:relative;
    z-index:2;
}

.testimonial-header p{
    font-size:16px;
    position:relative;
    z-index:2;
}


.custom-arrow{
    background-color:#ff4d6d;
    width:45px;
    height:45px;
    border-radius:50%;
    background-size:60% 60%;
}

.carousel-control-prev,
.carousel-control-next{
    width:auto;
}
@media (min-width: 992px) {

    .carousel-item {
        display: flex;
        justify-content: center;
    }

    .carousel-item > .row {
        width: 100%;
    }

    .carousel-item .col-lg-4 {
        display: block;
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
              src="https://www.youtube.com/embed/sq-I-JVmyWc"
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
              src="https://www.youtube.com/embed/jc4LiVYJM4Y"
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
              src="https://www.youtube.com/embed/w7BnvUlf7nI"
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
<section class="enquiry-section">

    <div class="text-center mb-4">
        <h3 class="enquiry-title">
            Enquiry form with lead
        </h3>
    </div>

    <div class="container">
        <div class="row g-4 align-items-stretch">

            <!-- LEFT FORM -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="enquiry-card">

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
                            <label class="form-label small text-muted">Full Name</label>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input type="text" name="first_name" placeholder="First"
                                        class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="last_name" placeholder="Last"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label class="form-label small text-muted">Phone number</label>
                            <input type="text" name="phone_number" placeholder="Phone number"
                                class="form-control">
                        </div>

                        <!-- Course -->
                        <div class="mb-4">
                            <label class="form-label small text-muted">School</label>
                            <select class="form-select" name="course">
                                <option selected disabled>Choose course</option>
                                <option>NEET</option>
                                <option>Medical</option>
                            </select>
                        </div>

                        <!-- City -->
                        <div class="mb-4">
                            <label class="form-label small text-muted">City</label>
                            <input type="text" name="city" placeholder="City"
                                class="form-control">
                        </div>

                        <!-- Query -->
                        <div class="mb-4">
                            <label class="form-label small text-muted">Current studying</label>
                            <textarea rows="4" name="query"
                                placeholder="Current studying"
                                class="form-control"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-danger enquiry-btn">
                                Submit →
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="enquiry-image-wrapper">
                    <img src="/assets/Frame 12.png" alt="Enquiry Image">
                </div>
            </div>

        </div>
    </div>
</section>

<style>
  /* SECTION BACKGROUND */
.enquiry-section {
    background: #FFF5F6;
    padding: 60px 0;
}

/* TITLE */
.enquiry-title {
    display: inline-block;
    padding: 10px 25px;
    border: 1px solid #000;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 500;
}

/* CARD */
.enquiry-card {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    height: 100%;
}

/* IMAGE WRAPPER */
.enquiry-image-wrapper {
    height: 100%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.enquiry-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* BUTTON */
.enquiry-btn {
    padding: 10px 25px;
    font-weight: 500;
    border-radius: 6px;
    transition: 0.3s ease;
}

.enquiry-btn:hover {
    background: #bb2d3b;
}

/* FORM FOCUS */
.form-control:focus,
.form-select:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25);
}

/* ---------- RESPONSIVE ---------- */

/* Tablet */
@media (max-width: 991px) {
    .enquiry-card {
        padding: 30px;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .enquiry-section {
        padding: 40px 15px;
    }

    .enquiry-card {
        padding: 25px;
    }

    .enquiry-image-wrapper {
        height: auto;
        margin-top: 20px;
    }

    .enquiry-image-wrapper img {
        height: auto;
        object-fit: contain;
    }

    .enquiry-title {
        font-size: 16px;
        padding: 8px 18px;
    }
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
  <!-- <div class="text-center mt-5">
    <h4 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
      Award and achievement
    </h4>
  </div> -->

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

<div class="winner-section">
<div class="container">


    <div class="winner-card">

      <div class="row align-items-center g-4">

        <!-- LEFT IMAGE -->
        <div class="col-md-4 text-center">

          
<div class="winner-img-box">

    <!-- Medal Icon -->
    <img src="/assets/Empty.png" class="winner-medal-img">

    <!-- Main Image -->
              <img src="/assets/img/education/697078c6bd0682489206e2ce 1.png" alt="Winner" class="winner-img">

</div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-md-8">

          <div class="winner-content">

           

            <p class="winner-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type 
               specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged of Letraset sheets 
                containing Lorem 
            </p>

            <h5 class="winner-name">Satyabrata Pan</h5>

            <span class="winner-role">National Award Winner</span>

          </div>

        </div>

      </div>

      <!-- Corner Star -->
      <div class="corner-star">⭐</div>

    </div>

  </div>

</div>
<style>
  /* Section */
.winner-section {
    padding: 10px 15px;
    background: #FFF5F6;
    padding-bottom: 30px;
}

/* Main Card */
.winner-card {
    background: #5D0000;

    border-radius: 15px;
    padding: 20px 20px;
    position: relative;
    color: #fff;

    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

/* Left Image Box */


/* s */

/* Image Container */
.winner-img-box {
    position: relative; /* Important */
    display: inline-block;
    border-radius: 12px;
}
 .winner-img{
  width: 100%;
    border-radius: 12px;


            }
/* Medal on Image */
.winner-medal-img {
    position: absolute;

    top: -12px;
    right: -42px;

    width: 100px;
    height: auto;

    z-index: 5;
}

/* Content */
.winner-content {
    position: relative;
    padding-left: 10px;
}

/* Medal */
.winner-medal {
    font-size: 28px;
    margin-bottom: 12px;
}

/* Text */
.winner-text {
    font-size: 20px;
    line-height: 2;
    color: #ffecec;
    margin-bottom: 15px;
}

/* Name */
.winner-name {
    color: #FFD700;
    font-weight: 700;
    margin-bottom: 2px;
}

/* Role */
.winner-role {
    font-size: 12px;
    color: #ffcccc;
}

/* Corner Star */
.corner-star {
    position: absolute;
    bottom: 10px;
    right: 12px;
    font-size: 26px;
}

/* Mobile */
@media (max-width: 768px) {

    .winner-card {
        padding: 25px 20px;
        text-align: center;
    }

    .winner-content {
        padding-left: 0;
    }

    .winner-img-box img {
        max-width: 150px;
    }
}
</style>

<!-- <section class="position-relative py-5 overflow-hidden" style="background:#FFF5F6;">

  <div class="position-absolute top-0 start-0 w-100 h-100">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-100 h-100"
         style="object-fit: cover;"
         alt="Background">
  </div>

  <div class="container position-relative">
    <div class="row justify-content-center text-center text-white g-4">

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

</section> -->


  </main>

@endsection
