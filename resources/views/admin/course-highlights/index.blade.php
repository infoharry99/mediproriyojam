@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Course Highlights</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD HIGHLIGHT --}}
    <form method="POST"
          action="{{ route('admin.course.highlights.store') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text"
                       name="highlight_text"
                       class="form-control"
                       placeholder="Highlight text">
            </div>

            <div class="col-md-2">
                <input type="text"
                       name="icon"
                       class="form-control"
                       placeholder="Icon (check, star)">
            </div>

            <div class="col-md-2">
                <input type="number"
                       name="display_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary w-100">
                    Add Highlight
                </button>
            </div>
        </div>
    </form>

    {{-- LIST HIGHLIGHTS --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Text</th>
                <th>Icon</th>
                <th>Order</th>
                <th>Status</th>
                <th width="250">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($highlights as $highlight)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $highlight->highlight_text }}</td>

                <td>
                    <i class="bi bi-{{ $highlight->icon }}"></i>
                    ({{ $highlight->icon }})
                </td>

                <td>{{ $highlight->display_order }}</td>

                <td>
                    <span class="badge {{ $highlight->status=='active'?'bg-success':'bg-secondary' }}">
                        {{ ucfirst($highlight->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.course.highlights.update', $highlight->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text"
                               name="highlight_text"
                               value="{{ $highlight->highlight_text }}"
                               class="form-control mb-1">

                        <input type="text"
                               name="icon"
                               value="{{ $highlight->icon }}"
                               class="form-control mb-1">

                        <input type="number"
                               name="display_order"
                               value="{{ $highlight->display_order }}"
                               class="form-control mb-1">

                        <select name="status"
                                class="form-control mb-1">
                            <option value="active" {{ $highlight->status=='active'?'selected':'' }}>
                                Active
                            </option>
                            <option value="inactive" {{ $highlight->status=='inactive'?'selected':'' }}>
                                Inactive
                            </option>
                        </select>

                        <button class="btn btn-sm btn-warning w-100">
                            Update
                        </button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.course.highlights.destroy', $highlight->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this highlight?')">
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
