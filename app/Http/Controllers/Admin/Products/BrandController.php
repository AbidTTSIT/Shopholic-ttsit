<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\BrandImage;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
{
    $brands = Brand::with('images')->latest()->get();
    return view('admin.brands.index', compact('brands'));
}


    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $brand = Brand::create(['name' => $data['name']]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time(). '.' .$image->getClientOriginalExtension();
                $image->move(public_path('assets/admin/img/brand/'), $filename);
                $brand->images()->create(['path' => $filename]);
            }
        }

        toastr()->addSuccess('Brand created successfully.');
        return redirect()->route('brands.index');
    }

    public function edit(Brand $brand)
    {
        $brand->load('images');
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    // Update brand name
    $brand->update(['name' => $data['name']]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
           $filename = time(). '.' .$image->getClientOriginalExtension();
           $image->move(public_path('assets/admin/img/brand/'), $filename);
           $brand->images()->create(['path' => $filename ]);
        }
    }

    toastr()->addSuccess('Brand updated successfully.');
    return redirect()->route('brands.index', $brand->id);
}

    public function destroy(Brand $brand)
    {
        foreach ($brand->images as $img) {
            Storage::disk('public')->delete($img->path);
            $img->delete();
        }
        $brand->delete();

        toastr()->addSuccess('Brand deleted Successfully.');
        return redirect()->route('brands.index');
    }

    public function deleteImage(BrandImage $image)
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();

        toastr()->addSuccess('Image deleted Succesfully');
        return redirect()->back();
    }
}
