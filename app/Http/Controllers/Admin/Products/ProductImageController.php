<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function destroy($id)
    {
        $image = ProductImage::findOrFail($id);

        // Delete the image file from storage
        if (Storage::exists($image->path)) {
            Storage::delete($image->path);
        }

        $image->delete();

        toastr()->addSuccess('Image deleted successfully');
        return redirect()->back();
    }
}
