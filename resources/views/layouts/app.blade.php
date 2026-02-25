<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 72px; /* for fixed navbar */
        }

        /* Floating Contact Buttons */
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

    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Floating Buttons -->
    <div class="floating-contact">

        <!-- WhatsApp -->
        <a href="https://wa.me/918669667300" target="_blank" class="whatsapp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                 alt="WhatsApp" width="30" height="30">
        </a>

        <!-- Phone -->
        <a href="tel:+918669667300" class="phone">
            <i class="fa fa-phone"></i>
        </a>

    </div>

    <!-- Bootstrap JS (Only Once) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')

</body>
</html>