<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(Request $request){
        $products = Product::filter($request->all())->simplePaginate(28);
        $all = Product::all();
        $min_price = (float)$all->sortBy('price')->first()->price;
        $max_price = (float)$all->sortByDesc('price')->first()->price; //sort vice versa
        $avg_price = ((float)$max_price + (float)$min_price)/2;
        // dd ($avg_price, $min_price, $max_price);
        return view('products', compact('products', 'min_price', 'max_price', 'avg_price'));
    }
    public function getOne(Product $product){
        $favorite = Favorite::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
        $sizes=explode(',',$product->size);
        // dd ($product);
        return view ('product', compact('product', 'sizes', 'favorite'));
    }
    
}
