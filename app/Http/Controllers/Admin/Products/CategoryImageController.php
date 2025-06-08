<?php

namespace App\Http\Controllers\Admin\Products;


use App\Http\Controllers\Controller;
use App\Models\CategoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryImageController extends Controller
{
    public function destroy(CategoryImage $categoryImage)
    {
        // Delete the image file from storage
        Storage::disk('public')->delete($categoryImage->path);

        // Delete the database record
        $categoryImage->delete();

        toastr()->addSuccess('Image deleted successfully.');
        return redirect()->back();
    }
}
