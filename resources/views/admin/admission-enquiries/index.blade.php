@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Admission Enquiries</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>City</th>
                <th>Query</th>
                <th>Status</th>
                <th width="180">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enquiries as $enquiry)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $enquiry->full_name }}</td>

                <td>{{ $enquiry->phone_number }}</td>

                <td>{{ $enquiry->course }}</td>

                <td>{{ $enquiry->city }}</td>

                <td>{{ $enquiry->query }}</td>

                <td>
                    <span class="badge 
                        @if($enquiry->status == 'new') bg-primary
                        @elseif($enquiry->status == 'contacted') bg-warning
                        @else bg-success
                        @endif">
                        {{ ucfirst($enquiry->status) }}
                    </span>
                </td>

                <td>
                    {{-- STATUS UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.admission.enquiries.updateStatus', $enquiry->id) }}"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <select name="status"
                                class="form-control mb-1"
                                onchange="this.form.submit()">
                            <option value="new" {{ $enquiry->status=='new'?'selected':'' }}>
                                New
                            </option>
                            <option value="contacted" {{ $enquiry->status=='contacted'?'selected':'' }}>
                                Contacted
                            </option>
                            <option value="closed" {{ $enquiry->status=='closed'?'selected':'' }}>
                                Closed
                            </option>
                        </select>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.admission.enquiries.destroy', $enquiry->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this enquiry?')">
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
