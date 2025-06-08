<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\CueLinksService;

class UserProductController extends Controller
{
    public function productDetails($id)
    {
        $data['products'] = Product::with(['brand', 'images'])->where('id', $id)->first();
        return view('user.products.product-details', $data);
    }

    public function redirectToAffiliate($id)
    {
        $product = Product::findOrFail($id);
        $cuelink = new CueLinksService();
        $affiliateLink = $cuelink->generateAffiliateLink($product->affiliate_link);
        return redirect()->away($affiliateLink);
    }

    public function redirectCompare($id)
    {
        $data['product'] = Product::with(['brand', 'images'])->where('id', $id)->first();
        return view('user.products.product-compare', $data);
    }

    public function productSearch(Request $request)
{
    $query = $request->input('query');

    if (strlen($query) < 2) {
        return response()->json([
            'status' => 'not found',
            'message' => 'Query too short',
            'products' => []
        ], 200);
    }

    $products = Product::with(['images', 'brand'])
        ->where('title', 'LIKE', "%{$query}%")
        ->select('id', 'title', 'description', 'regular_price', 'sale_price', 'brand_id')
        ->take(10)
        ->get();

    $products->transform(function ($product) {
        $imagePath = $product->images->first() ? $product->images->first()->path : 'default.jpg';
        $product->path = asset('assets/img/product/' . $imagePath);
        $product->brand_name = $product->brand ? $product->brand->name : 'N/A';
        unset($product->images);
        unset($product->brand);
        unset($product->brand_id);
        return $product;
    });

    return response()->json([
        'status' => $products->isEmpty() ? 'not found' : 'found product',
        'message' => $products->isEmpty() ? 'No products found' : 'Products found',
        'products' => $products
    ], 200);
}
}
