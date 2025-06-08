@extends('layouts.admin_layouts.admin_layout')

@section('head-tag')
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container mt-5 pb-5">

    <h2>Edit Category</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" id="editCategoryForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Category Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Existing Images:</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach($category->images as $image)
                    <div style="position: relative; width: 100px;">
                        <img src="{{ asset('storage/' . $image->path) }}" class="img-thumbnail rounded" width="100" alt="Category Image">
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
            <button type="submit" class="btn btn-primary">Update Category</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary ms-2">Cancel</a>
        </div>
    </form>
</div>

<script>
    function deleteImage(imageId) {
        if (confirm('Delete this image?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `/category-images/${imageId}`;
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
