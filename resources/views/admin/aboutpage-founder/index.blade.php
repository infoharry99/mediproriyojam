@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Founder Section</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST"
          action="{{ route('admin.about.founder.save') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Content</label>
            <textarea
            id="content"
             name="content"
                      class="form-control"
                      rows="6">{{ $founder->content ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $founder->name ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <input type="text"
                   name="role"
                   class="form-control"
                   value="{{ $founder->role ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Founder Image</label>
            <input type="file"
                   name="image"
                   class="form-control">

            @if(!empty($founder->image))
                <img src="{{ asset($founder->image) }}"
                     width="200"
                     class="mt-2 rounded">
            @endif
        </div>

        <div class="mb-3">
            <label>Avatar Image</label>
            <input type="file"
                   name="avatar"
                   class="form-control">

            @if(!empty($founder->avatar))
                <img src="{{ asset($founder->avatar) }}"
                     width="80"
                     class="mt-2 rounded-circle">
            @endif
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');
</script>
@endsection