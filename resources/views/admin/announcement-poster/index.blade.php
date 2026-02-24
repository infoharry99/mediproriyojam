@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Announcement Poster</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST"
          action="{{ route('admin.announcement.poster.save') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Upload Poster</label>
            <input type="file"
                   name="poster"
                   class="form-control">

            @if(!empty($poster->poster))
                <img src="{{ asset($poster->poster) }}"
                     width="250"
                     class="mt-2 rounded">
            @endif
        </div>

        <div class="mb-3">
            <label>
                <input type="checkbox"
                       name="is_active"
                       value="1"
                       {{ isset($poster) && $poster->is_active ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>
@endsection