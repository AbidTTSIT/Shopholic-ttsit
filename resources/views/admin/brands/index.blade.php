@extends('admin.layouts.master')

@section('head-tag')
<title>Shopholic | Brands</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand List</h4>
                <h6>Manage your Brand</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('brands.create') }}" class="btn btn-added"><img
                        src="assets/img/icons/plus.svg"
                        class="me-2"
                        alt="img" />Add Brand</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="assets/img/icons/filter.svg" alt="img" />
                                <span><img src="assets/img/icons/closes.svg" alt="img" /></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img" /></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="pdf"><img src="assets/img/icons/pdf.svg" alt="img" /></a>
                            </li>
                            <li>
                                <a
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="excel"><img src="assets/img/icons/excel.svg" alt="img" /></a>
                            </li>
                            <li>
                                <a
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="print"><img src="assets/img/icons/printer.svg" alt="img" /></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Brand Name" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        placeholder="Enter Brand Description" />
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="assets/img/icons/search-whites.svg"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Images</th>
                                <th style="width: 180px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($brands as $brand)
                            <tr>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    @if($brand->images->count())
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach($brand->images as $image)
                                        <img src="{{ asset('assets/admin/img/brand/' . $image->path) }}"
                                            alt="Brand Image"
                                            class="rounded shadow-sm"
                                            style="width: 60px; height: 60px; object-fit: cover;">
                                        @endforeach
                                    </div>
                                    @else
                                    <span class="text-muted">No Images</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('brands.destroy', $brand) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this brand?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No brands found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection