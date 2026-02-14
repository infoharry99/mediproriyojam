@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Courses</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD COURSE --}}
    <form method="POST"
          action="{{ route('admin.courses.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" name="title" class="form-control" placeholder="Course Title" required>
            </div>

            <div class="col-md-2">
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>

            <div class="col-md-2">
                <input type="number" name="original_price" class="form-control" placeholder="Original Price">
            </div>

            <div class="col-md-2">
                <input type="number" name="discounted_price" class="form-control" placeholder="Discounted Price" required>
            </div>

            <div class="col-md-3">
                <input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-3">
                <input type="file" name="instructor_image" class="form-control">
            </div>

            <div class="col-md-3">
                <input type="text" name="total_duration" class="form-control" placeholder="Duration (e.g. 70h 45m)">
            </div>

            <div class="col-md-3">
                <input type="number" name="total_lessons" class="form-control" placeholder="Lessons">
            </div>
        </div>

        <button class="btn btn-primary mb-4">Add Course</button>
    </form>

    {{-- COURSE LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Course</th>
                <th>Price</th>
                <th>Status</th>
                <th width="220">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    <strong>{{ $course->title }}</strong><br>
                    <small>{{ $course->instructor_name }}</small>
                </td>

                <td>
                    ₹{{ $course->discounted_price }}
                </td>

                <td>{{ ucfirst($course->status) }}</td>

                <td>
                    {{-- Toggle Status --}}
                    <form method="POST"
                          action="{{ route('admin.courses.update', $course->id) }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="title" value="{{ $course->title }}">
                        <input type="hidden" name="instructor_name" value="{{ $course->instructor_name }}">
                        <input type="hidden" name="discounted_price" value="{{ $course->discounted_price }}">
                        <input type="hidden" name="status"
                               value="{{ $course->status == 'active' ? 'inactive' : 'active' }}">

                        <button class="btn btn-sm btn-warning">
                            {{ $course->status == 'active' ? 'Deactivate' : 'Activate' }}
                        </button>
                    </form>

                    {{-- Delete --}}
                    <form method="POST"
                          action="{{ route('admin.courses.destroy', $course->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this course?')">
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
