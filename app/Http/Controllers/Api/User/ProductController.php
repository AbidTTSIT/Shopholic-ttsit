<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Exception;

class ProductController extends Controller
{
    public function products()
    {
        try {
            $products = Product::all();

            return response()->json([
                'status' => true,
                'products' => $products,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'error occured fetch product',
                'error' => $e->getMessage(),
            ], 422);
        }
    }

    public function productDetails($id)
    {
        try {
            $product = Product::findOrFail($id);

            return response()->json([
                'status' => true,
                'product' => $product
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'product not found',
            ], 422);
        }
    }

    public function categories()
    {
        try {
            $categories = Category::all();
            if ($categories) {
                return response()->json([
                    'status' => true,
                    'categories' => $categories
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'error occured fetch categories',
            ], 422);
        }
    }
}
