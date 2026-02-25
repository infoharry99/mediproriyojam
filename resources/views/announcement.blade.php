@extends('layouts.app')

@section('title','About Us')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<section class="announcement-section  py-5">
  <div class="container">
    <div class="row g-4 align-items-stretch">

        <!-- LEFT POSTER -->
        <div class="col-lg-5  d-flex">
            <div class="announcement-poster-card">

                @if($announcement_poster)
                    <img src="{{ asset($announcement_poster->poster) }}"
                        class="img-fluid announcement-poster-img"
                        alt="poster">
                @endif

            </div>
        </div>

      <!-- RIGHT LIST -->
      <div class="col-lg-7 ">
        <div class="announcement-list-card">

          <h3 class="announcement-title">Latest Announcements</h3>

            <div class="announcement-list">

                @forelse($announcements as $item)

                    <div class="announcement-item">
                        <div class="announcement-item-title">
                            {{ $item->title }}
                        </div>

                        @if($item->subtitle)
                        <div class="announcement-item-sub">
                            {{ $item->subtitle }}
                        </div>
                        @endif

                        <div class="announcement-date">
                            {{ $item->date->format('F d, Y') }}
                        </div>
                    </div>

                @empty
                    <p class="text-white">No announcements found</p>
                @endforelse

            </div>

        </div>
      </div>

    </div>
  </div>
</section>

<style>
    .announcement-section{
    background:#f5f1f1;
    }

   .announcement-poster-img{
    width:100%;
    display:block;
    }

    .announcement-poster-card{
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 22px rgba(0,0,0,.08);
    background:#fff;
    }

    /* RIGHT CARD */
    .announcement-list-card{
    background:linear-gradient(180deg,#e21b1b,#7b0000);
    border-radius:16px;
    padding:22px;
    color:#fff;
    }

    /* title */
    .announcement-title{
    font-size:20px;
    font-weight:600;
    margin-bottom:14px;
    }

    /* list scroll */
    .announcement-list{
    max-height:620px;
    overflow:auto;
    padding-right:6px;
    }

    /* item */
    .announcement-item{
    border:1px solid rgba(255,255,255,.25);
    border-radius:12px;
    padding:14px;
    margin-bottom:12px;
    background:rgba(255,255,255,.05);
    }

    .announcement-item-title{
    font-weight:600;
    font-size:14px;
    }

    .announcement-item-sub{
    font-size:13px;
    opacity:.9;
    }

    .announcement-date{
    font-size:12px;
    color:#ffd54f;
    margin-top:6px;
    }

    /* scrollbar subtle */
    .announcement-list::-webkit-scrollbar{
    width:6px;
    }
    .announcement-list::-webkit-scrollbar-thumb{
    background:rgba(255,255,255,.4);
    border-radius:10px;
    }

    /* Mobile */
    @media(max-width:768px){
    .announcement-list{
        max-height:none;
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

@endsection