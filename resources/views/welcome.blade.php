@extends('layouts.base')
@section('content')

</section>
<section class="home">
    <div class="slide active" style="background: url(images/home-bg-1.jpg) no-repeat;">
        <div class="bg-transparent flex flex-col">
            <h3 class="bg-transparent text-7xl text-white pb-10 ">Fly Up</h3>
            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-5xl px-6 py-2.5 text-center p-8 w-64 h-24">
                <a href="/products">Купить</a></button>
            </button>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
        <div class="bg-transparent">
            <h3 class="bg-transparent text-7xl text-white pb-10 ">Be Invincible</h3>
            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-5xl px-6 py-2.5 text-center p-8 w-64 h-24">
                <a href="/products">Купить</a></button>
            </button>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
        <div class="bg-transparent">
            <h3 class="bg-transparent text-7xl text-white pb-10 ">Run fast</h3>
            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-5xl px-6 py-2.5 text-center p-8 w-64 h-24">
                <a href="/products">Купить</a></button>
            </button>
        </div>
    </div>
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
</section>
<section class="grid grid-cols-1 gap-4 p-2 sm:grid-cols-2">
    <div class="relative overflow-hidden h-400">
        <img src="images/sale.png" class="max-w-100% h-100% object-cover hover:scale-110">
        <div class="bg-transparent text-5xl text-black pb-10 absolute top-6 right-3"> Распродажа </div>
        <button class="absolute top-24 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?sale=1">Купить</a>
        </button>
    </div>
    <div class="relative overflow-hidden h-400">
        <img src="images/banner-1.png" class="h-auto max-w-full object-cover hover:scale-110">
        <h3 class="bg-transparent text-5xl text-white pb-10 absolute top-6 right-3 normal-case">Новые поступления</h3>
        <button class="absolute top-24 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?catalog=4">Купить</a>
        </button>
    </div>
    <div class="relative overflow-hidden h-400">
        <img src="images/banner-woman.png" class="h-auto max-w-full object-cover hover:scale-110">
        <h3 class="bg-transparent text-5xl text-white pb-10 absolute top-6 right-3 normal-case">Для женщин</h3>
        <button class="absolute top-24 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?catalog=2">Купить</a>
        </button>
    </div>
    <div class="relative overflow-hidden h-400">
        <img src="images/banner-man.png" class="max-w-100% h-100% object-cover hover:scale-110">
        <h3 class="bg-transparent text-5xl text-black pb-10 absolute top-6 right-3 normal-case">Для мужчин</h3>
        <button class="absolute top-24 right-3  bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?catalog=1">Купить</a>
        </button>

    </div>

</section>
@endsection