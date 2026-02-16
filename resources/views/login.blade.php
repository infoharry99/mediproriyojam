@extends('layouts.app')

@section('title','Login')

@section('content')

<section class="min-h-screen bg-[#FFF5F6] flex items-center justify-center">

  <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-xl">

    <h2 class="text-2xl font-bold text-center text-red-600 mb-6">
      Login
    </h2>

    <form  action="#" class="space-y-4">


      <!-- Email -->
      <div>
        <label class="text-sm text-gray-600">Email</label>
        <input type="email"
               class="w-full mt-1 border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-400">
      </div>

      <!-- Password -->
      <div>
        <label class="text-sm text-gray-600">Password</label>
        <input type="password"
               class="w-full mt-1 border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-400">
      </div>

      <!-- Button -->
      <button
        class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition">
        Login
      </button>

    </form>

    <p class="text-sm text-center mt-4">
      Don’t have an account?
      <a href="/register" class="text-red-600 font-medium">Register</a>
    </p>

  </div>

</section>

@endsection
