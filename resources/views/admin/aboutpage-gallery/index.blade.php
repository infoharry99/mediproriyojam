@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Gallery</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD --}}
    <form method="POST"
          action="{{ route('admin.about.gallery.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="file"
                       name="image"
                       class="form-control"
                       required>
            </div>

            {{-- <div class="col-md-3">
                <input type="text"
                       name="title"
                       class="form-control"
                       placeholder="Title">
            </div> --}}

            <div class="col-md-2">
                <input type="number"
                       name="sort_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-3">
                <button class="btn btn-primary w-100">
                    Add Image
                </button>
            </div>
        </div>
    </form>

    {{-- LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                {{-- <th>Title</th> --}}
                <th>Order</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    <img src="{{ asset($gallery->image) }}"
                         width="100"
                         class="rounded">
                </td>

                {{-- <td>{{ $gallery->title }}</td> --}}
                <td>{{ $gallery->sort_order }}</td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.about.gallery.update', $gallery->id) }}"
                          enctype="multipart/form-data"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="file" name="image" class="form-control mb-1">
                        {{-- <input type="text" name="title" value="{{ $gallery->title }}" class="form-control mb-1"> --}}
                        <input type="number" name="sort_order" value="{{ $gallery->sort_order }}" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.about.gallery.destroy', $gallery->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete image?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection