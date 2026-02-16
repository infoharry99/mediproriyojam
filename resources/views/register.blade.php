@extends('layouts.app')

@section('title','Register')

@section('content')

<section class="min-h-screen py-40 bg-[#FFF5F6] flex items-center justify-center">

  <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-xl">

    <h2 class="text-2xl font-bold text-center text-red-600 mb-6">
      Register
    </h2>

    <form  action="#" class="space-y-4">


      <!-- Name -->
      <div>
        <label class="text-sm text-gray-600">Full Name</label>
        <input type="text"
               class="w-full mt-1 border rounded-md px-3 py-2">
      </div>

      <!-- Email -->
      <div>
        <label class="text-sm text-gray-600">Email</label>
        <input type="email"
               class="w-full mt-1 border rounded-md px-3 py-2">
      </div>

      <!-- Phone -->
      <div>
        <label class="text-sm text-gray-600">Phone</label>
        <input type="text"
               class="w-full mt-1 border rounded-md px-3 py-2">
      </div>

      <!-- Password -->
      <div>
        <label class="text-sm text-gray-600">Password</label>
        <input type="password"
               class="w-full mt-1 border rounded-md px-3 py-2">
      </div>

      <!-- Confirm -->
      <div>
        <label class="text-sm text-gray-600">Confirm Password</label>
        <input type="password"
               class="w-full mt-1 border rounded-md px-3 py-2">
      </div>

      <!-- Button -->
      <button
        class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700">
        Register
      </button>

    </form>

    <p class="text-sm text-center mt-4">
      Already have account?
      <a href="/login" class="text-red-600 font-medium">Login</a>
    </p>

  </div>

</section>

@endsection
