<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class IndexController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::with(['subcategories', 'images'])->get();
        $data['products'] = Product::with(['images', 'subcategory', 'category'])->get();
        // dd($data['products']);
        $data['brands'] = Brand::with('images')->get();

        return view('user.index', $data);
    }

    public function show($id)
    {
        $category = Category::with('subcategories.products')->findOrFail($id);

        return view('categories.show', compact('category'));
    }

    public function modal($id)
    {
        $category = Category::with('subcategories.products.images')->findOrFail($id);

        return view('categories.modal', compact('category'));
    }  
}
