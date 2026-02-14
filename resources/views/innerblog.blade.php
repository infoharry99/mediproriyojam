@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">





<section class="py-5 bg-[#FFF5F6] ">
<div class="flex justify-center mb-10 mt-[120px]">
  <h3 class="py-2 px-4 font-medium text-[30px] ">Best NEET & Medical Coaching Classes in Nagpur | Medical Prayojanam</h3>
</div>
  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]">

  


    <div
      class="relative rounded-2xl overflow-hidden
             shadow-xl h-[480px] md:h-[420px]">


      <!-- Background Image -->
      <img
        src="/assets/img/bg/innerblog.png"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Banner">


      <!-- Blue Overlay -->
      <div
        class="absolute inset-0
               bg-gradient-to-r
               from-[#0A2A5A]/95 via-[#0A2A5A]/70 to-transparent">
      </div>


      <!-- Content -->
      <div
  class="absolute bottom-5 left-0 right-6
         z-10
         px-3 md:px-12">


        <div class="max-w-xl text-white">


          <!-- Badge -->
          <span
            class="inline-block mb-3
                   px-3 py-1 text-xs
                   bg-blue-500/90
                   rounded-full">

            NEET

          </span>


          <!-- Title -->
          <h1
            class="text-xl md:text-3xl font-bold leading-snug mb-4">

            Best NEET & Medical Coaching Classes in Nagpur |
            Medical Prayojanam

          </h1>


          <!-- Meta -->
          <div class="flex items-center gap-3 text-xs opacity-90">

            <span class="flex items-center gap-1">
              👤 Karan Singh
            </span>

            <span>•</span>

            <span>August 20, 2023</span>

          </div>


        </div>

      </div>


    </div>

 


  </div>

</section>


<!-- CONTENT SECTION -->
<section class="py-10 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%]">


    <!-- Top Row -->
    <div class="grid lg:grid-cols-3 gap-10 items-start mb-20">


      <!-- Table of Contents -->
      <div
        class="bg-white rounded-xl shadow-md p-6">

        <h3 class="font-semibold mb-4 text-lg">
          Table of Contents
        </h3>

        <ul class="space-y-2 text-lg">

          <li class="text-red-500 font-medium">
            Introduction
          </li>

          <li class="text-gray-700">
            The Skeuomorphic Era
          </li>

          <li class="text-gray-700">
            Flat Design Revolution
          </li>

          <li class="text-gray-700">
            Material Design
          </li>

          <li class="text-gray-700">
            Rise of Neumorphism
          </li>

          <li class="text-gray-700">
            Future Trends
          </li>

        </ul>

      </div>


      <!-- Text Content -->
      <div class="lg:col-span-2 text-gray-700 text-lg leading-relaxed space-y-4">

        <p>
          The journey of user interface design has been marked by significant
          shifts in aesthetic approaches, each era bringing its own unique
          perspective on how digital interfaces should look and feel.
        </p>

        <p>
          From the early days of graphical user interfaces to today’s
          sophisticated design systems, the evolution of UI design reflects
          not just technological advancement, but also changing user
          expectations and cultural shifts in how we interact with digital
          products.
        </p>

      </div>


    </div>


    <!-- Bottom Row -->
    <div class="grid lg:grid-cols-2 gap-14 items-start">


      <!-- Left Text -->
      <div>

        <h2
          class="text-3xl font-semibold text-red-500 mb-4">

          The Skeuomorphic Era

        </h2>

        <p
          class="text-gray-700 text-lg leading-relaxed">

          Skeuomorphic design dominated the early years of digital interfaces,
          attempting to mirror real-world objects in digital form. This
          approach helped users transition from physical to digital
          interactions through familiar visual metaphors.

        </p>

      </div>


      <!-- Right Image Placeholder -->
      <div
        class="w-full h-[220px]
               bg-gray-300
               rounded-xl">

      </div>


    </div>


  </div>

</section>


<!-- VENN DIAGRAM SECTION -->
<section class="py-20 bg-[#FFF5F6]">

  <div class="max-w-5xl mx-auto w-[90%]">

    <div class="relative flex justify-center items-center h-[420px]">


      <!-- LEFT CIRCLE -->
      <div
        class="absolute left-1/2 -translate-x-[90%]
               w-[400px] h-[400px]
               rounded-full
               bg-[#FF9A9A]
               flex items-center
               text-white">

        <div class="pl-14 pr-10">

          <h3 class="font-semibold mb-4 text-lg">
            Advantages
          </h3>

          <ul class="space-y-2 text-sm list-disc list-inside">

            <li>Reduced visual cues</li>
            <li>Potential usability issues</li>
            <li>Limited depth perception</li>

          </ul>

        </div>

      </div>


      <!-- RIGHT CIRCLE -->
      <div
        class="absolute left-1/2 translate-x-[-10%]
               w-[400px] h-[400px]
               rounded-full
               bg-[#E53939]
               flex items-center
               text-white">

        <div class="pl-14 pr-10">

          <h3 class="font-semibold mb-4 text-lg">
            Challenges
          </h3>

          <ul class="space-y-2 text-sm list-disc list-inside">

            <li>Reduced visual cues</li>
            <li>Potential usability issues</li>
            <li>Limited depth perception</li>

          </ul>

        </div>

      </div>


    </div>

  </div>

</section>




  </main>

@endsection
