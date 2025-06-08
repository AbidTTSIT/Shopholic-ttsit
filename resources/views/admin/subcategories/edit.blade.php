@extends('admin.layouts.master')

@section('head-tag')
<title>Edit Subcategory</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add sub Category</h4>
                <h6>Create new product Category</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name">Subcategory Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $subcategory->name) }}" required>
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id">Parent Category</label>
                        <select name="category_id" class="form-control" required>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $subcategory->pcategory_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection