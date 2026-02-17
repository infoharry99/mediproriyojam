@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">

    <!-- Courses Hero Section -->
<!-- <section class="">
  <img 
    src="/assets/img/education/medical 1herotop.png"
    alt="Hero Image"
    class="w-full h-full object-cover"
  />
</section> -->

<section class="relative">

  <div class="swiper myHeroSlider">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide">
        <img src="/assets/icons/banners1.png"
             class="w-full h-[100vh] " />
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <img src="/assets/icons/banners2.png"
             class="w-full h-[100vh] " />
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <img src="/assets/icons/banners3.png"
             class="w-full h-[100vh] " />
      </div>

    </div>

    <!-- Pagination Dots -->
    <div class="swiper-pagination"></div>

    <!-- Navigation Arrows -->
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->

  </div>

</section>

<script>
  var swiper = new Swiper(".myHeroSlider", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 800,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>


<!-- ABOUT SECTION -->
<section class="py-24 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]">

    <div class="grid lg:grid-cols-[1fr_auto_1fr] gap-16 items-center">

      <!-- LEFT CONTENT -->
      <div>

        <h2 class="text-5xl lg:text-6xl font-semibold text-[#313131] mb-6">
          ABOUT US
        </h2>

        <p class="text-gray-700 text-[20px] mb-4 max-w-xl">
          Medical Prayojanam is one of the best Coaching Institute in Nagpur Exclusively for NEET. It is the only Institute of Central India which is only preparation for Medical Entrance. Here you will get Central India’s Best Faculty Team & see the Magic of Biology, Strength of Chemistry & Power of Physics. It may change your view towards study. Our main moto is to guide the students for Examination of Medical Entrance. Secondary aim is to promote and encourage all the students to fulfil their dream. If you want to become a Doctor then Join Medical Prayojanam.
        </p>

        <!-- Buttons -->
        <div class="flex gap-5">

          <!-- Learn More -->
          <a href="#"
             class="px-7 py-3 bg-red-600 text-white font-medium rounded
                    hover:bg-red-600 hover:scale-105 hover:shadow-xl transition duration-300">
            Learn More
          </a>

          <!-- Watch Video -->
          <a href="#"
             class="px-7 py-3 border border-red-600 text-red-600 font-medium rounded
                    flex items-center gap-2
                    hover:bg-red-600 hover:scale-105 hover:shadow-xl hover:text-white transition duration-300">

            Watch Video
            ▶
          </a>

        </div>

      </div>


      <!-- CENTER LINE -->
      <div class="hidden lg:block w-px h-[350px] bg-gray-300"></div>


      <!-- RIGHT STATS -->
      <div class="grid grid-cols-2 gap-8">

        <!-- Box 1 -->
        <div class="bg-[#FAFAFA] p-10  shadow text-center
                    hover:shadow-2xl transition hover:bg-white scale-105">

          <h3 class="text-4xl font-semibold mb-2">1000+</h3>
          <p class="text-gray-500">Satisfied Students</p>
        </div>

        <!-- Box 2 -->
         <div class="bg-[#FAFAFA] p-10  shadow text-center
                    hover:shadow-2xl transition hover:bg-white scale-105">

          <h3 class="text-4xl font-semibold mb-2">250+</h3>
          <p class="text-gray-500">Employees</p>
        </div>

        <!-- Box 3 -->
        <div class="bg-[#FAFAFA] p-10  shadow text-center
                    hover:shadow-2xl transition hover:bg-white scale-105">

          <h3 class="text-4xl font-semibold mb-2">100+</h3>
          <p class="text-gray-500">Rank Holders</p>
        </div>

        <!-- Box 4 -->
         <div class="bg-[#FAFAFA] p-10  shadow text-center
                    hover:shadow-2xl transition hover:bg-white scale-105">

          <h3 class="text-4xl font-semibold mb-2">10+</h3>
          <p class="text-gray-500">Years of Excellence</p>
        </div>

      </div>

    </div>

  </div>

</section>



<!-- Featured Courses Section -->
<section class="py-20 bg-[#FFF5F6]">

  <!-- Title -->
  <div class="flex justify-center mb-14">
    <h2
      class="px-7 py-2 text-base font-medium border border-gray-900 rounded-full">
      Course
    </h2>
  </div>


  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]">

    <!-- Cards -->
    <div class="grid md:grid-cols-3 gap-10">


      <!-- CARD -->
      <div
        class="group bg-white p-8 rounded-2xl overflow-hidden shadow-lg
               hover:shadow-2xl transition duration-300">

        <!-- Image -->
        <div class="overflow-hidden">
          <img
            src="/assets/img/education/course_thumb01.jpg.png"
            class="w-full h-[220px] object-cover
                   group-hover:scale-110 transition duration-500"
            alt="">
        </div>

        <div class="mt-6">

          <!-- Top -->
          <div class="flex justify-between items-center mb-4">

            <span
              class="bg-gray-100 text-sm px-4 py-1 rounded-full font-medium">
              NEET
            </span>

            <div class="text-right">
              <span class="line-through text-gray-400 mr-2 text-sm">$29.00</span>
              <span class="text-[#4F46E5] font-bold text-lg">$9.00</span>
            </div>

          </div>


          <!-- Title -->
          <h3
            class="text-lg font-semibold text-gray-800 mb-5 leading-snug">

            Foundation course – <br/>11th+12th
          </h3>


          <!-- Author -->
          <div class="flex justify-between items-center mb-5">

            <div class="flex items-center gap-2">
              <img
                src="/assets/img/education/Rectangle 729 (2).png"
                class="w-8 h-8 rounded-full object-cover"
                alt="">
              <span class="text-sm text-gray-600">Mohit Roa</span>
            </div>

            <div class="text-sm text-gray-500 flex items-center gap-1">
              ⭐ 4.8 <span>(Reviews)</span>
            </div>

          </div>


          <hr class="mb-4">


          <!-- Info -->
          <div
            class="flex justify-between text-sm text-gray-600">

            <div class="flex items-center gap-1">
              <img src="/assets/icons/List → Item.png" alt=""> <span>05</span>
            </div>

            <div class="flex items-center gap-1">
           <img src="/assets/icons/clock.png" alt="">  <span>11h 20m</span>
            </div>

            <div class="flex items-center gap-1">
             <img src="/assets/icons/Vector.png" alt=""> <span>22</span>
            </div>

          </div>

        </div>
      </div>


      <!-- CARD 2 -->
      <div
        class="group bg-white p-8 rounded-2xl overflow-hidden shadow-lg
               hover:shadow-2xl transition duration-300">

        <div class="overflow-hidden">
          <img
            src="/assets/img/education/course_thumb02.jpg.png"
            class="w-full h-[220px] object-cover
                   group-hover:scale-110 transition duration-500"
            alt="">
        </div>

        <div class="mt-6">

          <div class="flex justify-between items-center mb-4">

            <span
              class="bg-gray-100 text-sm px-4 py-1 rounded-full font-medium">
              NEET
            </span>

            <div>
              <span class="line-through text-gray-400 mr-2 text-sm">$20.00</span>
              <span class="text-[#4F46E5] font-bold text-lg">$10.00</span>
            </div>

          </div>

          <h3 class="text-lg font-semibold text-gray-800 mb-5">
            Countdown course – <br/> 12th
          </h3>

          <div class="flex justify-between items-center mb-5">

            <div class="flex items-center gap-2">
              <img
                src="/assets/img/education/Rectangle 729 (2).png"
                class="w-8 h-8 rounded-full object-cover"
                alt="">
              <span class="text-sm text-gray-600">Kriti Mishra</span>
            </div>

            <div class="text-sm text-gray-500">
              ⭐ 4.5 (Reviews)
            </div>

          </div>

          <hr class="mb-4">

           <div
            class="flex justify-between text-sm text-gray-600">

            <div class="flex items-center gap-1">
              <img src="/assets/icons/List → Item.png" alt=""> <span>05</span>
            </div>

            <div class="flex items-center gap-1">
           <img src="/assets/icons/clock.png" alt="">  <span>11h 20m</span>
            </div>

            <div class="flex items-center gap-1">
             <img src="/assets/icons/Vector.png" alt=""> <span>22</span>
            </div>

          </div>

        </div>
      </div>


      <!-- CARD 3 -->
      <div
        class="group bg-white p-8 rounded-2xl overflow-hidden shadow-lg
               hover:shadow-2xl transition duration-300">

        <div class="overflow-hidden">
          <img
            src="/assets/img/education/course_thumb03.jpg.png"
            class="w-full h-[220px] object-cover
                   group-hover:scale-110 transition duration-500"
            alt="">
        </div>

        <div class="mt-6">

          <div class="flex justify-between items-center mb-4">

            <span
              class="bg-gray-100 text-sm px-4 py-1 rounded-full font-medium">
              NEET
            </span>

            <span
              class="text-[#4F46E5] font-bold text-lg">$20.00</span>

          </div>

          <h3 class="text-lg font-semibold text-gray-800 mb-5">
            Target Course – After 12th passed
          </h3>

          <div class="flex justify-between items-center mb-5">

            <div class="flex items-center gap-2">
              <img
                src="/assets/img/education/Rectangle 729 (2).png"
                class="w-8 h-8 rounded-full object-cover"
                alt="">
              <span class="text-sm text-gray-600">Rohit</span>
            </div>

            <div class="text-sm text-gray-500">
              ⭐ 4.8 (Reviews)
            </div>

          </div>

          <hr class="mb-4">

           <div
            class="flex justify-between text-sm text-gray-600">

            <div class="flex items-center gap-1">
              <img src="/assets/icons/List → Item.png" alt=""> <span>05</span>
            </div>

            <div class="flex items-center gap-1">
           <img src="/assets/icons/clock.png" alt="">  <span>11h 20m</span>
            </div>

            <div class="flex items-center gap-1">
             <img src="/assets/icons/Vector.png" alt=""> <span>22</span>
            </div>

          </div>

        </div>
      </div>

    </div>


    <!-- Button -->
    <div class="flex justify-center mt-12">

      <a href="#"
         class="px-10 py-3 rounded-full
                bg-[#5751E1] text-white font-medium
                border-b-4 border-blue-950
                hover:translate-y-[2px]
                hover:border-b-2 transition">

        See All Courses →

      </a>

    </div>

  </div>
<div class=" mt-10  flex justify-center">
      <h1 class="text-lg py-2 px-4 font-medium border rounded-full border-black shadow-sm">
        Our Top Doctors
      </h1>
    </div>
</section>



<!-- OUR TOP DOCTORS -->
<section
  class="relative py-28 overflow-hidden bg-[#FFEFF0]
        ">

  <!-- Pink Glow Circle -->
  <div
    class="absolute bottom-[-180px] left-1/2 -translate-x-1/2
           w-[520px] h-[520px]
           bg-[#FF7E7E]/70 blur-3xl rounded-full">
  </div>


  <div class="relative z-10  text-center  max-w-7xl mx-auto  w-[90%] lg:w-[90%]">

   


<div class="grid md:grid-cols-3 gap-14 items-end">


 
<div class="flex justify-center ">

    <div
      class="group w-[330px]
             bg-white rounded-[32px]
             shadow-2xl overflow-hidden
             transition-all duration-500 ease-in-out
             hover:scale-110 hover:-translate-y-6
             hover:shadow-3xl hover:z-20">

      <img
        src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1.png"
        class="w-full h-[430px] object-cover
               transition duration-500 group-hover:scale-105"
        alt="">

      <div
        class="py-5 text-center border-t
               font-bold text-lg">

        Rasika Ghorpade

      </div>

    </div>

  </div>

  <!-- MIDDLE CARD (DEFAULT BIG) -->
  <div class="flex justify-center ">

    <div
      class="group w-[330px]
             bg-white rounded-[32px]
             shadow-2xl overflow-hidden
             transition-all duration-500 ease-in-out
             hover:scale-110 hover:-translate-y-6
             hover:shadow-3xl hover:z-20">

      <img
        src="/assets/img/education/697078c6bd0682489206e2ce 1.png"
        class="w-full h-[430px] object-cover
               transition duration-500 group-hover:scale-105"
        alt="">

      <div
        class="py-5 text-center border-t
               font-bold text-lg">

        Satyabrata Pal

      </div>

    </div>

  </div>


  

<div class="flex justify-center ">

    <div
      class="group w-[330px]
             bg-white rounded-[32px]
             shadow-2xl overflow-hidden
             transition-all duration-500 ease-in-out
             hover:scale-110 hover:-translate-y-6
             hover:shadow-3xl hover:z-20">

      <img
        src="/assets/img/education/front-view-male-student-wearing-black-backpack-holding-copybooks-files-blue-wall 1 (1).png"
        class="w-full h-[430px] object-cover
               transition duration-500 group-hover:scale-105"
        alt="">

      <div
        class="py-5 text-center border-t
               font-bold text-lg">

        Kresha Kubhalwar

      </div>

    </div>

  </div>
</div>





  </div>

</section>


<section class="relative py-24 bg-[#FFF5F6] overflow-hidden">

  <!-- Top Pink Curve -->
  <div
    class="absolute -top-80 left-1/2 -translate-x-1/2
           w-[450px] h-[450px]
           bg-[#FF7E7E] rounded-full">
  </div>


  <div class="relative max-w-7xl mx-auto w-[90%] lg:w-[90%] -mt-10">


    <!-- Badge -->
    <div class="flex justify-center mb-6">
      <span
        class="px-5 py-1.5 text-sm border border-black text-black rounded-full bg-transparent">
        Testimonial
      </span>
    </div>


    <!-- Title -->
    <div class="text-center mb-16 mt-20">

      <h2 class="text-3xl font-semibold mb-2">
        Testimonial
      </h2>

      <p class="text-gray-600 text-sm">
        Don’t take our word for it. Trust our students
      </p>

    </div>


    <!-- Cards -->
   <div class="grid md:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="bg-white p-6  shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class=" gap-3">
            <img src="/assets/img/education/Rectangle 729.png"
                 class="w-15 h-15 object-cover"
                 alt="">
            <div>
              <h4 class="font-semibold mt-2">Floyd Miles</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★★
          </div>
        </div>

        <p class="text-gray-600 text-sm font-normal leading-relaxed">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.<br/>
          Exercitation veniam consequat sunt nostrud amet.
        </p>

      </div>


      <!-- Card 2 -->
      <div class="bg-white p-6  shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class="gap-3">
            <img src="/assets/img/education/Rectangle 729 (1).png"
                 class="w-15 h-15 object-cover"
                 alt="">
            <div>
              <h4 class="font-semibold mt-2">Ronald Richards</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★☆
          </div>
        </div>

        <p class="text-gray-600 text-sm leading-relaxed">
          ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
        </p>

      </div>


      <!-- Card 3 -->
      <div class="bg-white p-6  shadow-md">

        <div class="flex items-start justify-between mb-4">
          <div class="gap-3">
            <img src="/assets/img/education/Rectangle 729 (2).png"
                 class="w-15 h-15 object-cover"
                 alt="">
            <div>
              <h4 class="font-semibold mt-2">Savannah Nguyen</h4>
            </div>
          </div>

          <div class="text-yellow-400 text-xl">
            ★★★★☆
          </div>
        </div>

        <p class="text-gray-600 text-sm leading-relaxed">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.<br/>
          Exercitation veniam consequat sunt nostrud amet.
        </p>
        <p></p>

      </div>

    </div>


   <!-- Pagination -->
<div class="relative flex justify-center mt-10">

  <!-- Gradient Background Strip -->
  <div class="absolute inset-0  mx-80
              bg-[linear-gradient(90deg,rgba(255,255,255,0)_0%,#CF242A_49.52%,rgba(255,255,255,0)_100%)]
              opacity-60 
              rounded-full">
  </div>

  <!-- Buttons Container -->
  <div class="relative flex items-center gap-3 
              px-6 py-2 
              rounded-full">
<button class="w-10 h-10 flex items-center justify-center 
                  
                   rounded-sm text-xs">
      <
    </button>
    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white 
                   rounded-sm text-xs">
      1
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white rounded-sm shadow text-xs">
      2
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white rounded-sm shadow text-xs">
      3
    </button>

    <button class="w-7 h-7 flex items-center justify-center 
                   bg-white border-2 rounded-sm shadow text-xs">
      4
    </button>
    <button class="w-10 h-10 flex items-center justify-center 
                    
                   rounded-sm text-xs">
      >
    </button>

  </div>

</div>

  </div>


  </div>

</section>




<section class="bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%] text-center">

    <!-- Title -->
    <h1 class="text-3xl font-medium  mb-8">
      Our Student Feedback
    </h1>

    <!-- Video Cards -->
    <div class="grid md:grid-cols-3 mt-14 gap-8">

<div class="relative rounded-[30px] overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <div class="absolute inset-0 bg-black/10"></div>

  <!-- YouTube Play Button -->
  <div class="absolute inset-0 flex items-center justify-center">

    <div class="bg-red-600 
                w-16 h-12 
                rounded-lg 
                flex items-center justify-center 
                shadow-xl 
                group-hover:scale-110 
                transition duration-300">

      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-6 h-6 text-white"
           fill="currentColor"
           viewBox="0 0 16 16">
        <path d="M6 4.5v7l6-3.5-6-3.5z"/>
      </svg>

    </div>

  </div>

</div>


<div class="relative rounded-[30px] overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <div class="absolute inset-0 bg-black/10"></div>

  <!-- YouTube Play Button -->
  <div class="absolute inset-0 flex items-center justify-center">

    <div class="bg-red-600 
                w-16 h-12 
                rounded-lg 
                flex items-center justify-center 
                shadow-xl 
                group-hover:scale-110 
                transition duration-300">

      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-6 h-6 text-white"
           fill="currentColor"
           viewBox="0 0 16 16">
        <path d="M6 4.5v7l6-3.5-6-3.5z"/>
      </svg>

    </div>

  </div>

</div>


      <!-- Duplicate for 3rd -->
<div class="relative rounded-[30px] overflow-hidden shadow-lg group">

  <!-- Full Image -->
  <img src="/assets/img/education/image 3youtube.png"
       class="w-full object-cover"
       alt="Student Feedback">

  <!-- Dark Overlay (optional like image depth) -->
  <div class="absolute inset-0 bg-black/10"></div>

  <!-- YouTube Play Button -->
  <div class="absolute inset-0 flex items-center justify-center">

    <div class="bg-red-600 
                w-16 h-12 
                rounded-lg 
                flex items-center justify-center 
                shadow-xl 
                group-hover:scale-110 
                transition duration-300">

      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-6 h-6 text-white"
           fill="currentColor"
           viewBox="0 0 16 16">
        <path d="M6 4.5v7l6-3.5-6-3.5z"/>
      </svg>

    </div>

  </div>

</div>
  </div>

      <!-- Bottom Navigation -->
    <div class="flex justify-center items-center gap-6 mt-10">

      <button class="w-10 h-10 border border-black rounded-full
                     flex items-center  justify-center text-gray-500">
        ‹
      </button>

      <button class="w-10 h-10 border border-black rounded-full 
                     flex items-center justify-center text-gray-500">
        ›
      </button>

    </div>

</section>


<section class="py-20 bg-[#FFF5F6]">

<div class="flex justify-center">
  <h1 class="border rounded-full py-2 px-4 text-lg font-medium border-black">Blog</h1>
</div>

  <div class="max-w-7xl mx-auto  w-[90%] lg:w-[90%]">

    <!-- Section Title -->
    <div class="mb-12">
      <h2 class="text-3xl font-semibold text-gray-900">
        Latest Post
      </h2>
    </div>

    <!-- Blog Cards -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Card -->
      <div class="bg-white p-5 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <!-- Image -->
        <img src="/assets/img/education/course_thumb03.jpg.png"
             class="w-full h-72 object-cover rounded-lg"
             alt="Blog">

        <div class="mt-6 ">

          <!-- Category -->
          <span class="text-sm bg-[#F6F8FF] text-blue-600 px-3 py-1 rounded-md">
            Medical
          </span>

          <!-- Title -->
          <h3 class="mt-4 text-xl font-semibold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <!-- Author -->
          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (1).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-sm text-[#97989F]">
              <span class="font-medium text-[#97989F]">Tracey Wilson</span>
              <span class="mx-2">•</span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>


      <!-- Card 2 -->
      <div class="bg-white p-5 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <img src="/assets/img/education/course_thumb02.jpg.png"
             class="w-full h-72 object-cover rounded-lg"
             alt="Blog">

        <div class="mt-6">

          <span class="text-sm bg-[#F6F8FF] text-blue-600 px-3 py-1 rounded-md">
            Medical
          </span>

          <h3 class="mt-4 text-xl font-semibold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (2).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-sm text-[#97989F]">
              <span class="font-medium text-[#97989F]">Jason Francisco</span>
              <span class="mx-2">•</span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>


      <!-- Card 3 -->
      <div class="bg-white p-5 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

        <img src="/assets/img/education/Rectangle 38.png"
             class="w-full h-72 object-cover rounded-lg"
             alt="Blog">

        <div class="mt-6">

          <span class="text-sm bg-[#F6F8FF] text-blue-600 px-3 py-1 rounded-md">
            Medical
          </span>

          <h3 class="mt-4 text-xl font-semibold text-gray-900 leading-snug">
            Trusted NEET Coaching Classes in Nagpur for Future Doctors
          </h3>

          <div class="flex items-center gap-3 mt-6">

            <img src="/assets/img/blog/blogprofileImage (3).png"
                 class="w-9 h-9 rounded-full object-cover"
                 alt="Author">

            <div class="text-sm text-[#97989F]">
              <span class="font-medium text-[#97989F]">Elizabeth Slavin</span>
              <span class="mx-2">•</span>
              August 20, 2022
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>

</section>



<section class="py-5 bg-[#FFF5F6] ">
<div class="flex justify-center mb-10">
  <h3 class="py-2 px-4 font-medium text-lg border border-black rounded-full">Enquiry form with lead</h3>
</div>
  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]">

    <div class="grid md:grid-cols-2 gap-10 items-center">

      <!-- LEFT: FORM CARD -->
     <div class="bg-white rounded-2xl h-full shadow-md p-8">

  <!-- Title -->
  <h1 class="text-3xl font-bold text-red-600 mb-8">
    Admission Enquiry Form
  </h1>


  <form class="space-y-5">

    <!-- Full Name -->
    <div>
      <label class="block text-sm text-gray-600 mb-1">
        Full Name
      </label>

      <div class="grid grid-cols-2 gap-4">

        <input
          type="text"
          placeholder="First"
          class="w-full border border-gray-300 rounded-md
                 px-3 py-2.5 text-sm
                 focus:outline-none focus:ring-2 focus:ring-red-400">

        <input
          type="text"
          placeholder="Last"
          class="w-full border border-gray-300 rounded-md
                 px-3 py-2.5 text-sm
                 focus:outline-none focus:ring-2 focus:ring-red-400">

      </div>
    </div>


    <!-- Phone -->
    <div>
      <label class="block text-sm text-gray-600 mb-1">
        Phone number
      </label>

      <input
        type="text"
        placeholder="Phone number"
        class="w-full border border-gray-300 rounded-md
               px-3 py-2.5 text-sm
               focus:outline-none focus:ring-2 focus:ring-red-400">
    </div>


    <!-- Course -->
    <div>
      <label class="block text-sm text-gray-600 mb-1">
        Choose course
      </label>

      <select
        class="w-full border border-gray-300 rounded-md
               px-3 py-2.5 text-sm bg-white
               focus:outline-none focus:ring-2 focus:ring-red-400">

        <option>Choose course</option>
        <option>NEET</option>
        <option>Medical</option>

      </select>
    </div>


    <!-- City -->
    <div>
      <label class="block text-sm text-gray-600 mb-1">
        City
      </label>

      <input
        type="text"
        placeholder="City"
        class="w-full border border-gray-300 rounded-md
               px-3 py-2.5 text-sm
               focus:outline-none focus:ring-2 focus:ring-red-400">
    </div>


    <!-- Query -->
    <div>
      <label class="block text-sm text-gray-600 mb-1">
        Query
      </label>

      <textarea
        rows="4"
        placeholder="Query"
        class="w-full border border-gray-300 rounded-md
               px-3 py-2.5 text-sm resize-none
               focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
    </div>


    <!-- Submit -->
    <div class="pt-2">

      <button
        type="submit"
        class="inline-flex items-center gap-2
               bg-red-600 text-white
               px-6 py-2.5 rounded-md text-sm font-medium
               hover:bg-red-700 transition">

        Submit

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7" />
        </svg>

      </button>

    </div>

  </form>

</div>



      <!-- RIGHT: IMAGE -->
      <div class="rounded-2xl overflow-hidden shadow-md">
        <img src="/assets/img/education/formImage.png"
             class="w-full object-cover"
             alt="Doctors">
      </div>

    </div>

  </div>

</section>

<section class="py-20 bg-[#FFF5F6]">

<div class="flex justify-center mb-28">
    <h1 class="px-4 py-2 border font-medium text-lg font-santoshi border-black rounded-full">Download our app</h1>
</div>

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]   relative">

    <!-- Pink Rounded Container -->
    <div class="bg-[#FFCECE] rounded-3xl 
                px-12 py-16 h-full
                relative overflow-visible">

      <div class="">

        <h2 class="relative text-5xl font-medium text-black mb-10">
          Download our app
        </h2>

        <!-- QR Codes -->
        <div class="flex gap-6 mb-8">

          <div class="bg-white p-4 rounded-2xl shadow-md">
            <img src="/assets/icons/barcode.png"
                 class="w-32 h-32 object-contain"
                 alt="">
          </div>

          <div class="bg-white p-4 rounded-2xl shadow-md">
            <img src="/assets/icons/barcode.png"
                 class="w-32 h-32 object-contain"
                 alt="">
          </div>

        </div>

        <!-- Store Buttons -->
        <div class="text-left">
          <img src="/assets/img/education/PhotoshopExtension_Image (3) 1.png"
               class="h-24 object-contain"
               alt="">
        </div>

      </div>

    </div>


    <!-- iPhone Floating Image -->
    <div class=" absolute 
                right-0 
                bottom-0
                md:right-10">

      <img src="/assets/img/education/iphoneMask group (3).png"
           class="h-full max-w-7xl mx-auto w-[90%] lg:w-[90%] object-contain drop-shadow-2xl"
           alt="App Preview">

    </div>

  </div>
<div class="flex justify-center mb-10 mt-20">
  <h4 class="py-2 px-4 font-medium text-lg border rounded-full border-black">Award and achievenment</h4>
</div>
</section>



<section class="relative py-10 mb-10 overflow-hidden bg-[#FFF5F6]">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="/assets/img/bg/badgeBGimage.png"
         class="w-full h-full object-cover opacity-100"
         alt="">
  </div>

  <!-- Dark Overlay -->
  <div class="absolute inset-0"></div>

  <div class="relative max-w-7xl mx-auto w-[90%] lg:w-[90%]">

    <div class="grid grid-cols-2 md:grid-cols-5 gap-10 text-center">

      <!-- ITEM -->
      <div class="flex flex-col items-center text-white">

        <!-- Badge Image -->
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="Badge">

        <h1 class="text-6xl text-white font-light">
          2020
        </h1>

        <p class="text-sm text-white mt-2 font-normal leading-6 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>

      </div>

      <!-- Duplicate 4 more -->
      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm font-normal text-white mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm text-white font-normal mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl text-white font-light">2020</h1>
        <p class="text-sm text-white font-normal  mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="flex flex-col  items-center text-white">
        <img src="/assets/img/education/badgeGroup 1000006861.png"
             class="w-44 h-44 object-contain mb-6"
             alt="">
        <h1 class="text-6xl font-santoshi text-white font-light">2020</h1>
        <p class="text-sm font-santoshi text-white font-normal mt-2 max-w-44">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

    </div>

  </div>

</section>

  </main>

@endsection
