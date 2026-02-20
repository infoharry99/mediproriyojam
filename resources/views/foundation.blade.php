@extends('layouts.app')

@section('title','Home')

@section('content')

<main>

<!-- HERO SECTION -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container" style="margin-top:120px;">
<div class="row g-5 align-items-start">

<!-- LEFT CONTENT -->
<div class="col-lg-8">

<!-- Video Box -->
<div class="position-relative rounded-4 overflow-hidden shadow">
<img src="/assets/img/blog/Rectangle 4316.png"
     class="img-fluid w-100"
     style="height:400px;object-fit:cover;" alt="Video">

<div class="position-absolute top-50 start-50 translate-middle">
<div class="bg-white rounded-circle shadow d-flex align-items-center justify-content-center"
     style="width:60px;height:60px;cursor:pointer;">
▶
</div>
</div>
</div>

<!-- Course Info -->
<div class="mt-5">

<p class="text-muted fs-5 mb-1">Class 11–12 NEET</p>

<h2 class="fw-bold mb-3" style="color:#CF242A;">
Foundation course
</h2>

<p class="text-muted mb-4">
Lorem Ipsum Is Simply Dummy Text Of The <br>
And Typesetting Industry.
</p>

<!-- Features -->
<div class="row g-4">

<div class="col-6 col-md-3 text-start">
<div class="border border-danger rounded-3 d-flex align-items-center justify-content-center mb-2"
     style="width:50px;height:50px;">
<img src="/assets/icons/Live Video On.png" width="24">
</div>
<p>LIVE <br>Interactive Class</p>
</div>

<div class="col-6 col-md-3 text-start">
<div class="border border-danger rounded-3 mb-2"
     style="width:50px;height:50px;"></div>
<p>Offline <br>Like Discipline</p>
</div>

<div class="col-6 col-md-3 text-start">
<div class="border border-danger rounded-3 mb-2"
     style="width:50px;height:50px;"></div>
<p>Hard Copy Books <br>Delivered To You</p>
</div>

<div class="col-6 col-md-3 text-start">
<div class="border border-danger rounded-3 mb-2"
     style="width:50px;height:50px;"></div>
<p>24×7 Live Video <br>Doubt Solving</p>
</div>

</div>
</div>
</div>


<!-- RIGHT FORM -->
<div class="col-lg-4">
<div class="bg-white shadow rounded-4 p-4">

<h4 class="fw-bold mb-4" style="color:#CF242A;">
Admission Enquiry Form
</h4>

<form class="row g-3">

<div class="col-6">
<label class="form-label small">First Name</label>
<input type="text" class="form-control" placeholder="Mohit">
</div>

<div class="col-6">
<label class="form-label small">Last Name</label>
<input type="text" class="form-control" placeholder="Rana">
</div>

<div class="col-12">
<label class="form-label small">Phone Number</label>
<input type="text" class="form-control" placeholder="Phone number">
</div>

<div class="col-12">
<label class="form-label small">Choose Course</label>
<select class="form-select">
<option>Choose course</option>
<option>NEET</option>
<option>Medical</option>
</select>
</div>

<div class="col-12">
<label class="form-label small">City</label>
<input type="text" class="form-control" placeholder="City">
</div>

<div class="col-12">
<label class="form-label small">Query</label>
<textarea rows="3" class="form-control" placeholder="Query"></textarea>
</div>

<div class="col-12">
<button type="submit" class="btn text-white px-4"
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
<span class="badge border border-secondary bg-white text-dark px-4 py-2">
Courses Description
</span>
</div>

<h2 class="fw-semibold mb-4">
Two-Year Integrated Classroom Programme
</h2>

<p class="text-muted">
Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry...
</p>

</div>
</section>



<!-- COURSE HIGHLIGHTS -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container">

<h4 class="text-center fw-semibold mb-5">
Course Highlights
</h4>

<div class="row g-4">

<div class="col-md-6">
<ul class="list-unstyled">
<li class="mb-3">✓ Complete Board + NEET Syllabus Coverage</li>
<li class="mb-3">✓ All India Rank Boosting Analysis</li>
<li class="mb-3">✓ Doubt Clearing Sessions</li>
<li class="mb-3">✓ Regular Performance Updates</li>
<li class="mb-3">✓ All India Test Series</li>
<li class="mb-3">✓ Systematic Testing</li>
</ul>
</div>

<div class="col-md-6">
<ul class="list-unstyled">
<li class="mb-3">✓ Planned Academic Year</li>
<li class="mb-3">✓ 90% Scholarship Through NACST</li>
<li class="mb-3">✓ Micro Level Analysis</li>
<li class="mb-3">✓ Review Classes</li>
<li class="mb-3">✓ Grand Success Package</li>
</ul>
</div>

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