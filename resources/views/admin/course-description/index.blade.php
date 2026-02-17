@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Course Description</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.course.description.save') }}">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $description->title ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Short Label</label>
            <input type="text"
                   name="short_label"
                   class="form-control"
                   value="{{ $description->short_label ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="6">{{ $description->description ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status"
                    class="form-control">
                <option value="active"
                    {{ isset($description) && $description->status=='active' ? 'selected' : '' }}>
                    Active
                </option>
                <option value="inactive"
                    {{ isset($description) && $description->status=='inactive' ? 'selected' : '' }}>
                    Inactive
                </option>
            </select>
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>
@endsection
