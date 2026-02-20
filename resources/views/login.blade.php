@extends('layouts.app')

@section('title','Login')

@section('content')

<section class="min-vh-100 d-flex align-items-center justify-content-center"
         style="background:#FFF5F6;">

    <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5"
         style="max-width:450px; width:100%;">

        <h2 class="text-center text-danger fw-bold mb-4">
            Login
        </h2>

        <form action="#">

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label text-muted small">
                    Email
                </label>
                <input type="email"
                       class="form-control rounded-3">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label text-muted small">
                    Password
                </label>
                <input type="password"
                       class="form-control rounded-3">
            </div>

            <!-- Button -->
            <button type="submit"
                    class="btn btn-danger w-100 rounded-3 py-2">
                Login
            </button>

        </form>

        <p class="text-center small mt-4 mb-0">
            Don’t have an account?
            <a href="/register" class="text-danger fw-semibold text-decoration-none">
                Register
            </a>
        </p>

    </div>

</section>

@endsection