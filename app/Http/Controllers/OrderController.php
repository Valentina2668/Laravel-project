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
        setCookie('order', $order, time() + 360, '/');
        return redirect('cart');
        // return redirect()->to ('cart');
        // return redirect()->route ('cart');
    }
    public function cart()
    {
        $order_arr = [];
        $products = [];
        if (isset($_COOKIE['order'])) {
            $order_arr = explode(',', $_COOKIE['order']);
        }
        foreach ($order_arr as $value) {
            if ($value) {
                $prod_ids = explode(':', $value);
                $products[$prod_ids[0]] = Product::find($prod_ids[0]);
            }
        }
        // dd($order_arr);
        return view('cart', compact('products'));
    }
}
