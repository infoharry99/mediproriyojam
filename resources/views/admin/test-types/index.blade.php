@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Test Types</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD TEST TYPE --}}
    <form method="POST"
          action="{{ route('admin.test.types.store') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text"
                       name="title"
                       class="form-control"
                       placeholder="Title (Weekly Test)">
            </div>

            <div class="col-md-3">
                <input type="text"
                       name="short_description"
                       class="form-control"
                       placeholder="Short Description">
            </div>

            <div class="col-md-2">
                <input type="text"
                       name="icon"
                       class="form-control"
                       placeholder="Icon (clipboard-check)">
            </div>

            <div class="col-md-2">
                <input type="number"
                       name="display_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    Add
                </button>
            </div>
        </div>
    </form>

    {{-- LIST TEST TYPES --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Order</th>
                <th>Status</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testTypes as $test)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $test->title }}</td>

                <td>{{ $test->short_description }}</td>

                <td>
                    <i class="bi bi-{{ $test->icon }}"></i>
                    ({{ $test->icon }})
                </td>

                <td>{{ $test->display_order }}</td>

                <td>
                    <span class="badge {{ $test->status=='active'?'bg-success':'bg-secondary' }}">
                        {{ ucfirst($test->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.test.types.update', $test->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text"
                               name="title"
                               value="{{ $test->title }}"
                               class="form-control mb-1">

                        <input type="text"
                               name="short_description"
                               value="{{ $test->short_description }}"
                               class="form-control mb-1">

                        <input type="text"
                               name="icon"
                               value="{{ $test->icon }}"
                               class="form-control mb-1">

                        <input type="number"
                               name="display_order"
                               value="{{ $test->display_order }}"
                               class="form-control mb-1">

                        <select name="status"
                                class="form-control mb-1">
                            <option value="active" {{ $test->status=='active'?'selected':'' }}>
                                Active
                            </option>
                            <option value="inactive" {{ $test->status=='inactive'?'selected':'' }}>
                                Inactive
                            </option>
                        </select>

                        <button class="btn btn-sm btn-warning w-100">
                            Update
                        </button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.test.types.destroy', $test->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this test type?')">
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
