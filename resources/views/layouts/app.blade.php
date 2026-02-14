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
</head>

<body class="font-pop">

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

</body>
</html>
