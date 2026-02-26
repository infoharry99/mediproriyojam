@extends('layouts.app')

@section('title','Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<main>

<!-- HERO SECTION -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container">
<div class="row g-5 align-items-start">

<!-- LEFT CONTENT -->
<div class="col-lg-8">

<!-- Video Box -->
<div class="position-relative rounded-4 overflow-hidden shadow">
<img src="/assets/img/blog/Rectangle 4316.png"
     class="img-fluid w-100"
     style="height:400px;object-fit:cover;" alt="Video">

<div class="position-absolute top-50 start-50 translate-middle">
<!-- <div class="bg-white rounded-circle shadow d-flex align-items-center justify-content-center"
     style="width:60px;height:60px;cursor:pointer;">

</div> -->
</div>
</div>

<!-- Course Info -->
<div class="mt-5">

<p class="text-muted fs-5 mb-1"> Class 11 - 12 NEET</p>

<h2 class="fw-bold mb-3" style="color:#CF242A;">
Platinum Batch (12th + NEET)
</h2>

<p class="text-muted mb-4">
Lorem Ipsum Is Simply Dummy Text Of The <br>
And Typesetting Industry.
</p>

<!-- Features -->
<div class="row g-4">


     <div class="col-6 col-md-3">
          <div class="border border-danger bg-white rounded-3 d-flex align-items-center justify-content-center mb-2"
               style="width:50px;height:50px;">
          <img src="/assets/dp.png" width="30">
          </div>
          <p class="mb-0">Classroom  <br>Teaching</p>
     </div>

     <div class="col-6 col-md-3">
          <div class="border border-danger bg-white rounded-3 d-flex align-items-center justify-content-center mb-2"

               style="width:50px;height:50px;">
               <img src="/assets/dp1.png" width="30">
          </div>

          <p class="mb-0">Doubt Clearing  <br>in Class</p>
     </div>

     <div class="col-6 col-md-3">
          <div class="border border-danger  bg-white rounded-3 d-flex align-items-center justify-content-center mb-2"

               style="width:50px;height:50px;">
               <img src="/assets/dp2.png" width="30">
          </div>

          <p class="mb-0">Small Batch Size</p>
     </div>

     <div class="col-6 col-md-3">
          <div class="border border-danger bg-white rounded-3 d-flex align-items-center justify-content-center mb-2"

               style="width:50px;height:50px;">
               <img src="/assets/dp3.png" width="30">
          </div>

          <p class="mb-0">Regular Test Series</p>
     </div>

</div>
</div>
</div>


<!-- RIGHT FORM -->
<div class="col-lg-4">
<div class="bg-white shadow rounded-4 p-4">

<h4 class="fw-bold mb-4" style="color:#CF242A;">
     @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
Admission Enquiry Form
</h4>


       <form class="row g-3" action="{{ route('admission.enquiry.store') }}" method="POST">
                    @csrf

<div class="col-6">
<label class="form-label small">First Name</label>
<input type="text" name="first_name" placeholder="First" class="form-control">

</div>

<div class="col-6">
<label class="form-label small">Last Name</label>
<input type="text" name="last_name" placeholder="Last" class="form-control">

</div>

<div class="col-12">
<label class="form-label small">Phone Number</label>
<input type="text" name="phone_number" placeholder="Phone number" class="form-control">

</div>

<div class="col-12">
 <label class="form-label text-muted small">
                                School
                            </label>
                            <select class="form-select" name="course">
<option>Choose course</option>
<option>NEET</option>
<option>Medical</option>
</select>
</div>

<div class="col-12">
<label class="form-label small">City</label>
<input type="text" name="city" placeholder="City" class="form-control">

</div>

<div class="col-12">
<label class="form-label small">Current studying</label>
<textarea rows="4" name="query" placeholder="Current studying" class="form-control"></textarea>

</div>

<div class="col-12">
<button  type="submit" class="btn text-white px-4"
        style="background:#CF242A;">
Submit →
</button>
</div>

</form>

</div>
</div>

</div>
</div>
</section>



<!-- SUBJECTS COVERED -->
<section class="py-4" style="background:#FFD1D1;">
<div class="container">
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between p-3 rounded-4">

<div class="d-flex flex-wrap align-items-center gap-3">
<span class="fw-semibold">Subjects Covered :</span>

<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Physics</span>
<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Biology</span>
<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Chemistry</span>
</div>

<a href="#" class="btn text-white mt-3 mt-md-0"
   style="background:#CF242A;">
Enroll Now
</a>

</div>
</div>
</section>



<!-- COURSE DESCRIPTION -->
<section class="py-5" style="background:#FFEAEA;">
<div class="container">

<div class="text-center mb-4">
<span class="badge border border-secondary bg-transparent text-dark px-4 py-2">
Courses Description
</span>
</div>

<h2 class="fw-semibold mb-4">
Two-Year Integrated Classroom Programme
</h2>

<p class="text-muted">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>

</div>
</section>



<!-- COURSE HIGHLIGHTS -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container">

<h5 class="text-center fw-semibold mb-5">
Course Highlights
</h5>

<div class="row g-5">

@php
$highlights = [
"Complete Board + NEET Syllabus Coverage",
"All India Common Analysis For Rank Boosting",
"Doubt Clearing Sessions",
"Regular Updates About Student’s Performance And Attendance",
"Systematic And Regular Testing Systems",
"Well-Defined And Planned Academic Year",
"Up To 90% Scholarship Through NACST",
"Feedback And Micro Level Analysis",
"Review Classes For The Entire Syllabus",
"All India Test Series + Grand Success Package"
];
@endphp

@foreach($highlights as $highlight)
<div class="col-md-6">
<div class="d-flex align-items-start gap-3">
<span class="badge bg-success rounded-circle p-2">✓</span>
<span>{{ $highlight }}</span>
</div>
</div>
@endforeach

</div>

</div>
</section>



<!-- TYPE OF TESTS -->
<section class="py-5">
<div class="container">

<div class="rounded-4 text-white p-5 text-center"
     style="background:#CF242A;">

<h4 class="fw-semibold mb-5">Type of Tests</h4>

<div class="row g-5">

<div class="col-md-4">
<img src="/assets/icons/Layer 2.png" width="40" class="mb-2">
<p>Weekly Test (CPT)</p>
</div>

<div class="col-md-4">
<img src="/assets/icons/Layer 3.png" width="40" class="mb-2">
<p>Subjective Test</p>
</div>

<div class="col-md-4">
<img src="/assets/icons/Layer 4.png" width="40" class="mb-2">
<p>All India Test Series</p>
</div>

<div class="col-md-4">
<img src="/assets/icons/Layer 5.png" width="40" class="mb-2">
<p>Fortnightly Test</p>
</div>

<div class="col-md-4">
<img src="/assets/icons/Layer 6.png" width="40" class="mb-2">
<p>Term Exams</p>
</div>

<div class="col-md-4">
<img src="/assets/icons/Layer 7.png" width="40" class="mb-2">
<p>Grand Test</p>
</div>

</div>
</div>

</div>
</section>

</main>

@endsection