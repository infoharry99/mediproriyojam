@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">





<section class="py-5 bg-[#FFF5F6] ">
<div class="flex justify-center mb-10 mt-[100px]">
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

</section>





  </main>

@endsection
