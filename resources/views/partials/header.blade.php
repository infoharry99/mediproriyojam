<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
.navbar .nav-link {
    transition: 0.3s ease;
    padding: 10px 14px;
}

.navbar .nav-link.active,
.navbar .nav-link:hover {
    color: #dc3545 !important;
    font-weight: 600;
}


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
.navbar-collapse{
    transition: all .3s ease;
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
@media (max-width: 991px) {

    .navbar-collapse {
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }

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
           <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
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



<script>
document.addEventListener("DOMContentLoaded", function () {

    const navbarCollapse = document.getElementById("mainNavbar");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link:not(.dropdown-toggle)");

    navLinks.forEach(function (link) {
        link.addEventListener("click", function () {

            if (window.innerWidth < 992) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }

        });
    });

});
</script>