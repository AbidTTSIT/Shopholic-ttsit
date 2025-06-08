<?php

namespace App\Http\Controllers\Admin\Products;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('images')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    
    $category = Category::create(['name' => $data['name']]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('assets/img/category'), $filename);

            $category->images()->create(['path' => $filename]);
        }
    }
     toastr()->addSuccess('Category created successfully.');
    return redirect()->route('categories.index');
}


    public function edit(Category $category)
    {
        $category->load('images');
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $category->update(['name' => $data['name']]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
              $filename = time(). '.' .$image->getClientOriginalName();
              $image->move(public_path('assets/img/category/'), $filename);
              $category->images()->create(['path' => $filename]);
            }
        }
        toastr()->addSuccess('Category updated successfully.');
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        foreach ($category->images as $img) {
            Storage::disk('public')->delete($img->path);
            $img->delete();
        }
        $category->delete();
        
        toastr()->addSuccess('Category deleted Successfully.');
        return redirect()->route('categories.index');
    }

    public function deleteImage(CategoryImage $image)
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();

        toastr()->addSuccess('Image deleted Successfully.');
        return redirect()->back();
    }
}
