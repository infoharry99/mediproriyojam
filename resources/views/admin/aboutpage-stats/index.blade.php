@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">About Stats</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD STAT --}}
    <form method="POST"
          action="{{ route('admin.about.stats.store') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text"
                       name="number"
                       class="form-control"
                       placeholder="Number (500+)">
            </div>

            <div class="col-md-3">
                <input type="text"
                       name="label"
                       class="form-control"
                       placeholder="Label (Students)">
            </div>

            <div class="col-md-2">
                <input type="number"
                       name="sort_order"
                       class="form-control"
                       placeholder="Order">
            </div>

            <div class="col-md-2 d-flex align-items-center">
                <label class="me-2">Badge</label>
                <input type="checkbox" name="badge_enabled" value="1">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    Add Stat
                </button>
            </div>
        </div>
    </form>

    {{-- LIST --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Number</th>
                <th>Label</th>
                <th>Order</th>
                <th>Badge</th>
                <th width="240">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stats as $stat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stat->number }}</td>
                <td>{{ $stat->label }}</td>
                <td>{{ $stat->sort_order }}</td>
                <td>
                    <span class="badge {{ $stat->badge_enabled ? 'bg-success' : 'bg-secondary' }}">
                        {{ $stat->badge_enabled ? 'Yes' : 'No' }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.about.stats.update', $stat->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="number" value="{{ $stat->number }}" class="form-control mb-1">
                        <input type="text" name="label" value="{{ $stat->label }}" class="form-control mb-1">
                        <input type="number" name="sort_order" value="{{ $stat->sort_order }}" class="form-control mb-1">

                        <label class="d-block mb-1">
                            <input type="checkbox" name="badge_enabled" value="1"
                                {{ $stat->badge_enabled ? 'checked' : '' }}>
                            Badge Enabled
                        </label>

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.about.stats.destroy', $stat->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete stat?')">
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