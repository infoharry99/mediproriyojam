<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- <script src="https://cdn.tailwindcss.com"></script> -->
 <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            pop: ['Poppins', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* WhatsApp Floating Button */
    .whatsapp-btn{
        z-index:9999;
        transition:all .3s ease;
    }

    .whatsapp-btn:hover{
        transform:scale(1.15);
    }
</style>
</head>

<body class="font-pop">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  @include('partials.header')

  @yield('content')

  @include('partials.footer')

    <div class="floating-contact">
    
    <!-- WhatsApp -->
    <a href="https://wa.me/918669667300" target="_blank" class="whatsapp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
       alt="WhatsApp" width="40" height="40">

    </a>

    <!-- Phone -->
    <a href="tel:+918669667300" class="phone">
        <i class="fa fa-phone"></i>
    </a>

</div>

<style>
  .floating-contact {
        position: fixed;
        right: 20px;
        bottom: 80px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: 9999;
    }

    .floating-contact a {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 26px;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        transition: 0.3s;
    }

    .floating-contact a:hover {
        transform: scale(1.1);
    }

    .whatsapp {
        background: #25D366;
    }

    .phone {
        background: #007bff;
    }
</style>

</body>
</html>
