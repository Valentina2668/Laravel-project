<?php
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Models\Product;
class ProductsComposer{
    public function compose(View $view){
        $all = Product::all();
        $min_price = (float)$all->sortBy('price')->first()->price;
        $max_price = (float)$all->sortByDesc('price')->first()->price; //sort vice versa
        $avg_price = ((float)$max_price + (float)$min_price) / 2;
        $view->with('min_price', $min_price)->with('max_price', $max_price)->with('avg_price',$avg_price);
    }
}