<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\BrandImage;
use Illuminate\Support\Facades\Storage;

class BrandImageController extends Controller
{
    public function destroy(BrandImage $image)
{
    // Only delete the selected image
    Storage::disk('public')->delete($image->path);
    $image->delete();

    toastr()->addSuccess('One image deleted successfully.');
    return redirect()->back();
}

}
