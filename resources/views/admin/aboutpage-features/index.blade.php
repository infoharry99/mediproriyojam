@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">About Features</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD FEATURE --}}
    <form method="POST"
      action="{{ route('admin.about.features.store') }}"
      enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-2">
                <input type="file"
                    name="icon"
                    class="form-control">
            </div>

            <div class="col-md-3">
                <input type="text"
                       name="title"
                       class="form-control"
                       placeholder="Title">
            </div>

            <div class="col-md-4">
                <input type="text"
                       name="description"
                       class="form-control"
                       placeholder="Description">
            </div>

            <div class="col-md-1">
                <input type="number"
                       name="sort_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    Add Feature
                </button>
            </div>
        </div>
    </form>

    {{-- LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>
                <th>Order</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($features as $feature)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($feature->icon)
                        <img src="{{ asset($feature->icon) }}" width="40">
                    @endif
                </td>

                <td>{{ $feature->title }}</td>
                <td>{{ $feature->description }}</td>
                <td>{{ $feature->sort_order }}</td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                        action="{{ route('admin.about.features.update', $feature->id) }}"
                        enctype="multipart/form-data"
                        class="mb-2">
                        @csrf
                        @method('PUT')

                       @if($feature->icon)
                            <img src="{{ asset($feature->icon) }}" width="40">
                        @endif

                        <input type="file" name="icon" class="form-control mb-1">
                        <input type="text" name="title" value="{{ $feature->title }}" class="form-control mb-1">
                        <input type="text" name="description" value="{{ $feature->description }}" class="form-control mb-1">
                        <input type="number" name="sort_order" value="{{ $feature->sort_order }}" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.about.features.destroy', $feature->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete feature?')">
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