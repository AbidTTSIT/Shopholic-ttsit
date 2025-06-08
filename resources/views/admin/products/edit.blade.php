@extends('admin.layouts.master')

@section('head-tag')
    <title>Edit Product</title>
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Edit Product</h4>
                    <h6>update product</h6>
                </div>
            </div>

            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                id="editProductForm">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $product->title) }}" required
                        class="form-control @error('title') is-invalid @enderror">
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea id="description" name="description"
                        class="form-control">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="regular_price" class="form-label">Regular Price:</label>
                    <input type="number" step="0.01" id="regular_price" name="regular_price"
                        value="{{ old('regular_price', $product->regular_price) }}" required
                        class="form-control @error('regular_price') is-invalid @enderror">
                    @error('regular_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_price" class="form-label">Sale Price:</label>
                    <input type="number" step="0.01" id="sale_price" name="sale_price"
                        value="{{ old('sale_price', $product->sale_price) }}"
                        class="form-control @error('sale_price') is-invalid @enderror">
                    @error('sale_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="affiliate_link" class="form-label">Affiliate Link:</label>
                    <input type="url" id="affiliate_link" name="affiliate_link"
                        value="{{ old('affiliate_link', $product->affiliate_link) }}"
                        class="form-control @error('affiliate_link') is-invalid @enderror">
                    @error('affiliate_link') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="brand_id" class="form-label">Brand:</label>
                    <select id="brand_id" name="brand_id" required
                        class="form-select @error('brand_id') is-invalid @enderror">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select id="category_id" name="category_id" required
                        class="form-select @error('category_id') is-invalid @enderror">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="subcategory_id" class="form-label">Subcategory:</label>
                    <select id="subcategory_id" name="subcategory_id" required
                        class="form-select @error('subcategory_id') is-invalid @enderror">
                        @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" {{ old('subcategory_id', $product->subcategory_id) == $subcategory->id ? 'selected' : '' }}>
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('subcategory_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Existing Images:</label>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($product->images as $image)
                            <div style="position: relative; width: 100px;">
                                <img src="{{ asset('storage/' . $image->path) }}" class="img-thumbnail rounded" width="100"
                                    alt="Product Image">
                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0"
                                    onclick="deleteImage({{$image->id}})">&times;</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Upload New Images:</label>
                    <input type="file" id="images" name="images[]" multiple
                        class="form-control @error('images.*') is-invalid @enderror">
                    @error('images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                </div>

            </form>
        </div>
    </div>

    <script>
        function deleteImage(imageId) {
            if (confirm('Delete this image?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/product-images/${imageId}`;
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