@extends('admin.layouts.admin')

@section('content')
<div class="container">

    <h3 class="mb-3">App Download Section</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.app.download.save') }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>App Name</label>
            <input type="text"
                   name="app_name"
                   class="form-control"
                   value="{{ $app->app_name ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Android Link (Play Store)</label>
            <input type="url"
                   name="android_link"
                   class="form-control"
                   value="{{ $app->android_link ?? '' }}">
        </div>

        <div class="mb-3">
            <label>iOS Link (App Store)</label>
            <input type="url"
                   name="ios_link"
                   class="form-control"
                   value="{{ $app->ios_link ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Upload Android QR</label>
            <input type="file"
                   name="qr_android"
                   class="form-control">

            @if(!empty($app->qr_android))
                <img src="{{ asset($app->qr_android) }}"
                     width="120"
                     class="mt-2 rounded">
            @endif
        </div>

        <div class="mb-3">
            <label>Upload iOS QR</label>
            <input type="file"
                   name="qr_ios"
                   class="form-control">

            @if(!empty($app->qr_ios))
                <img src="{{ asset($app->qr_ios) }}"
                     width="120"
                     class="mt-2 rounded">
            @endif
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="active"
                    {{ isset($app) && $app->status == 'active' ? 'selected' : '' }}>
                    Active
                </option>
                <option value="inactive"
                    {{ isset($app) && $app->status == 'inactive' ? 'selected' : '' }}>
                    Inactive
                </option>
            </select>
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>
@endsection
