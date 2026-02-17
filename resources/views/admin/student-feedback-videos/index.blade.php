@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Student Feedback Videos</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD VIDEO --}}
    <form method="POST"
          action="{{ route('admin.feedback.videos.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-2">
                <input type="text" name="student_name" class="form-control" placeholder="Student Name">
            </div>

            <div class="col-md-2">
                <input type="text" name="course_name" class="form-control" placeholder="Course">
            </div>

            <div class="col-md-1">
                <input type="number" name="exam_year" class="form-control" placeholder="Year">
            </div>

            <div class="col-md-3">
                <input type="text" name="video_url" class="form-control" placeholder="YouTube or Video URL">
            </div>

            <div class="col-md-1">
                <input type="number" name="display_order" class="form-control" placeholder="Order">
            </div>

            <div class="col-md-2">
                <input type="file" name="thumbnail_image" class="form-control">
            </div>

            <div class="col-md-1">
                <button class="btn btn-primary w-100">Add</button>
            </div>
        </div>
    </form>

    {{-- LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Order</th>
                <th>Status</th>
                <th width="280">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($video->thumbnail_image)
                        <img src="{{ asset($video->thumbnail_image) }}"
                             width="80"
                             class="rounded">
                    @endif
                </td>

                <td>{{ $video->student_name }}</td>
                <td>{{ $video->course_name }}</td>
                <td>{{ $video->exam_year }}</td>
                <td>{{ $video->display_order }}</td>

                <td>
                    <span class="badge {{ $video->status=='active'?'bg-success':'bg-secondary' }}">
                        {{ ucfirst($video->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.feedback.videos.update', $video->id) }}"
                          enctype="multipart/form-data"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="student_name" value="{{ $video->student_name }}" class="form-control mb-1">
                        <input type="text" name="course_name" value="{{ $video->course_name }}" class="form-control mb-1">
                        <input type="number" name="exam_year" value="{{ $video->exam_year }}" class="form-control mb-1">
                        <input type="text" name="video_url" value="{{ $video->video_url }}" class="form-control mb-1">
                        <input type="number" name="display_order" value="{{ $video->display_order }}" class="form-control mb-1">

                        <select name="status" class="form-control mb-1">
                            <option value="active" {{ $video->status=='active'?'selected':'' }}>Active</option>
                            <option value="inactive" {{ $video->status=='inactive'?'selected':'' }}>Inactive</option>
                        </select>

                        <input type="file" name="thumbnail_image" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.feedback.videos.destroy', $video->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this video?')">
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
