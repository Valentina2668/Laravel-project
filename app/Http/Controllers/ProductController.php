<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(){
        return view('products');
    }
    public function getOne($product){
        return view ('product', compact('product'));
    }
}
