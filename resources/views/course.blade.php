@extends('layouts.app')

@section('title','Home')

@section('content')

 <main class="main">

 <section class="py-10  bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%] mt-[120px]">

    <div class="grid lg:grid-cols-3 gap-10 items-start">


      <!-- LEFT CONTENT -->
      <div class="col-span-2">


        <!-- Video Box -->
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

          <img
            src="/assets/img/blog/Rectangle 4316.png"
            class="w-full h-[400px] object-cover"
            alt="Video">

          <!-- Play Button -->
          <div
            class="absolute inset-0 flex items-center justify-center">

            <div
              class="w-14 h-14 bg-white/90 rounded-full
                     flex items-center justify-center
                     shadow-lg cursor-pointer
                     hover:scale-110 transition">

              ▶

            </div>

          </div>

        </div>


        <!-- Course Info -->
        <div class="mt-10">

          <p class="text-lg text-gray-600 mb-1">
            Class 11–12 NEET
          </p>

          <h2 class="text-3xl font-bold text-red-600 mb-3">
            Foundation course
          </h2>

          <p class="text-gray-600 leading-relaxed mb-8">

            Lorem Ipsum Is Simply Dummy Text Of The  <br/>
            And Typesetting Industry.

          </p>


          <!-- Features -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">


            <!-- Feature -->
            <div class="flex flex-col items-left gap-2">

              <div
                class="w-12 h-12 border border-red-400
                       rounded-lg flex items-center justify-center">

                <img src="/assets/icons/Live Video On.png">

              </div>

              <p class="text-lg text-left ">
                LIVE  <br/>Interactive Class
              </p>

            </div>


            <div class="flex flex-col items-left gap-2">

              <div
                class="w-12 h-12 border border-red-400
                       rounded-lg flex items-center justify-center">

                

              </div>

              <p class="text-lg text-left">
                "Offline" <br/> Like Discipline
              </p>

            </div>


            <div class="flex flex-col items-left gap-2">

              <div
                class="w-12 h-12 border border-red-400
                       rounded-lg flex items-center justify-center">

                

              </div>

              <p class="text-lg text-left">
                Hard Copy Books <br/>
                 delivered to you
              </p>

            </div>


            <div class="flex flex-col items-left gap-2">

              <div
                class="w-12 h-12 border border-red-400
                       rounded-lg flex items-center justify-center">

                

              </div>

              <p class="text-lg text-left">
               24*7 Live Video <br/>Call Doubt Solving
              </p>

            </div>


          </div>

        </div>

      </div>


      <!-- RIGHT FORM -->
      <div>

        <div
          class="bg-white rounded-2xl shadow-lg p-8 max-w-md ml-auto">


          <h3 class="text-xl font-bold text-red-600 mb-6">
            Admission Enquiry Form
          </h3>


          <form class="space-y-4">


            <!-- Name -->
            <div>

              <label class="text-sm text-gray-600">
                Full Name
              </label>

              <div class="grid grid-cols-2 gap-3 mt-1">

                <input
                  type="text"
                  placeholder="Mohit"
                  class="w-full border rounded-md px-3 py-2 text-sm">

                <input
                  type="text"
                  placeholder="Rana"
                  class="w-full border rounded-md px-3 py-2 text-sm">

              </div>

            </div>


            <!-- Phone -->
            <div>

              <label class="text-sm text-gray-600">
                Phone number
              </label>

              <input
                type="text"
                placeholder="Phone number"
                class="w-full border rounded-md px-3 py-2 text-sm mt-1">

            </div>


            <!-- Course -->
            <div>

              <label class="text-sm text-gray-600">
                Choose course
              </label>

              <select
                class="w-full border rounded-md px-3 py-2 text-sm mt-1">

                <option>Choose course</option>
                <option>NEET</option>
                <option>Medical</option>

              </select>

            </div>


            <!-- City -->
            <div>

              <label class="text-sm text-gray-600">
                City
              </label>

              <input
                type="text"
                placeholder="City"
                class="w-full border rounded-md px-3 py-2 text-sm mt-1">

            </div>


            <!-- Query -->
            <div>

              <label class="text-sm text-gray-600">
                Query
              </label>

              <textarea
                rows="3"
                placeholder="Query"
                class="w-full border rounded-md px-3 py-2 text-sm mt-1"></textarea>

            </div>


            <!-- Submit -->
            <button
              type="submit"
              class="bg-red-600 text-white
                     px-6 py-2 rounded-md text-sm
                     hover:bg-red-700 transition
                     flex items-center gap-2">

              Submit →
            </button>


          </form>

        </div>

      </div>


    </div>

    <!-- SUBJECTS COVERED SECTION -->
<section class="mt-10 bg-[#FFD1D1]">

  <div
    class=" max-w-6xl mx-auto
           flex flex-col md:flex-row
           items-center justify-between
           gap-4 px-6 py-6
           rounded-xl">

    <!-- Left -->
    <div class="flex flex-wrap items-center gap-3">

      <span class="font-medium  text-lg text-gray-800">
        Subjects Covered :
      </span>

      <!-- Pills -->
      <span
        class="px-4 py-1 bg-white text-sm
               rounded-full shadow-sm">
        Physics
      </span>

      <span
        class="px-4 py-1 bg-white text-sm
               rounded-full shadow-sm">
        Biology
      </span>

      <span
        class="px-4 py-1 bg-white text-sm
               rounded-full shadow-sm">
        Chemistry
      </span>

    </div>


    <!-- Right Button -->
    <a
      href="#"
      class="bg-red-600 text-white
             px-6 py-2 rounded-md
             text-sm font-medium
             hover:bg-red-700 transition">

      Enroll now

    </a>

  </div>

</section>

  </div>

</section>

<!-- COURSE DESCRIPTION SECTION -->
<section class="py-10 bg-[#FFEAEA]">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%] text-center  mb-10">


    <!-- Badge -->
    <div class="flex justify-center mb-6">

      <span
        class="px-5 py-1.5 text-xs font-medium
               border border-gray-400
               rounded-full text-gray-700
               bg-white/40">

        Courses Description

      </span>

    </div>


    <!-- Title -->
    <h2
      class="text-3xl md:text-4xl text-left font-semibold text-gray-900 mb-6">

      Two-Year Integrated Classroom Programme

    </h2>


    <!-- Description -->
    <p
      class="text-gray-600 leading-relaxed text-sm text-left md:text-base">

      Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
      Lorem Ipsum Has Been The Industry’s Standard Dummy Text Ever Since The 1500s,
      When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type
      Specimen Book. It Has Survived Not Only Five Centuries, But Also The Leap Into
      Electronic Typesetting, Remaining Essentially Unchanged. It Was Popularised
      In The 1960s With The Release Of Letraset Sheets Containing Lorem Ipsum Passages,
      And More Recently With Desktop Publishing Software Like Aldus PageMaker
      Including Versions Of Lorem Ipsum.

    </p>


  </div>

</section>

<!-- COURSE HIGHLIGHTS SECTION -->
<section class="py-24 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%]">


    <!-- Heading With Lines -->
    <div class="flex items-center justify-center gap-6 mb-16">

      <span>
        <img src="/assets/icons/lineb1.png" alt="">

      </span>

      <h2 class="text-xl font-semibold">
        Course Highlights
      </h2>

      <span >
        <img src="/assets/icons/lineb.png" alt="">
      </span>

    </div>


    <!-- Content -->
    <div class="grid md:grid-cols-2 gap-10 text-lg">


      <!-- LEFT -->
      <ul class="space-y-5">

        <li class="flex items-start gap-3">
          <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>

          Complete Board + NEET Syllabus Coverage
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          All India Common Analysis For Rank Boosting
        </li>

        <li class="flex items-start gap-3">
            <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Doubt Clearing Sessions
        </li>

        <li class="flex items-start gap-3">
            <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Regular Updates About Student’s Performance And Attendance
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Know Your Potential At All India Level Through Narayana All-India Test Series
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Systematic And Regular Testing Systems
        </li>

      </ul>


      <!-- RIGHT -->
      <ul class="space-y-5">

        <li class="flex items-start gap-3">
          <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Well-Defined And Planned Academic Year
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Up To 90% Scholarship Through NACST
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Feedback And Micro Level Analysis
        </li>

        <li class="flex items-start gap-3">
        <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          Review Classes For The Entire Syllabus
        </li>

        <li class="flex items-start gap-3">
           <span
  class="flex items-center justify-center
         w-5 h-5 rounded-full
         bg-green-500 text-white
         text-xs mt-1 ">

  ✓

</span>
          All India Test Series + Grand Success Package
        </li>

      </ul>


    </div>

  </div>

</section>


<section class="py-10 bg-[#FFF5F6]">

  <div class="max-w-7xl mx-auto w-[90%] lg:w-[90%] bg-[#CF242A] py-10 text-white rounded-[20px]">


    <!-- Heading With Lines -->
    <div class="flex items-center justify-center gap-6">

      <span>
        <img src="/assets/icons/linew1.png" alt="">

      </span>

      <h2 class="text-xl font-semibold">
        Type of Tests
      </h2>

      <span >
        <img src="/assets/icons/linew.png" alt="">
      </span>

    </div>

     <div class="grid md:grid-cols-3 gap-y-20 gap-x-20 mt-10 text-center text-sm">


      <!-- Item -->
      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/calendar.jpeg"
          class="w-7 h-7"
          alt="">

        <p class="leading-tight">
          Weekly Test <br>
          (CPT - Common Practice Test)
        </p>

      </div>


      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/clipboard.jpeg"
          class="w-7 h-7"
          alt="">

        <p>
          Subjective Test
        </p>

      </div>


      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/book.jpeg"
          class="w-7 h-7"
          alt="">

        <p>
          All India Test Series
        </p>

      </div>


      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/refresh.jpeg"
          class="w-7 h-7"
          alt="">

        <p>
          Fortnightly Test
        </p>

      </div>


      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/list.jpeg"
          class="w-7 h-7"
          alt="">

        <p>
          Term Exams
        </p>

      </div>


      <div class="flex flex-col items-center gap-2">

        <img
          src="/assets/icons/trophy.jpeg"
          class="w-7 h-7"
          alt="">

        <p>
          Grand Test
        </p>

      </div>


    </div>
    </div>


</section>
  </main>

@endsection
