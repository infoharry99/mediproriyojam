@extends('layouts.app')

@section('title','Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<main class="main">

<!-- HERO SECTION -->
<section class="py-5" style="background:#FFF5F6;">
    <div class="container">

        <div class="text-center mb-4">
            <h3 class="fw-medium" style="font-size:30px;">
    {{ $post->title }}
</h3>
        </div>

        <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="height:480px;">

            <!-- Background -->
           <img src="{{ asset($post->featured_image ?? 'assets/img/bg/innerblog.png') }}"
     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
     alt="{{ $post->title }}">

            <!-- Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background:linear-gradient(to right, rgba(10,42,90,0.95), rgba(10,42,90,0.7), transparent);">
            </div>

            <!-- Content -->
            <div class="position-absolute bottom-0 start-0 p-4 p-md-5 text-white" style="max-width:600px;">

                <span class="badge bg-primary mb-3">NEET</span>

                <h1 class="fw-bold mb-3">
                   {{ $post->title }}
                </h1>

              <small class="opacity-75">
    👤 {{ $post->author_name }} •
    {{ \Carbon\Carbon::parse($post->publish_date)->format('F d, Y') }}
</small>

            </div>

        </div>
    </div>
</section>


<!-- CONTENT SECTION -->
<section class="py-5" style="background:#FFF5F6;">
    <div class="container">

        <div class="row mb-5">

            <!-- Table of Contents -->
            <div class="col-lg-4 mb-4">
                <div class="bg-white rounded-4 shadow-sm p-4">
                    <h5 class="fw-semibold mb-3">Table of Contents</h5>
                    <ul class="list-unstyled fs-5">
                        <li class="text-danger fw-medium">Introduction</li>
                        <li class="text-muted">The Skeuomorphic Era</li>
                        <li class="text-muted">Flat Design Revolution</li>
                        <li class="text-muted">Material Design</li>
                        <li class="text-muted">Rise of Neumorphism</li>
                        <li class="text-muted">Future Trends</li>
                    </ul>
                </div>
            </div>

            <!-- Text -->
            <div class="col-lg-8 fs-5 text-muted">
    {!! $post->short_description !!}
    {!! $post->content !!}
</div>

        </div>


        <!-- Skeuomorphic -->
        <!-- <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="text-danger fw-semibold mb-3">
                    The Skeuomorphic Era
                </h2>
                <p class="fs-5 text-muted">
                    Skeuomorphic design dominated the early years...
                </p>
            </div>

            <div class="col-lg-6">
                <div class="bg-secondary rounded-4" style="height:220px;"></div>
            </div>
        </div> -->

    </div>
</section>

<style>
.blog-content h3 {
    margin-top: 30px;
    font-weight: 700;
}

.blog-content h4 {
    margin-top: 25px;
    font-weight: 600;
}

.blog-content ul {
    padding-left: 20px;
    margin-bottom: 20px;
}

.blog-content li {
    margin-bottom: 8px;
}

.blog-content p {
    margin-bottom: 15px;
    line-height: 1.7;
}
</style>
<!-- VENN DIAGRAM SECTION -->
<!-- <section class="py-5" style="background:#FFF5F6;">
    <div class="container text-center position-relative" style="height:420px; max-width:800px;">

        <div class="position-absolute top-50 start-50 translate-middle"
             style="transform:translate(-120%, -50%);
                    width:350px;height:350px;
                    background:#FF9A9A;border-radius:50%;
                    color:white; padding:60px; text-align:left;">
            <h6 class="fw-semibold mb-3">Advantages</h6>
            <ul>
                <li>Reduced visual cues</li>
                <li>Potential usability issues</li>
                <li>Limited depth perception</li>
            </ul>
        </div>

        <div class="position-absolute top-50 start-50 translate-middle"
             style="transform:translate(20%, -50%);
                    width:350px;height:350px;
                    background:#E53939;border-radius:50%;
                    color:white; padding:60px; text-align:left;">
            <h6 class="fw-semibold mb-3">Challenges</h6>
            <ul>
                <li>Reduced visual cues</li>
                <li>Potential usability issues</li>
                <li>Limited depth perception</li>
            </ul>
        </div>

    </div>
</section> -->


<!-- MATERIAL DESIGN -->
<section class="py-5 text-center" style="background:#FFF5F6;">
    <div class="container">

        <h2 class="fw-semibold mb-3">Material Design: Finding Balance</h2>

        <p class="text-muted mx-auto mb-5" style="max-width:700px;">
            Google’s Material Design emerged as a comprehensive design system...
        </p>

        <div class="row justify-content-center g-4">

            <div class="col-md-3">
                <div class="border rounded-4 p-4 shadow-sm">
                    <h6 class="text-danger fw-semibold">Physical Properties</h6>
                    <p class="small text-muted">Surfaces and edges provide meaningful interaction cues</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="border rounded-4 p-4 shadow-sm">
                    <h6 class="text-danger fw-semibold">Bold Graphics</h6>
                    <p class="small text-muted">Deliberate color choices and white space</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="border rounded-4 p-4 shadow-sm">
                    <h6 class="text-danger fw-semibold">Meaningful Motion</h6>
                    <p class="small text-muted">Animation reinforces user actions</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- COMMUNITY FEEDBACK -->
<section class="py-5" style="background:#FFF5F6;">
    <div class="container text-center">

        <h4 class="mb-4">Community Feedback</h4>

        <div class="position-relative">

            <!-- Slider -->
            <div id="feedbackSlider"
                 class="d-flex gap-4 overflow-auto pb-4"
                 style="scroll-behavior:smooth;">

                @foreach($testimonials as $testimonial)
                <div class="p-4 rounded-4 shadow position-relative testimonial-card"
                     style="min-width:280px;
                            background:linear-gradient(to bottom,#FFD7D7,#FFF5F6);">

                    <!-- Quote -->
                    <!-- <div class="display-6 mb-2">“</div> -->

                    <!-- Message -->
                  <p class="small text-muted testimonial-message">
                   {{ $testimonial->message }}
                       </p>

                    <!-- Rating -->
                    <div class="mb-3 text-warning">
                        @for($i=1;$i<=5;$i++)
                            @if($i <= $testimonial->rating)
                                <i class="bi bi-star-fill"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                    </div>

                    <!-- Bottom Profile Section -->
                    <div class="d-flex align-items-center gap-2 position-absolute"
                         style="bottom:15px; left:15px; ">

                        <img src="{{ asset($testimonial->image ?? 'assets/img/profile.png') }}"
                             style="width:50px;height:50px;object-fit:cover;"
                             class="rounded-circle border"
                             alt="{{ $testimonial->name }}">

                        <div class="text-start">
                            <h6 class="mb-0 small fw-semibold">
                                {{ $testimonial->name }}
                            </h6>
                            <small class="text-muted">
                                {{ $testimonial->designation }}
                            </small>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>

            <!-- Buttons -->
            <div class="mt-3">
                <button onclick="slideLeft()" class="btn btn-outline-secondary rounded-circle me-2">‹</button>
                <button onclick="slideRight()" class="btn btn-outline-secondary rounded-circle">›</button>
            </div>

        </div>

    </div>
</section>

<style>
.testimonial-card {
    min-width: 280px;
    min-height: 250px;
    background: linear-gradient(to bottom,#FFD7D7,#FFF5F6);
    padding-bottom: 90px; /* space for bottom profile */
}

.testimonial-message {
    margin-bottom: 20px;
}
</style>
<script>
const slider = document.getElementById("feedbackSlider");

function slideLeft(){
    slider.scrollBy({left:-280,behavior:'smooth'});
}
function slideRight(){
    slider.scrollBy({left:280,behavior:'smooth'});
}
</script>

<style>
.object-fit-cover{
    object-fit:cover;
}
#feedbackSlider::-webkit-scrollbar{
    display:none;
}
#feedbackSlider{
    -ms-overflow-style:none;
    scrollbar-width:none;
}
</style>

</main>

@endsection