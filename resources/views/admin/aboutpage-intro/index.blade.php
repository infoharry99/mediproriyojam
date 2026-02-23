@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">About Page Intro</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.about.intro.save') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $intro->title ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea name="content"
                      class="form-control"
                      rows="6">{{ $intro->content ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file"
                   name="banner_image"
                   class="form-control">

            @if(!empty($intro->banner_image))
                <img src="{{ asset($intro->banner_image) }}"
                     width="200"
                     class="mt-2 rounded">
            @endif
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>
@endsection