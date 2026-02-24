@extends('layouts.app')

@section('title','Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<main>

<!-- HERO SECTION -->
<section class="position-relative w-100">

    <img src="/assets/img/blog/Rectangle 4316.png"
         class="w-100"
         style="height:400px; object-fit:cover;"
         alt="Hero">

    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background:rgba(0,0,0,0.3);"></div>

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="text-white fw-bold display-4">Blog</h1>
    </div>

</section>


<!-- BLOG GRID SECTION -->
<section class="py-5" style="background:#FFF5F6;">
<div class="container">

<div class="row g-4">

<!-- LEFT BIG CARD -->
@if($featuredPost)
<div class="col-lg-8">
    <div class="position-relative rounded-4 overflow-hidden shadow">

        <img src="{{ asset($featuredPost->featured_image ?? 'assets/img/blog/blogimg.png') }}"
             class="w-100"
             style="height:420px; object-fit:cover;"
             alt="{{ $featuredPost->title }}">

        <div class="position-absolute bottom-0 p-4 text-white">
            <small>
                {{ \Carbon\Carbon::parse($featuredPost->publish_date)->format('M d, Y') }}
                • {{ $featuredPost->category }}
            </small>

            <h5 class="fw-semibold mt-2">
                <a href="{{ route('blog.show', $featuredPost->slug) }}"
                   class="text-white text-decoration-none">
                    {{ $featuredPost->title }}
                </a>
            </h5>
        </div>

    </div>
</div>
@endif


<!-- RIGHT CARD -->
<div class="col-lg-4">
<div class="position-relative rounded-4 overflow-hidden shadow">

    <img src="/assets/img/blog/blogimg.png"
         class="w-100"
         style="height:420px; object-fit:cover;"
         alt="Blog">

    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background:linear-gradient(to top, rgba(0,0,0,.8), rgba(0,0,0,.4), transparent);"></div>

    <button class="position-absolute top-50 end-0 translate-middle-y me-3 btn btn-light rounded-circle shadow"
            style="width:40px;height:40px;">
        ›
    </button>

    <div class="position-absolute bottom-0 p-4 text-white">
        <small>Apr. 14th, 2025 • Technology</small>
        <h6 class="fw-semibold mt-2">Lack of NCERT Focus</h6>
    </div>

</div>
</div>


<!-- SMALL CARDS -->
<div class="col-12 mt-4">
<div class="row g-4">

@foreach($posts as $post)
<div class="col-md-4">

<div class="rounded-4 shadow text-white"
     style="background:linear-gradient(to bottom,#8E3030,#B02828); overflow:hidden;">

    <img src="{{ asset($post->featured_image ?? 'assets/img/blog/blogimg.png') }}"
         class="w-100"
         style="height:240px; object-fit:cover;"
         alt="{{ $post->title }}">

    <div class="p-4">

        <div class="d-flex align-items-center gap-3 small mb-3">

            <div class="text-center border border-light px-3 py-1 rounded"
                 style="background:rgba(0,0,0,.3); margin-top:-40px;">
                <div class="fw-bold">
                    {{ \Carbon\Carbon::parse($post->publish_date)->format('d') }}
                </div>
                <div>
                    {{ \Carbon\Carbon::parse($post->publish_date)->format('M') }}
                </div>
            </div>

            <span>{{ $post->author_name }}</span>
            <span>{{ $post->category }}</span>

        </div>

        <h6 class="fw-semibold mb-3">
            {{ $post->title }}
        </h6>

        <a href="{{ route('blog.show', $post->slug) }}"
           class="btn btn-outline-light btn-sm rounded-pill">
            Read More ›
        </a>

    </div>

</div>
</div>
@endforeach

</div>
</div>

</div>
</div>
</section>



<!-- BLOG CARDS SECTION -->
<section class="pb-5" style="background:#FFF5F6;">
<div class="container">



<!-- PAGINATION -->
<div class="d-flex justify-content-center mt-5">
    {{ $posts->links() }}
</div>

</div>
</section>

</main>

@endsection