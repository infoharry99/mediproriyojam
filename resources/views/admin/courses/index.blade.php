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

        <div class="row mb-3">
            <div class="col-md-12">
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
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
                <th>Actions</th>
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

                    {{-- UPDATE (VISIBLE FORM LIKE PREVIOUS CMS) --}}
                    <form method="POST"
                        action="{{ route('admin.courses.update', $course->id) }}"
                        enctype="multipart/form-data"
                        class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text"
                            name="title"
                            value="{{ $course->title }}"
                            class="form-control mb-1"
                            placeholder="Title">

                        <input type="text"
                            name="category"
                            value="{{ $course->category }}"
                            class="form-control mb-1"
                            placeholder="Category">

                        <input type="text"
                            name="instructor_name"
                            value="{{ $course->instructor_name }}"
                            class="form-control mb-1"
                            placeholder="Instructor">

                        <input type="number"
                            name="original_price"
                            value="{{ $course->original_price }}"
                            class="form-control mb-1"
                            placeholder="Original price">

                        <input type="number"
                            name="discounted_price"
                            value="{{ $course->discounted_price }}"
                            class="form-control mb-1"
                            placeholder="Discounted price">

                        <input type="file"
                            name="image"
                            class="form-control mb-1">

                        <input type="file"
                            name="instructor_image"
                            class="form-control mb-1">

                        <input type="text"
                            name="total_duration"
                            value="{{ $course->total_duration }}"
                            class="form-control mb-1"
                            placeholder="Duration">

                        <input type="number"
                            name="total_lessons"
                            value="{{ $course->total_lessons }}"
                            class="form-control mb-1"
                            placeholder="Lessons">

                        {{-- FIXED VARIABLE --}}
                        <textarea name="description"
                                class="form-control mb-1"
                                rows="3"
                                placeholder="Description">{{ $course->description }}</textarea>

                        <select name="status" class="form-control mb-1">
                            <option value="active" {{ $course->status=='active'?'selected':'' }}>Active</option>
                            <option value="inactive" {{ $course->status=='inactive'?'selected':'' }}>Inactive</option>
                        </select>

                        <button class="btn btn-sm btn-warning w-100">
                            Update
                        </button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                        action="{{ route('admin.courses.destroy', $course->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger w-100"
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
