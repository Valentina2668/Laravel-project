<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('feed', [Controllers\FeedController::class, 'getIndex']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('product/{product}/add_to_favorites', [Controllers\FavoriteController::class, 'addProductToFavorite'])->name('add_product_to_favorite');
    Route::get('product/{product}/remove_from_favorites', [Controllers\FavoriteController::class, 'removeProductFromFavorite'])->name('remove_product_from_favorite');
    Route::get('favorites', [Controllers\FavoriteController::class, 'showMy'])->name('my_favorites');
    
});

require __DIR__ . '/auth.php';


Route::get('products', [Controllers\ProductController::class, 'getIndex']);
Route::get('product/{product}', [Controllers\ProductController::class, 'getOne']); //маршрут для одного товара
Route::get('allproducts', [Controllers\ProductController::class, 'getAll']);
Route::get('blog', [Controllers\BlogController::class, 'getIndex']);
Route::get('blog/{blog}', [Controllers\BlogController::class, 'getOne']);
Route::get('add_cart/{id}', [Controllers\OrderController::class, 'addCookie']);
Route::get('cart',[Controllers\OrderController::class, 'cart'])->name('cart');
Route::get('cart/delete/{product}', [Controllers\OrderController::class,'cartDelete']);
Route::get('form_order', [Controllers\OrderController::class, 'formOrder']);
Route::post('cart/form_save', [Controllers\OrderController::class, 'formSave']);
Route::get('{url}', [Controllers\BaseController::class, 'getIndex']); //вот этот путь всегда в конце последней строчкой. 

