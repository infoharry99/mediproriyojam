<div class="flex justify-center">

<header
  class="fixed top-6 w-[90%] lg:w-[90%] max-w-7xl mx-auto rounded-full z-50 bg-white shadow-sm"
>

  <div class="px-5">

    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
      <a href="/" class="flex items-center mt-8">
        <img src="{{ asset('/assets/img/education/footerlogo.png') }}"
             alt="Logo"
             class="h-32 w-42">
      </a>

      <!-- Desktop Menu -->
      <nav
        class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-700">

        <a href="/" class="hover:text-red-500 transition">Home</a>
        <a href="/about" class="hover:text-red-500 transition">About</a>
        <a href="/foundationcourse" class="hover:text-red-500 transition">Courses</a>
        <a href="/instructors" class="hover:text-red-500 transition">Instructors</a>
        <a href="/pricing" class="hover:text-red-500 transition">Pricing</a>
        <a href="/blog" class="hover:text-red-500 transition">Blog</a>
        <a href="/contact" class="hover:text-red-500 transition">Contact</a>

      </nav>

      <!-- Right Buttons -->
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

      <!-- Mobile Button -->
      <button
        id="menu-btn"
        class="md:hidden text-2xl text-gray-700">
        ☰
      </button>

    </div>

  </div>

</header>

</div>
