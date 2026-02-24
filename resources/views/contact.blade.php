@extends('layouts.app')

@section('title','Home')

@section('content')

<main>

<!-- ================= ENQUIRY FORM SECTION ================= -->
<section class="py-5" style="background:#FFF5F6;">

    <div class="text-center mb-5 mt-5 pt-5">
        <h3 class="d-inline-block px-4 py-2 border border-dark rounded-pill fw-medium">
            Enquiry form with lead
        </h3>
    </div>

    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row align-items-center g-5">

            <!-- LEFT FORM CARD -->
            <div class="col-md-6">

                <div class="bg-white rounded-4 shadow p-4 p-lg-5 h-100">

                    <h1 class="text-danger fw-bold mb-4">
                        Admission Enquiry Form
                    </h1>

                    <form action="{{ route('admission.enquiry.store') }}" method="POST">
                    @csrf

                        <!-- Full Name -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                Full Name
                            </label>

                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" name="first_name" placeholder="First" class="form-control">
                                </div>
                                <div class="col-6">
                                   <input type="text" name="last_name" placeholder="Last" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                Phone number
                            </label>
                            <input type="text" name="phone_number" placeholder="Phone number" class="form-control">
                        </div>

                        <!-- Course -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                School
                            </label>
                            <select class="form-select" name="course">
                                <option selected>Choose course</option>
                                <option>NEET</option>
                                <option>Medical</option>
                            </select>
                        </div>

                        <!-- City -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                City
                            </label>
                            <input type="text" name="city" placeholder="City" class="form-control">
                        </div>

                        <!-- Current studying -->
                        <div class="mb-4">
                            <label class="form-label text-muted small">
                                Current studying
                            </label>
                            <textarea rows="4" name="query" placeholder="Current studying" class="form-control"></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit"
                                    class="btn btn-danger px-4 py-2">
                                Submit →
                            </button>
                        </div>

                    </form>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-md-6">
                <div class="rounded-4 overflow-hidden shadow">
                    <img src="/assets/img/education/formImage.png"
                         class="img-fluid w-100"
                         alt="Doctors">
                </div>
            </div>

        </div>

    </div>

</section>


<!-- ================= DOWNLOAD APP SECTION ================= -->
<section class="py-5" style="background:#FFF5F6;">

    <div class="container position-relative">

        <div class="rounded-5 p-5 position-relative"
             style="background:#FFCECE;">

            <h2 class="display-5 fw-medium mb-4">
                Download our app
            </h2>

            <!-- QR Codes -->
            <div class="d-flex gap-4 mb-4">

                <div class="bg-white p-3 rounded-4 shadow">
                    <img src="/assets/icons/barcode.png"
                         class="img-fluid"
                         style="width:130px;"
                         alt="">
                </div>

                <div class="bg-white p-3 rounded-4 shadow">
                    <img src="/assets/icons/barcode.png"
                         class="img-fluid"
                         style="width:130px;"
                         alt="">
                </div>

            </div>

            <!-- Store Buttons -->
            <div>
                <img src="/assets/img/education/PhotoshopExtension_Image (3) 1.png"
                     class="img-fluid"
                     style="height:90px;"
                     alt="">
            </div>

        </div>

        <!-- Floating iPhone -->
        <div class="position-absolute bottom-0 end-0 me-5 d-none d-md-block">
            <img src="/assets/img/education/iphoneMask group (3).png"
                 class="img-fluid"
                 style="max-height:450px;"
                 alt="App Preview">
        </div>

    </div>

</section>

</main>

@endsection