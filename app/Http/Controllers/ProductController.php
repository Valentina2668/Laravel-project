<?php

namespace App\Http\Controllers;

use App\ModelFilters\ProductFilter;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(Request $request)
    {
        $products = Product::filter($request->all())->simplePaginate(28);
        // dd ($avg_price, $min_price, $max_price);
        return view('products', compact('products'));
    }
    public function getOne(Product $product)
    {
        $favorite = Favorite::where('user_id', optional(Auth::user())->id)->where('product_id', $product->id)->first();
        $sizes = explode(',', $product->size);
        // dd ($product);
        return view('product', compact('product', 'sizes', 'favorite'));
    }
    public function getAll(Request $request)
    {
        // if ($request->search) {
        //     $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->get();
        // } else {
        //     $products = Product::all();
        // }
        $products = Product::filter($request->all())->simplePaginate(9);
        return view('products', compact('products'));
    }
}
