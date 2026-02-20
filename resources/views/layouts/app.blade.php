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
<!-- Floating WhatsApp Button -->
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/918669667300"
   target="_blank"
   class="position-fixed bottom-0 end-0 m-4 bg-success p-3 rounded-circle shadow whatsapp-btn">

  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
       alt="WhatsApp"
       width="32" height="32">

</a>

</body>
</html>
