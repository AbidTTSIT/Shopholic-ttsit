@extends('admin.layouts.master')

@section('head-tag')
    <title>Edit Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Brand</h4>
                <h6>Update Brand</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data" id="editBrandForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Brand Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $brand->name) }}" required class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Existing Images:</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach($brand->images as $image)
                    <div style="position: relative; width: 100px;">
                        <img src="{{ asset('storage/' . $image->path) }}" class="img-thumbnail rounded" width="100" alt="Brand Image">
                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0" onclick="deleteImage({{ $image->id }})">&times;</button>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Upload New Images:</label>
            <input type="file" id="images" name="images[]" multiple class="form-control @error('images.*') is-invalid @enderror">
            @error('images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update Brand</button>
            <a href="{{ route('brands.index') }}" class="btn btn-secondary ms-2">Cancel</a>
        </div>
    </form>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteImage(imageId) {
        if (confirm('Delete this image?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `/brand-images/${imageId}`;
            form.innerHTML = `
                @csrf
                <input type="hidden" name="_method" value="DELETE">
            `;
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>
@endsection
