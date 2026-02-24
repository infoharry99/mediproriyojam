<!-- <div class="flex justify-center">

<header
  class="fixed top-6 w-[90%] lg:w-[90%] max-w-7xl mx-auto rounded-full z-50 bg-white shadow-sm"
>

  <div class="px-5">

    <div class="flex items-center justify-between h-20">

      <a href="/" class="flex items-center">
        <img src="{{ asset('/assets/img/education/footerlogo.png') }}"
             alt="Logo"
             class="h-25 w-42">
      </a>

      <nav
        class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-700">

        <a href="/" class="hover:text-red-500 transition">Home</a>
        <a href="/foundation" class="hover:text-red-500 transition">About</a>
        <a href="/target" class="hover:text-red-500 transition">Announcement</a>
        <a href="/course" class="hover:text-red-500 transition">Courses</a>
        <a href="/gallery" class="hover:text-red-500 transition">Gallery</a>
        <a href="/blog" class="hover:text-red-500 transition">Blog</a>
        <a href="/contact" class="hover:text-red-500 transition">Contact</a>

      </nav>

      <div class="hidden md:flex items-center gap-0">

        <a href="/login"
           class="px-5 py-2 rounded-full bg-black text-white text-sm font-medium hover:opacity-90 transition">
          Login
        </a>

        <a href="/enroll"
           class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black text-white hover:bg-red-700 transition">

          <img src="{{ asset('/assets/icons/headerarrow.png') }}"
               alt="Enroll"
               class="w-4 h-4">
        </a>

      </div>

      <button
        id="menu-btn"
        class="md:hidden text-2xl text-gray-700">
        ☰
      </button>

    </div>

  </div>

</header>

</div> -->

<!-- HEADER -->
<style>
/* Smooth nav links */
.navbar .nav-link {
    transition: 0.3s ease;
    padding: 10px 14px;
}

/* Active + Hover */
.navbar .nav-link.active,
.navbar .nav-link:hover {
    color: #dc3545 !important;
    font-weight: 600;
}

/* Fix body spacing for fixed header */
/* Dropdown UI */
.dropdown-menu {
    border-radius: 10px;
    padding: 8px 0;
}

.dropdown-item {
    padding: 8px 18px;
    font-size: 14px;
    transition: 0.2s;
}

/* Hover Effect */
.dropdown-item:hover {
    background: #dc3545;
    color: #fff;
}

/* Mobile Adjustments */
@media (max-width: 991px) {

    .navbar-nav {
        text-align: center;
        padding: 20px 0;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }

    .navbar-collapse {
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .header-buttons {
        flex-direction: column;
        gap: 10px;
        margin-top: 15px;
    }

    .header-buttons a {
        width: 100%;
    }
}
.navbar {
    z-index: 1050;
}

.dropdown-menu {
    z-index: 2000;
}
</style>

<header class="fixed-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('/assets/img/education/footerlogo.png') }}"
                     alt="Logo"
                     height="45">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="mainNavbar">

                <!-- Links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-medium">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                           href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}"
                           href="/about-us">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('announcements') ? 'active' : '' }}"
                           href="/announcements">Announcement</a>
                    </li>
<li class="nav-item dropdown">

   <a class="nav-link dropdown-toggle {{ request()->is('course*') ? 'active' : '' }}"
   href="javascript:void(0)"
   id="courseDropdown"
   role="button"
   data-bs-toggle="dropdown"
   aria-expanded="false">
    Courses
</a>

    <ul class="dropdown-menu shadow-sm border-0"
        aria-labelledby="courseDropdown">

        <li>
            <a class="dropdown-item" href="/course">
                Magic Bullet batch (11th + 12th + NEET)
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="/foundation">
              Platinum Batch (12th + NEET)
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="/target">
                Eklavya Batch (After 12th)
            </a>
        </li>

    </ul>

</li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                           href="/gallery">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}"
                           href="/blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                           href="/contact">Contact</a>
                    </li>

                </ul>

                <!-- Right Buttons -->
                <div class="d-flex align-items-center header-buttons">

                    <a href="/contact"
                       class="btn btn-dark rounded-pill px-4">
                        Contact US
                    </a>

                    <a href="/contact"
                       class="btn btn-dark rounded-circle d-flex align-items-center justify-content-center"
                       style="width:40px;height:40px;">
                        <img src="{{ asset('/assets/icons/headerarrow.png') }}"
                             width="16">
                    </a>

                </div>

            </div>
        </div>
    </nav>
</header>


