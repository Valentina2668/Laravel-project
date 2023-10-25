<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function getOne($product){
        return view ('product', compact('product'));
    }
}
