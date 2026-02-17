@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">About Statistics</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ADD STATISTIC --}}
    <form method="POST"
          action="{{ route('admin.about.statistics.store') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text"
                       name="number"
                       class="form-control"
                       placeholder="Number (e.g. 500+)">
            </div>

            <div class="col-md-4">
                <input type="text"
                       name="label"
                       class="form-control"
                       placeholder="Label (e.g. Happy Clients)">
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary w-100">
                    Add Statistic
                </button>
            </div>
        </div>
    </form>

    {{-- LIST STATISTICS --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Number</th>
                <th>Label</th>
                <th width="250">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stats as $stat)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $stat->number }}</td>

                <td>{{ $stat->label }}</td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.about.statistics.update', $stat->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text"
                               name="number"
                               value="{{ $stat->number }}"
                               class="form-control mb-1">

                        <input type="text"
                               name="label"
                               value="{{ $stat->label }}"
                               class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">
                            Update
                        </button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.about.statistics.destroy', $stat->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this statistic?')">
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
