<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
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

</head>

<body class="font-pop">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  @include('partials.header')

  @yield('content')

  @include('partials.footer')
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/918669667300"
   target="_blank"
   class="fixed bottom-5 right-5 z-50 bg-green-500 p-3 rounded-full shadow-lg hover:scale-110 transition-all duration-300">

  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
       alt="WhatsApp"
       class="w-8 h-8">

</a>

</body>
</html>
