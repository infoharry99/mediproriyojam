<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

</body>
</html>
