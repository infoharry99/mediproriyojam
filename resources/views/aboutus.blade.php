@extends('layouts.app')

@section('title','About Us')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<section class="aboutus-section py-5">
  <div class="container">

    @if($about_intro->count())
        @php $intro = $about_intro->first(); @endphp

        <h2 class="aboutus-title text-center mb-4">
            {{ $intro->title }}
        </h2>

        <!-- Banner -->
        <div class="aboutus-banner">
            <img src="{{ asset($intro->banner_image) }}" class="img-fluid w-100" alt="">
        </div>

        
    @endif

    <div class="row mt-4 g-4 align-items-start">

      <!-- TOC -->
      <div class="col-lg-3">
        <div class="aboutus-toc-card">
          <h5 class="aboutus-toc-title">Table of Contents</h5>

          <ul class="aboutus-toc-list">
            <li class="active">Introduction</li>
            <li>The Skeuomorphic Era</li>
            <li>Flat Design Revolution</li>
            <li>Material Design</li>
            <li>Rise of Neumorphism</li>
            <li>Future Trends</li>
          </ul>
        </div>
      </div>

      <!-- Text -->
      <div class="col-lg-9">
        <div class="aboutus-content-text">
          {!! $intro->content !!}
        </div>
      </div>

    </div>
  </div>
</section>

<style>
    .aboutus-section{
    background:#f5f1f1;
    font-family: system-ui, -apple-system, sans-serif;
    }

    /* Title */
    .aboutus-title{
    font-size:28px;
    font-weight:600;
    color:#222;
    }

    /* Banner */
    .aboutus-banner{
    border-radius:16px;
    overflow:hidden;
    }

        /* TOC */
    .aboutus-toc-card{
      background:#fff;          /* softer grey */
      border-radius:24px; 
      max-width:320px;         /* bigger radius */
      padding:32px 28px;           /* more spacing */
    }

    /* Title */
    .aboutus-toc-title{
      font-weight:600;
      font-size:22px;              /* bigger like screenshot */
      margin-bottom:18px;
      color:#222;
    }

    /* List */
    .aboutus-toc-list{
      list-style:none;
      padding:0;
      margin:0;
    }

    .aboutus-toc-list li{
      padding:8px 0;               /* more spacing */
      color:#333;
      cursor:pointer;
      font-size:17px;              /* bigger text */
      line-height:1.4;
    }

    /* Active */
    .aboutus-toc-list li.active{
      color:#ff3b30;
      font-weight:600;
    }

    /* Content */
    .aboutus-content-text{
    font-size:16px;
    line-height:1.8;
    color:#444;
    }

    /* Tablet */
    @media (max-width:992px){
    .aboutus-title{
        font-size:24px;
    }
    }

    /* Mobile */
    @media (max-width:768px){

    .aboutus-section{
        padding-top:30px;
    }

    .aboutus-toc-card{
        padding:18px;
    }

    .aboutus-title{
        font-size:20px;
    }

    .aboutus-content-text{
        font-size:15px;
    }
    }

</style>



@php
    $founder = $about_founder->first();
@endphp

@if($founder)
<section class="aboutus-founder-section py-5">
  <div class="container">

    <div class="aboutus-founder-card">
      <div class="row align-items-center g-4">

        <!-- Image -->
        <div class="col-lg-4">
          <div class="aboutus-founder-image">
            <img src="{{ asset($founder->image) }}" class="img-fluid" alt="">
          </div>
        </div>

        <!-- Content -->
        <div class="col-lg-8">
          <div class="aboutus-founder-content">

            {!! $founder->content !!}

            <!-- Signature -->
            <div class="aboutus-founder-sign">
              <img src="{{ asset($founder->avatar) }}"
                   class="aboutus-founder-avatar"
                   alt="">

              <div>
                <div class="aboutus-founder-name">
                    {{ $founder->name }}
                </div>
                <div class="aboutus-founder-role">
                    {{ $founder->role }}
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
@endif

<style>
    .aboutus-founder-section{
    background:#f5f1f1;
    }

    /* Card */
    .aboutus-founder-card{
    background: radial-gradient(circle at 20% 20%, #b30000, #5a0000);
    border-radius:32px;
    padding:40px;
    color:#fff;
    position:relative;
    overflow:hidden;
    }

    /* Image */
    .aboutus-founder-image{
    border-radius:22px;
    overflow:hidden;
    }

    .aboutus-founder-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    }

    /* Content */
    .aboutus-founder-content p{
    font-size:14px;
    line-height:1.7;
    margin-bottom:12px;
    color:#fff;
    }

    /* Signature */
    .aboutus-founder-sign{
    display:flex;
    align-items:center;
    gap:12px;
    margin-top:20px;
    }

    .aboutus-founder-avatar{
    width:46px;
    height:46px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #fff;
    }

    .aboutus-founder-name{
    font-weight:600;
    font-size:16px;
    }

    .aboutus-founder-role{
    font-size:13px;
    opacity:.9;
    }

    /* Tablet */
    @media(max-width:992px){
    .aboutus-founder-card{
        padding:30px;
    }
    }

    /* Mobile */
    @media(max-width:768px){

    .aboutus-founder-card{
        border-radius:22px;
        padding:20px;
    }

    .aboutus-founder-content p{
        font-size:13px;
    }
    }

</style>

<section class="stats-section">
    <div class="stats-box">

        @foreach($stats->sortBy('sort_order')->values() as $index => $stat)

            <div class="stat-item">
                <h2>
                    {{ $stat->number }}
                    @if($stat->badge_enabled)
                        <span class="badge-plus">+</span>
                    @endif
                </h2>
                <p>{{ $stat->label }}</p>
            </div>

            {{-- Divider except last --}}
            @if(!$loop->last)
                <img src="{{ asset('assets/line.png') }}" class="divider" />
            @endif

        @endforeach

    </div>
</section>

<style>
   .stats-section {
    padding: 40px 15px;
    background: #f5f5f5;
}

.stats-box {
    max-width: 1200px;
    margin: auto;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 50px 40px;

    /* Desktop outline */
    background: url("assets/outline.png") no-repeat center;
    background-size: 100% 100%;

    border-radius: 20px;
    gap: 20px;
}

/* Each stat */
.stat-item {
    text-align: center;
    flex: 1;
}

.stat-item h2 {
    font-size: 42px;
    font-weight: 600;
    color: #333;
}

.stat-item p {
    margin-top: 8px;
    color: #777;
    font-size: 16px;
}

/* Divider */
.divider {
    height: 80px;
    width: auto;
    object-fit: contain;
}

/* ========================= */
/* 📱 MOBILE RESPONSIVE */
/* ========================= */
@media (max-width: 768px) {

    .stats-box {
        flex-direction: column;   /* Row → Column */
        background: none;         /* Remove outline */
        padding: 25px 20px;

        border: 1px solid #ddd;
        background: #fff;
    }

    .stat-item {
        width: 100%;
        padding: 15px 0;
    }

    .stat-item h2 {
        font-size: 32px;
    }

    .stat-item p {
        font-size: 14px;
    }

    /* Change vertical line to horizontal */
    .divider {
        width: 60%;
        height: 2px;
        margin: 10px auto;
        transform: rotate(0deg);
    }
}

/* ========================= */
/* 📱 SMALL MOBILE */
/* ========================= */
@media (max-width: 480px) {

    .stat-item h2 {
        font-size: 26px;
    }

    .stats-box {
        padding: 20px 15px;
    }
}
</style>

<section class="aboutus-classroom-section py-5">
  <div class="container text-center">

    <!-- Top pill -->
    <div class="aboutus-pill mb-4">
      Glimpses of Our Classrooms
    </div>

    <!-- Slider -->
    <div class="aboutus-classroom-slider">

        <img id="classroomImage"
            src="{{ asset($galleries->first()->image ?? '') }}"
            class="aboutus-classroom-img"
            alt="">

        <button class="aboutus-slider-arrow" id="nextSlide">›</button>

    </div>

    <!-- Bottom pill -->
    <div class="aboutus-pill mt-4">
      Our Top Ranker
    </div>

  </div>
</section>

<style>
    .aboutus-classroom-section{
    background:#f5f1f1;
    }

    /* Pills */
    .aboutus-pill{
    display:inline-block;
    padding:8px 18px;
    border:1px solid #bbb;
    border-radius:999px;
    font-size:13px;
    background:#f5f1f1;
    }

    /* Slider */
    .aboutus-classroom-slider{
    position:relative;
    border-radius:22px;
    overflow:hidden;
    }

    .aboutus-classroom-img{
    width:100%;
    height:720px;
    object-fit:cover;
    display:block;
    }

    /* Arrow */
    .aboutus-slider-arrow{
    position:absolute;
    right:18px;
    top:50%;
    transform:translateY(-50%);
    width:44px;
    height:44px;
    border-radius:50%;
    border:1px solid rgba(255,255,255,.7);
    background:rgba(255,255,255,.2);
    backdrop-filter: blur(6px);
    color:#fff;
    font-size:26px;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    }

    /* Tablet */
    @media(max-width:992px){
    .aboutus-classroom-img{
        height:420px;
    }
    }

    /* Mobile */
    @media(max-width:768px){

    .aboutus-classroom-img{
        height:260px;
    }

    .aboutus-slider-arrow{
        width:38px;
        height:38px;
        font-size:22px;
    }
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

<section class="aboutus-different-section py-5">
  <div class="container text-center">

    <!-- Title pill -->
    <div class="aboutus-pill mb-5">what make us different</div>

    <div class="row g-4 justify-content-center">

      @foreach($features->sortBy('sort_order') as $feature)
        <div class="col-6 col-md-4 col-lg aboutus-diff-col">
          <div class="aboutus-diff-card">

            <div class="aboutus-diff-icon">
                <img src="{{ asset($feature->icon) }}" class="img-fluid">
            </div>

            <h4 class="aboutus-diff-title">
                {{ $feature->title }}
            </h4>

            <p>
                {{ $feature->description }}
            </p>

          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>
<style>
    .aboutus-different-section{
    background:#f5f1f1;
    }

    /* reuse pill */
    .aboutus-pill{
    display:inline-block;
    padding:8px 18px;
    border:1px solid #bbb;
    border-radius:999px;
    font-size:13px;
    }

    /* Card */
    .aboutus-diff-card{
    position:relative;
    border:1px solid #dcdcdc;
    border-radius:14px;
    padding:30px 16px 20px;
    background:#fff;
    text-align:center;
    height:100%;
    }

    /* top connector line */
    .aboutus-diff-card::before{
    content:"";
    position:absolute;
    top:-18px;
    left:50%;
    transform:translateX(-50%);
    width:60px;
    height:1px;
    background:#bbb;
    }

    /* icon */
    .aboutus-diff-icon{
    position:absolute;
    top:-26px;
    left:50%;
    transform:translateX(-50%);
    width:38px;
    height:38px;
    border-radius:50%;
    background:#e74c3c;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
    box-shadow:0 6px 14px rgba(0,0,0,.12);
    }

    /* title */
    .aboutus-diff-title{
    font-size:15px;
    color:#e74c3c;
    font-weight:600;
    margin-top:10px;
    }

    /* text */
    .aboutus-diff-card p{
    font-size:12px;
    color:#666;
    margin:0;
    }

    /* Desktop equal width row */
    @media(min-width:992px){
    .aboutus-diff-col{
        flex:0 0 auto;
        width:16.66%;
    }
    }

    /* Mobile spacing */
    @media(max-width:768px){
    .aboutus-diff-card{
        padding:26px 12px 18px;
    }
    }

</style>

<script>
    const images = @json($galleries->pluck('image'));
    let index = 0;

    const imgEl = document.getElementById('classroomImage');
    const nextBtn = document.getElementById('nextSlide');

    nextBtn.addEventListener('click', () => {
        if(!images.length) return;

        index++;
        if(index >= images.length) index = 0;

        imgEl.src = "{{ asset('') }}" + images[index];
    });
</script>

@endsection