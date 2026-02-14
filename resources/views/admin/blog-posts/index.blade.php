@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Blog Posts</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD BLOG --}}
    <form method="POST"
          action="{{ route('admin.blogs.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>

            <div class="col-md-2">
                <input type="text" name="slug" class="form-control" placeholder="Slug (optional)">
            </div>

            <div class="col-md-2">
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>

            <div class="col-md-2">
                <input type="date" name="publish_date" class="form-control">
            </div>

            <div class="col-md-1">
                <select name="status" class="form-control">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>
                    <input type="checkbox" name="is_featured" value="1">
                    Featured
                </label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <textarea name="short_description"
                          class="form-control"
                          rows="2"
                          placeholder="Short Description"></textarea>
            </div>

            <div class="col-md-6">
                <textarea name="content"
                          class="form-control"
                          rows="4"
                          placeholder="Full Content"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="file" name="featured_image" class="form-control">
            </div>

            <div class="col-md-3">
                <input type="text" name="author_name" class="form-control" placeholder="Author Name">
            </div>

            <div class="col-md-3">
                <input type="file" name="author_image" class="form-control">
            </div>

            <div class="col-md-3">
                <button class="btn btn-primary w-100">Add Blog</button>
            </div>
        </div>
    </form>

    {{-- BLOG LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Featured</th>
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ ucfirst($post->status) }}</td>
                <td>{{ $post->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <form method="POST"
                          action="{{ route('admin.blogs.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this post?')">
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
