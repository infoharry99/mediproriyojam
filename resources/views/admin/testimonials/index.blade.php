@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">Testimonials</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ADD TESTIMONIAL --}}
    <form method="POST"
          action="{{ route('admin.testimonials.store') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-2">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="col-md-2">
                <input type="text" name="designation" class="form-control" placeholder="Designation">
            </div>

            <div class="col-md-1">
                <select name="rating" class="form-control" required>
                    @for($i=1;$i<=5;$i++)
                        <option value="{{ $i }}">{{ $i }}★</option>
                    @endfor
                </select>
            </div>

            <div class="col-md-3">
                <input type="text" name="message" class="form-control" placeholder="Message">
            </div>

            <div class="col-md-1">
                <input type="number" name="display_order" class="form-control" placeholder="Order">
            </div>

            <div class="col-md-2">
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-1">
                <button class="btn btn-primary w-100">Add</button>
            </div>
        </div>
    </form>

    {{-- LIST TESTIMONIALS --}}
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Preview</th>
                <th>Name</th>
                <th>Rating</th>
                <th>Order</th>
                <th>Status</th>
                <th width="280">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}"
                             width="70"
                             class="rounded-circle">
                    @endif
                </td>

                <td>
                    <strong>{{ $testimonial->name }}</strong><br>
                    <small>{{ $testimonial->designation }}</small>
                </td>

                <td>
                    @for($i=1;$i<=5;$i++)
                        <span style="color:{{ $i <= $testimonial->rating ? '#ffc107' : '#ccc' }}">
                            ★
                        </span>
                    @endfor
                </td>

                <td>{{ $testimonial->display_order }}</td>

                <td>
                    <span class="badge {{ $testimonial->status=='active' ? 'bg-success':'bg-secondary' }}">
                        {{ ucfirst($testimonial->status) }}
                    </span>
                </td>

                <td>
                    {{-- UPDATE --}}
                    <form method="POST"
                          action="{{ route('admin.testimonials.update', $testimonial->id) }}"
                          enctype="multipart/form-data"
                          class="mb-2">
                        @csrf
                        @method('PUT')

                        <input type="text" name="name" value="{{ $testimonial->name }}" class="form-control mb-1">
                        <input type="text" name="designation" value="{{ $testimonial->designation }}" class="form-control mb-1">
                         <textarea name="message"
              class="form-control mb-1"
              rows="2"
              placeholder="Message">{{ $testimonial->message }}</textarea>
                        <input type="number" name="display_order" value="{{ $testimonial->display_order }}" class="form-control mb-1">
                        <select name="rating" class="form-control mb-1">
                            @for($i=1;$i<=5;$i++)
                                <option value="{{ $i }}" {{ $testimonial->rating==$i?'selected':'' }}>
                                    {{ $i }}★
                                </option>
                            @endfor
                        </select>

                        <select name="status" class="form-control mb-1">
                            <option value="active" {{ $testimonial->status=='active'?'selected':'' }}>Active</option>
                            <option value="inactive" {{ $testimonial->status=='inactive'?'selected':'' }}>Inactive</option>
                        </select>

                        <input type="file" name="image" class="form-control mb-1">

                        <button class="btn btn-sm btn-warning w-100">Update</button>
                    </form>

                    {{-- DELETE --}}
                    <form method="POST"
                          action="{{ route('admin.testimonials.destroy', $testimonial->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger w-100"
                                onclick="return confirm('Delete this testimonial?')">
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
