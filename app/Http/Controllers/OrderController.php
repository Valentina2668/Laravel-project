<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function addCookie($id = null, Request $request)
    {
        // dd($_COOKIE['order']);

        $order = $_COOKIE['order'] ?? null;
        if ($order) {
            $keys = explode(',', $order);
            $keys_id = $id . ':1';
            // explode выбрасывает , из кода, создал массив 14:1, 15:2, 35:5 
            // keys[0];
            if (in_array($keys_id, $keys)) {
                return redirect()->back()->withErrors(['Already exists']);
            } else {
                $keys[] = $keys_id;
                $order = implode(',', $keys);
            };
        } else {
            $order = $id . ':1';
        };
        setCookie('order', $order, time() + 3600, '/');
        return redirect()->back();
        // return redirect()->to ('cart');
        // return redirect()->route ('cart');
    }
    public function cart()
    {
        $order_arr = [];
        $products = [];
        $itogo = 0;
        if (isset($_COOKIE['order'])) {
            $order_arr = explode(',', $_COOKIE['order']);
        }
        foreach ($order_arr as $value) {
            if ($value) {
                $prod_ids = explode(':', $value);
                $prod = Product::find($prod_ids[0]);
                $itogo += ($prod->discount != '') ? (float)$prod->discount : (float)$prod->price;
                $products[$prod_ids[0]] = $prod;
            }
        }
        // dd($order_arr);
        return view('cart', compact('products', 'itogo'));
    }
    public function cartDelete(Product $product)
    {
        if (isset($_COOKIE['order'])) {
            $order_new = [];
            $order_arr = explode(',', $_COOKIE['order']);
            foreach ($order_arr as $keys) {
                $key_arr = explode(':', $keys);
                if ($key_arr[0] != $product->id) {
                    $order_new[$key_arr[0]] = $keys;
                }
            }
            $order = implode(',', $order_new);
            setcookie('order', $order, time() + 3600, '/');
            return redirect()->back();
        }
    }
    public function formOrder(Request $request)
    {
        $arr=$request->all();
        $prod_arr=[];
        $prod_count=[];
        // abort_if (!optional($orderRec)->first(), 416, 'error request');
        foreach ($arr as $key=>$value) {
            // $key product_1
            $key_ids = explode('_', $key);
            $prod_arr[$key_ids[1]]=Product::find($key_ids[1]);
            $prod_count[$key_ids[1]] = $value;
        }
        return view('form_order', compact('prod_arr', 'prod_count'));
    }
}
