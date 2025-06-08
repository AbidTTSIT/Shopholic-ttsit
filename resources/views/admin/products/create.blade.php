@extends('admin.layouts.master')

@section('head-tag')
    <title>Add Product</title>
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add</h4>
                    <h6>Create new product</h6>
                </div>
            </div>

           <div class="card">
            <div class="card-body">
                 <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" required class="form-control mb-3">
                @error('title') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Description:</label>
                <textarea name="description" class="form-control mb-3">{{ old('description') }}</textarea>

                <label>Regular Price:</label>
                <input type="number" name="regular_price" step="0.01" value="{{ old('regular_price') }}" required
                    class="form-control mb-3">
                @error('regular_price') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Sale Price:</label>
                <input type="number" name="sale_price" step="0.01" value="{{ old('sale_price') }}"
                    class="form-control mb-3">

                <label>Affiliate Link:</label>
                <input type="url" name="affiliate_link" value="{{ old('affiliate_link') }}" class="form-control mb-3">

                <label>Brand:</label>
                <select name="brand_id" class="form-select mb-3" required>
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Category:</label>
                <select name="category_id" class="form-select mb-3" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Subcategory:</label>
                <select name="subcategory_id" class="form-select mb-3" required>
                    <option value="">Select Subcategory</option>
                    @foreach($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}>
                            {{ $subcategory->name }}</option>
                    @endforeach
                </select>
                @error('subcategory_id') <div class="text-danger">{{ $message }}</div> @enderror

                <label>Images (multiple allowed):</label>
                <input type="file" name="images[]" multiple class="form-control mb-3">
                @error('images.*') <div class="text-danger">{{ $message }}</div> @enderror

                <button type="submit" class="btn btn-success">Create Product</button>
                 <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2">Cancel</a>
            </form>
            </div>
           </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('textarea'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error during initialization of the editor', error);
            });
    </script>

@endsection