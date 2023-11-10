<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
   public function addProductToFavorite(Product $product){
    Favorite::firstOrCreate([
        'user_id'=>Auth::user()->id, 
        //проверяем есть ли такой пользователь и добавляем, если нет в базе полей с такими значениями
        'product_id'=>$product->id
    ]);
    return redirect()->back();
   }
   public function removeProductFromFavorite(Product $product){  
    //проверяем по user id и product id, если такой есть, то удаляем
    Favorite::where('product_id', $product->id) 
    //Если этой строчки нет, то удажит все продукты
    ->where('user_id',Auth::user()->id) //удалит всех пользователей 
    -> delete();
    //конструктор запроса 
    // SELECT * FROM Favorites WHERE product_id = '1' AND user_id ='1'
    // В ларавел можно много раз написать Where вместо WHERE и далее AND и JOIN 
    }
    public function showMy(){
    $favorites = Favorite::where('user_id', Auth::user()->id)
    // ->orderBy('id','DESC')
    ->get();
    return view('my_favorites', compact('favorites'));
    }
}
