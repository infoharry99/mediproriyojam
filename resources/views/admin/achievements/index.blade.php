@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Achievements</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD ACHIEVEMENT --}}
    <form method="POST"
          action="{{ route('admin.achievements.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-2">
                <input type="text" name="title" class="form-control" placeholder="Title (Top 01)">
            </div>

            <div class="col-md-2">
                <input type="number" name="year" class="form-control" placeholder="Year">
            </div>

            <div class="col-md-3">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>

            <div class="col-md-1">
                <input type="number" name="display_order" class="form-control" placeholder="Order">
            </div>

            <div class="col-md-2">
                <input type="file" name="badge_image" class="form-control">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Add</button>
            </div>
        </div>
    </form>

    {{-- LIST ACHIEVEMENTS --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Badge</th>
                <th>Title</th>
                <th>Year</th>
                <th>Order</th>
                <th>Status</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($achievements as $achievement)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($achievement->badge_image)
                        <img src="{{ asset($achievement->badge_image) }}"
                             width="60"
                             class="rounded">
                    @endif
                </td>

                <td>{{ $achievement->title }}</td>
                <td>{{ $achievement->year }}</td>
                <td>{{ $achievement->display_order }}</td>

                <td>
                    <span class="badge {{ $achievement->status=='active'?'bg-success':'bg-secondary' }}">
                        {{ ucfirst($achievement->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.achievements.update', $achievement->id) }}"
                          enctype="multipart/form-data"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="title" value="{{ $achievement->title }}" class="form-control mb-1">
                        <input type="number" name="year" value="{{ $achievement->year }}" class="form-control mb-1">
                        <input type="text" name="description" value="{{ $achievement->description }}" class="form-control mb-1">
                        <input type="number" name="display_order" value="{{ $achievement->display_order }}" class="form-control mb-1">

                        <select name="status" class="form-control mb-1">
                            <option value="active" {{ $achievement->status=='active'?'selected':'' }}>Active</option>
                            <option value="inactive" {{ $achievement->status=='inactive'?'selected':'' }}>Inactive</option>
                        </select>

                        <input type="file" name="badge_image" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.achievements.destroy', $achievement->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this achievement?')">
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
