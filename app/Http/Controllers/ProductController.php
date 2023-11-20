<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function getOne(Product $product){
        $favorite = Favorite::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
        $sizes=explode(',',$product->size);
        // dd ($product);
        return view ('product', compact('product', 'sizes', 'favorite'));
    }
}
