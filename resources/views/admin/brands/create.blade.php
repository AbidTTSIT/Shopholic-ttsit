@extends('admin.layouts.master')

@section('head-tag')
<title>Add Brand</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand ADD</h4>
                <h6>Create new Brand</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Brand Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" name="name" value="{{ old('name') }}" placeholder="Enter brand name" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Brand Images <small>(You can select multiple)</small></label>
                        <input type="file" class="form-control @error('images.*') is-invalid @enderror"
                            name="images[]" id="images" multiple>
                        @error('images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save2"></i> Create Brand
                    </button>
                    <a href="{{ route('brands.index') }}" class="btn btn-secondary ms-2">Back to List</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection