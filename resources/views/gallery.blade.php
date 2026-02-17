@extends('layouts.app')

@section('title','Gallery')

@section('content')

<section class="min-h-screen bg-[#FFF5F6] py-16 ">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%] mt-20">

    <!-- Heading -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-[#D62828] mb-3">
        Our Gallery
      </h2>

      <p class="text-gray-600 max-w-xl mx-auto">
        Moments, Memories & Milestones
      </p>

      <div class="w-20 h-1 bg-[#D62828] mx-auto mt-4 rounded"></div>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

      @for($i = 1; $i <= 16; $i++)

        <div
          class="group relative overflow-hidden rounded-xl bg-white shadow-md hover:shadow-xl transition duration-300">

          <img
            src="{{ asset('assets/gallery/gallery'.$i.'.png') }}"
            alt="Gallery Image {{ $i }}"
            class="w-full h-56 object-cover
                   group-hover:scale-110
                   transition duration-500">

          <!-- Overlay -->
          <div
            class="absolute inset-0 bg-black/40 opacity-0
                   group-hover:opacity-100
                   transition duration-300
                   flex items-center justify-center">

            <!-- <span class="text-white text-sm font-semibold tracking-wide">
              View Image
            </span> -->

          </div>

        </div>

      @endfor

    </div>

  </div>

</section>

@endsection
