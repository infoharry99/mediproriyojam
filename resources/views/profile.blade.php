@extends('layouts.app')

@section('title','Profile')

@section('content')

<section class="py-5" style="background:#FFF5F6; min-height:100vh;">

    <div class="container" style="max-width:900px;">

        <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">

            <!-- Profile Header -->
            <div class="d-flex align-items-center gap-4 mb-4">

                <img src="/assets/img/profile.png"
                     class="rounded-circle border"
                     style="width:100px; height:100px; object-fit:cover;"
                     alt="User">

                <div>
                    <h4 class="fw-semibold mb-1">
                        Mohit Rana
                    </h4>
                    <p class="text-muted small mb-0">
                        mohit@gmail.com
                    </p>
                </div>

            </div>

            <!-- Form -->
            <form>

                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="form-label text-muted small">
                            Full Name
                        </label>
                        <input type="text"
                               value="Mohit Rana"
                               class="form-control rounded-3">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label text-muted small">
                            Email
                        </label>
                        <input type="email"
                               value="mohit@gmail.com"
                               class="form-control rounded-3">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label text-muted small">
                            Phone
                        </label>
                        <input type="text"
                               value="9876543210"
                               class="form-control rounded-3">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label text-muted small">
                            City
                        </label>
                        <input type="text"
                               value="Nagpur"
                               class="form-control rounded-3">
                    </div>

                </div>

                <!-- Buttons -->
                <div class="mt-4 d-flex gap-3">

                    <button type="submit"
                            class="btn btn-danger px-4 rounded-3">
                        Update
                    </button>

                    <button type="button"
                            class="btn btn-outline-danger px-4 rounded-3">
                        Logout
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>

@endsection