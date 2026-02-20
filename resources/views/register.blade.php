@extends('layouts.app')

@section('title','Register')

@section('content')

<section class="min-vh-100 d-flex align-items-center justify-content-center"
         style="background:#FFF5F6; padding-top:120px; padding-bottom:120px;">

    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5"
         style="max-width:450px; width:100%;">

        <h2 class="text-center text-danger fw-bold mb-4">
            Register
        </h2>

        <form action="#">

            <!-- Full Name -->
            <div class="mb-3">
                <label class="form-label text-muted small">
                    Full Name
                </label>
                <input type="text"
                       class="form-control rounded-3">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label text-muted small">
                    Email
                </label>
                <input type="email"
                       class="form-control rounded-3">
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label class="form-label text-muted small">
                    Phone
                </label>
                <input type="text"
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

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label text-muted small">
                    Confirm Password
                </label>
                <input type="password"
                       class="form-control rounded-3">
            </div>

            <!-- Button -->
            <button type="submit"
                    class="btn btn-danger w-100 rounded-3 py-2">
                Register
            </button>

        </form>

        <p class="text-center small mt-4 mb-0">
            Already have an account?
            <a href="/login"
               class="text-danger fw-semibold text-decoration-none">
                Login
            </a>
        </p>

    </div>

</section>

@endsection