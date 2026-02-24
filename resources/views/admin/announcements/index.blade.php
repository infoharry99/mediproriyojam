@extends('admin.layouts.admin')

@section('content')


<div class="container">

    <h3 class="mb-3">Announcements</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD --}}
    <form method="POST"
          action="{{ route('admin.announcements.store') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text"
                       name="title"
                       class="form-control"
                       placeholder="Title">
            </div>

            <div class="col-md-3">
                <input type="text"
                       name="subtitle"
                       class="form-control"
                       placeholder="Subtitle">
            </div>

            <div class="col-md-2">
                <input type="date"
                       name="date"
                       class="form-control">
            </div>

            <div class="col-md-1">
                <input type="number"
                       name="sort_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-1 d-flex align-items-center">
                <input type="checkbox" name="is_active" value="1"> Active
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    Add
                </button>
            </div>
        </div>
    </form>

    {{-- LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Date</th>
                <th>Order</th>
                <th>Status</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->subtitle }}</td>
                <td>{{ $item->date?->format('d M Y') }}</td>
                <td>{{ $item->sort_order }}</td>

                <td>
                    <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.announcements.update', $item->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="title" value="{{ $item->title }}" class="form-control mb-1">
                        <input type="text" name="subtitle" value="{{ $item->subtitle }}" class="form-control mb-1">
                        <input type="date" name="date" value="{{ $item->date?->format('Y-m-d') }}" class="form-control mb-1">
                        <input type="number" name="sort_order" value="{{ $item->sort_order }}" class="form-control mb-1">

                        <label class="d-block mb-1">
                            <input type="checkbox" name="is_active" value="1"
                                {{ $item->is_active ? 'checked' : '' }}>
                            Active
                        </label>

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.announcements.destroy', $item->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete announcement?')">
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