@extends('layouts.app')

@section('title','Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<main>

<!-- ================= HERO + FORM SECTION ================= -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container ">

<div class="row g-5">

<!-- LEFT CONTENT -->
<div class="col-lg-8">

<!-- Video Box -->
<div class="position-relative rounded-4 overflow-hidden shadow-lg mb-5">

<img src="/assets/img/blog/Rectangle 4316.png"
     class="w-100"
     style="height:400px; object-fit:cover;"
     alt="Video">

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center shadow"
         style="width:60px;height:60px; cursor:pointer;">
        
    </div>
</div>

</div>

<!-- Course Info -->
<p class="text-muted fs-5 mb-1"> Class 11 - 12 NEET</p>

<h2 class="text-danger fw-bold mb-3">
   Eklavya Batch (After 12th)
</h2>

<p class="text-muted mb-5">
    Lorem Ipsum Is Simply Dummy Text Of The <br>
    And Typesetting Industry.
</p>

<!-- Features -->
<div class="row g-4 text-start">

@php
$features = [
    "LIVE Interactive Class",
    '"Offline" Like Discipline',
    "Hard Copy Books delivered to you",
    "24*7 Live Video Call Doubt Solving"
];
@endphp

@foreach($features as $feature)
<div class="col-6 col-md-3">
    <div class="d-flex flex-column gap-2">
        <div class="border border-danger rounded d-flex align-items-center justify-content-center"
             style="width:50px;height:50px;">
        </div>
        <p class="mb-0">{{ $feature }}</p>
    </div>
</div>
@endforeach

</div>

</div>


<!-- RIGHT FORM -->
<div class="col-lg-4">

<div class="bg-white rounded-4 shadow-lg p-4">

<h5 class="fw-bold text-danger mb-4">
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    Admission Enquiry Form
</h5>

  <form action="{{ route('admission.enquiry.store') }}" method="POST">
                    @csrf

<div class="mb-3">
<label class="form-label small text-muted">Full Name</label>
<div class="row g-2">
<div class="col-6">
<input type="text" name="first_name" placeholder="First" class="form-control">

</div>
<div class="col-6">
<input type="text" name="last_name" placeholder="Last" class="form-control">

</div>
</div>
</div>

<div class="mb-3">
<label class="form-label small text-muted">Phone number</label>
<input type="text" name="phone_number" placeholder="Phone number" class="form-control">

</div>

<div class="mb-3">
<label class="form-label small text-muted">School</label>
<select class="form-select" name="course">
<option>Choose course</option>
<option>NEET</option>
<option>Medical</option>
</select>
</div>

<div class="mb-3">
<label class="form-label small text-muted">City</label>
<input type="text" name="city" placeholder="City" class="form-control">
</div>

<div class="mb-3">
<label class="form-label small text-muted">Current studying</label>
<textarea rows="4" name="query" placeholder="Current studying" class="form-control"></textarea>

</div>

<button type="submit" class="btn btn-danger w-100">
Submit →
</button>

</form>

</div>
</div>

</div>


<!-- SUBJECTS SECTION -->
<div class="bg-danger-subtle rounded-4 p-4 mt-5 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">

<div class="d-flex flex-wrap align-items-center gap-3">
<span class="fw-medium">Subjects Covered :</span>

<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Physics</span>
<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Biology</span>
<span class="badge bg-white text-dark rounded-pill px-3 py-2 shadow-sm">Chemistry</span>
</div>

<a href="#" class="btn btn-danger">
Enroll now
</a>

</div>

</div>
</section>


<!-- ================= COURSE DESCRIPTION ================= -->
<section class="py-5" style="background:#FFEAEA;">
<div class="container">

<div class="text-center mb-4">
<span class="badge bg-transparent text-dark border rounded-pill px-4 py-2">
Courses Description
</span>
</div>

<h3 class="fw-semibold mb-4">
Two-Year Integrated Classroom Programme
</h3>

<p class="text-muted">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>

</div>
</section>


<!-- ================= COURSE HIGHLIGHTS ================= -->
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


<!-- ================= TYPE OF TESTS ================= -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container">

<div class="bg-danger text-white rounded-4 p-5 text-center">

<h5 class="fw-semibold mb-5">
Type of Tests
</h5>

<div class="row g-5">

@php
$tests = [
"Weekly Test (CPT - Common Practice Test)",
"Subjective Test",
"All India Test Series",
"Fortnightly Test",
"Term Exams",
"Grand Test"
];
@endphp

@foreach($tests as $test)
<div class="col-md-4">
<div>
<img src="/assets/icons/Layer 2.png"
     style="width:40px;height:40px;"
     class="mb-3">
<p class="mb-0">{{ $test }}</p>
</div>
</div>
@endforeach

</div>

</div>

</div>
</section>

</main>

@endsection