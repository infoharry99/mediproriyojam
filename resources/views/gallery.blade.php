@extends('layouts.app')

@section('title','Gallery')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<section class="min-vh-100 py-5" style="background:#FFF5F6;">

    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-danger mb-3" style="font-size:2.5rem;">
                Our Gallery
            </h2>

            <p class="text-muted mx-auto" style="max-width:600px;">
                Moments, Memories & Milestones
            </p>

            <div class="mx-auto mt-3 rounded"
                 style="width:80px; height:4px; background:#D62828;">
            </div>
        </div>

       <div class="row g-4">

    @forelse($galleries as $gallery)

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">

        <div class="gallery-card position-relative overflow-hidden rounded-4 shadow bg-white">

            <img src="{{ asset($gallery->image) }}"
                 alt="{{ $gallery->title ?? 'Gallery Image' }}"
                 class="img-fluid w-100 gallery-img">

            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                @if($gallery->title)
                    <h6 class="text-white">{{ $gallery->title }}</h6>
                @endif
            </div>

        </div>

    </div>

    @empty

    <div class="col-12 text-center">
        <p>No gallery images found.</p>
    </div>

    @endforelse

</div>

    </div>

</section>


<!-- Custom Hover Effects -->
<style>
.gallery-card {
    height: 230px;
}

.gallery-card img {
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}
</style>

@endsection