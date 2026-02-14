@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Top Rankers</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD RANKER --}}
    <form method="POST"
          action="{{ route('admin.top.rankers.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-2">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="col-md-2">
                <input type="text" name="badge_text" class="form-control" placeholder="Badge (AIR 12)">
            </div>

            <div class="col-md-3">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>

            <div class="col-md-1">
                <input type="number" name="display_order" class="form-control" placeholder="Order">
            </div>

            <div class="col-md-2">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Add</button>
            </div>
        </div>
    </form>

    {{-- LIST RANKERS --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Preview</th>
                <th>Name</th>
                <th>Badge</th>
                <th>Order</th>
                <th>Status</th>
                <th width="260">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rankers as $ranker)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($ranker->image)
                        <img src="{{ asset($ranker->image) }}"
                             width="80"
                             class="rounded">
                    @endif
                </td>

                <td>{{ $ranker->name }}</td>
                <td>{{ $ranker->badge_text }}</td>
                <td>{{ $ranker->display_order }}</td>

                <td>
                    <span class="badge {{ $ranker->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                        {{ ucfirst($ranker->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.top.rankers.update', $ranker->id) }}"
                          enctype="multipart/form-data"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="name" value="{{ $ranker->name }}" class="form-control mb-1">
                        <input type="text" name="badge_text" value="{{ $ranker->badge_text }}" class="form-control mb-1">
                        <input type="text" name="description" value="{{ $ranker->description }}" class="form-control mb-1">
                        <input type="number" name="display_order" value="{{ $ranker->display_order }}" class="form-control mb-1">

                        <select name="status" class="form-control mb-1">
                            <option value="active" {{ $ranker->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $ranker->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>

                        <input type="file" name="image" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.top.rankers.destroy', $ranker->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this ranker?')">
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
