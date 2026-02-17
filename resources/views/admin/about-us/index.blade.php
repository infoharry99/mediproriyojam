@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">About Us Section</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.about.save') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $about->title ?? '' }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="4">{{ $about->description ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Video (Max 10MB)</label>
            <input type="file"
                   name="video"
                   class="form-control"
                   accept="video/mp4,video/quicktime">
        </div>

        @if(!empty($about->video_file))
            <div class="mb-3">
                <label class="form-label">Current Video</label><br>
                <video width="320" controls>
                    <source src="{{ asset($about->video_file) }}" type="video/mp4">
                </video>
            </div>
        @endif

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>
@endsection
