@extends('layouts.base')
@section('content')

</section>
<section class="home">
    <div class="slide active" style="background: url(images/home-bg-1.jpg) no-repeat;">
        <div class="content">
            <h3>Fly Up</h3>
            <button class="text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
                <a href="/products">shop now</a>
            </button>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
        <div class="content">
            <h3>Be Invincible</h3>
            <button class="text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
                <a href="/products">shop now</a>
            </button>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
        <div class="content">
            <h3>Run fast</h3>
            <button class="text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
                <a href="/products">shop now</a>
            </button>
        </div>
    </div>
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
</section>
<section class="grid grid-cols-1 gap-4 sm:grid-cols-2 ">
    <div class="relative overflow-hidden h-400 rounded-lg border-1">
        <img src="images/sale.jpg" class="max-w-100% h-100% object-cover hover:scale-110">
        <button class="absolute top-7 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?sale=1">shop now</a>
        </button>
        <h3 class="absolute top-25 right-9 text-3xl">Sale</h3>
    </div>
    <div class="relative overflow-hidden h-400 rounded-lg border-1">
        <img src=".\images\banner-2.jpg" class="h-auto max-w-full object-cover hover:scale-110">
        <h3 class="absolute top-25 right-9 text-3xl">New Arrivals</h3>
        <button class="absolute top-7 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/feed">shop now</a>
        </button>
    </div>
    <div class="relative overflow-hidden h-400 rounded-lg border-1">
        <img src="images/banner-1.jpg" class="h-auto max-w-full object-cover hover:scale-110">
        <h3 class="absolute top-25 right-9 text-3xl">For women</h3>
        <button class="absolute top-7 right-3 bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?catalog=2">shop now</a>
        </button>
    </div>
    <div class="relative overflow-hidden h-400 rounded-lg border-1">
        <img src="images/banner-3.jpg" class="max-w-100% h-100% object-cover hover:scale-110">
        <h3 class="absolute top-25 right-9 text-3xl">For Men</h3>
        <button class="absolute top-7 right-3  bg-orange-50 text-3xl text-gray-900 py-3 px-10 rounded-lg border-1 border-gray-600 hover:border-green-600">
            <a href="/products?catalog=1">shop now</a>
        </button>

    </div>

</section>
@endsection