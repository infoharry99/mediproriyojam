@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">

    <!-- blog -->

<section class="relative w-full ">

  <!-- Background Image -->
  <img 
    src="/assets/img/blog/Rectangle 4316.png"
    alt="Hero Image"
    class="w-full h-full object-cover"
  />

  <!-- Dark Overlay (optional for readability) -->
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Center Text -->
  <div class="absolute inset-0 flex items-center justify-center">

    <h1 class="text-white text-4xl md:text-5xl font-bold">
      Blog
    </h1>

  </div>

</section>

<!-- second section -->

<!-- BLOG GRID SECTION -->

<section class="py-20 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%]">


    <div class="grid lg:grid-cols-3 gap-6">


      <!-- LEFT BIG CARD -->
      <div class="lg:col-span-2 relative rounded-[30px] overflow-hidden group">

        <img
          src="/assets/img/blog/blogimg.png"
          class="w-full h-[420px] object-cover
                 group-hover:scale-105 transition duration-500"
          alt="Blog">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t
                    from-black/80 via-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute bottom-6 left-6 right-6 text-white">

          <div class="text-xs mb-2 flex gap-3 opacity-90">
            <span>Apr. 14th, 2025</span>
            <span>•</span>
            <span>Technology</span>
          </div>

          <h3 class="text-xl font-semibold leading-snug">
           Studying Without a Proper Strategy
          </h3>

        </div>

      </div>


      <!-- RIGHT MEDIUM CARD -->
      <div class="relative rounded-[30px] overflow-hidden group">

        <img
          src="/assets/img/blog/blogimg.png"
          class="w-full h-[420px] object-cover
                 group-hover:scale-105 transition duration-500"
          alt="Blog">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t
                    from-black/80 via-black/40 to-transparent"></div>


        <!-- Slider Button -->
        <button
          class="absolute right-4 top-1/2 -translate-y-1/2
                 w-10 h-10 rounded-full
                 bg-white/90 text-black
                 flex items-center justify-center
                 shadow-lg
                 hover:bg-white hover:scale-110
                 transition z-20">

          ›
        </button>


        <!-- Content -->
        <div class="absolute bottom-6 left-6 right-6 text-white">

          <div class="text-xs mb-2 flex gap-3 opacity-90">
            <span>Apr. 14th, 2025</span>
            <span>•</span>
            <span>Technology</span>
          </div>

          <h3 class="text-lg font-semibold leading-snug">
           Lack of NCERT Focus
          </h3>

        </div>

      </div>


      <!-- BOTTOM SMALL CARDS -->
      <div class="lg:col-span-3 grid md:grid-cols-3 gap-6 mt-4">


        <!-- Small Card -->
        <div class="relative rounded-[30px] overflow-hidden group">

          <img
            src="/assets/img/blog/blogimg.png"
            class="w-full h-[250px] object-cover
                   group-hover:scale-105 transition duration-500"
            alt="Blog">

          <div class="absolute inset-0 bg-gradient-to-t
                      from-black/80 via-black/40 to-transparent"></div>

          <div class="absolute bottom-4 left-4 right-4 text-white">

            <div class="text-xs mb-1 flex gap-2 opacity-90">
              <span>Apr. 14th, 2025</span>
              <span>•</span>
              <span>Technology</span>
            </div>

            <h4 class="text-sm font-semibold leading-snug">
             Poor Time Management During Preparation
            </h4>

          </div>

        </div>


        <!-- Small Card -->
        <div class="relative rounded-[30px] overflow-hidden group">

          <img
            src="/assets/img/blog/blogimg.png"
            class="w-full h-[250px] object-cover
                   group-hover:scale-105 transition duration-500"
            alt="Blog">

          <div class="absolute inset-0 bg-gradient-to-t
                      from-black/80 via-black/40 to-transparent"></div>

          <div class="absolute bottom-4 left-4 right-4 text-white">

            <div class="text-xs mb-1 flex gap-2 opacity-90">
              <span>Apr. 14th, 2025</span>
              <span>•</span>
              <span>Technology</span>
            </div>

            <h4 class="text-sm font-semibold leading-snug">
               Ignoring Mock Tests and Performance Analysis
            </h4>

          </div>

        </div>


        <!-- Small Card -->
        <div class="relative rounded-[30px] overflow-hidden group">

          <img
            src="/assets/img/blog/blogimg.png"
            class="w-full h-[250px] object-cover
                   group-hover:scale-105 transition duration-500"
            alt="Blog">

          <div class="absolute inset-0 bg-gradient-to-t
                      from-black/80 via-black/40 to-transparent"></div>

          <div class="absolute bottom-4 left-4 right-4 text-white">

            <div class="text-xs mb-1 flex gap-2 opacity-90">
              <span>Apr. 14th, 2025</span>
              <span>•</span>
              <span>Technology</span>
            </div>

            <h4 class="text-sm font-semibold leading-snug">
             Fear, Stress, and Lack of Mental Preparation
            </h4>

          </div>

        </div>


      </div>

    </div>

  </div>

</section>


<!-- BLOG THIRD SECTION -->
<section class="mb-10 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%]">


    <!-- Cards Grid -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- BLOG CARD -->
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

       Comparing with Others Instead of Self-Improvement

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

      Overconfidence or Late Seriousness

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

      Not Understanding the Level of Competition

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

      Lack of Revision

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

      Wrong Study Environment

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>
<div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-b from-[#8E3030] to-[#B02828]">

  <!-- Image -->
  <div class="relative">

    <img
      src="/assets/img/blog/blogimg.png"
      class="w-full h-[240px] object-cover rounded-3xl"
      alt="Blog">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>


    

  </div>


  <!-- Content -->
        <div class="p-6 text-white">

          <div class="flex items-center gap-4 text-xs mb-3 opacity-90">
            <div class="-mt-[55px]
              bg-black/30 backdrop-blur-sm
              border border-white/40
              text-white
              px-4 py-2 rounded-lg
              text-sm leading-tight text-center
              shadow-md">

              <span class="block text-base font-semibold">12</span>
              <span class="block text-xs">Fab</span>

      </div>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/usericon.png" class="w-3 h-3" alt="">
        John Doe
      </span>

      <span class="flex items-center gap-1">
        <img src="/assets/icons/Folder.png" class="w-3 h-3" alt="">
        Politics
      </span>

    </div>


    <!-- Title -->
    <h3
      class="text-lg font-semibold mb-4 leading-snug">

      How to Avoid Failure in NEET

    </h3>


    <!-- Button -->
    <a
      href="/innerblog"
      class="inline-flex items-center gap-1
             text-xs border border-white/40
             px-4 py-1.5 rounded-full
             hover:bg-white hover:text-[#B82323]
             transition">

      Read more

      <span>›</span>

    </a>

  </div>

</div>

    </div>


    <!-- Pagination -->
    <div class="relative flex justify-center mt-14">


      <!-- Gradient -->
      <div
        class="absolute inset-0 mx-56
               bg-[linear-gradient(90deg,rgba(255,255,255,0)_0%,#CF242A_50%,rgba(255,255,255,0)_100%)]
               opacity-60 rounded-full">
      </div>


      <!-- Buttons -->
      <div class="relative flex items-center gap-2 px-6 py-2">

        <button class="w-10 h-10 text-sm rounded ">‹</button>

        <button class="w-7 h-7 text-sm rounded bg-red-600 text-white">1</button>

        <button class="w-7 h-7 text-sm rounded bg-white shadow">2</button>

        <button class="w-7 h-7 text-sm rounded bg-white shadow">3</button>

        <button class="w-7 h-7 text-sm rounded bg-white shadow">4</button>

        <button class="w-10 h-10 text-sm rounded ">›</button>

      </div>

    </div>


  </div>

</section>


@endsection
