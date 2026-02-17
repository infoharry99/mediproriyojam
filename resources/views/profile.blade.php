@extends('layouts.app')

@section('title','Profile')

@section('content')

<section class="py-40 bg-[#FFF5F6]">

  <div class="max-w-4xl mx-auto w-[90%]">

    <div class="bg-white rounded-2xl shadow-xl p-8">

      <!-- Profile Header -->
      <div class="flex items-center gap-6 mb-8">

        <img src="/assets/img/profile.png"
             class="w-24 h-24 rounded-full object-cover border"
             alt="User">

        <div>
          <h3 class="text-xl font-semibold">
            Mohit Rana
          </h3>
          <p class="text-sm text-gray-500">
            mohit@gmail.com
          </p>
        </div>

      </div>


      <!-- Info -->
      <div class="grid md:grid-cols-2 gap-6">

        <div>
          <label class="text-sm text-gray-600">Full Name</label>
          <input type="text"
                 value="Mohit Rana"
                 class="w-full mt-1 border rounded-md px-3 py-2">
        </div>

        <div>
          <label class="text-sm text-gray-600">Email</label>
          <input type="email"
                 value="mohit@gmail.com"
                 class="w-full mt-1 border rounded-md px-3 py-2">
        </div>

        <div>
          <label class="text-sm text-gray-600">Phone</label>
          <input type="text"
                 value="9876543210"
                 class="w-full mt-1 border rounded-md px-3 py-2">
        </div>

        <div>
          <label class="text-sm text-gray-600">City</label>
          <input type="text"
                 value="Nagpur"
                 class="w-full mt-1 border rounded-md px-3 py-2">
        </div>

      </div>


      <!-- Buttons -->
      <div class="flex gap-4 mt-8">

        <button
          class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700">
          Update
        </button>

        <button
          class="border border-red-600 text-red-600 px-6 py-2 rounded-md hover:bg-red-50">
          Logout
        </button>

      </div>

    </div>

  </div>

</section>

@endsection
