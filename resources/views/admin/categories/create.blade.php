@extends('admin.layouts.master')
@section('head-tag')
    <title>Shopholic|| Products</title>
@endsection
@section('content')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add Category</h4>
                    <h6>Create new product Category</h6>
                </div>
            </div>

          <div class="card">
            <div class="card-body">
                  <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control mb-3">
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Images (multiple allowed):</label>
                <input type="file" name="images[]" multiple class="form-control mb-3">
                @error('images.*') <div class="text-danger">{{ $message }}</div> @enderror

                <button type="submit" class="btn btn-success">Create Category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary ms-2">Cancel</a>
            </form>
            </div>
          </div>
        </div>
    </div>
@endsection