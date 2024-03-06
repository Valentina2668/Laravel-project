@extends('layouts.base')
@section('content')

<section class="heading">
    <h1>Избранное</h1>
    <p><a href="/"> Главная </a>>> <a href={{asset('products')}}> товары</a> >> избранное </p>
</section>

<section class="products">
    <div></div>
    <div class="box-container">
        @foreach($favorites as $favorite)
        <div class="box">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                {{$favorite->product->name}}
            </h1>
            <form action="{{asset('add_cart/'.$favorite->product->id)}}">
                @csrf
                <div class="image">
                    <div class="icons">
                        <button type="submit"><a class="fas fa-shopping-cart"></a></button>
                        <a href="{{asset('product/' .$favorite->product->id.'/remove_from_favorites')}}" class="fas fa-window-close"></a>
                        <a href="{{asset('product/'.$favorite->product->id)}}" class="fas fa-eye"></a>
                    </div>
                    <img src="/storage/{{$favorite->product->picture}}" alt="">
                </div>
                <div class="content">
                    <div class="flex flex-col">
                        @if($favorite->product->discount)
                        <span class="text-2xl text-green-600"> Цена со скидкой {{$favorite->product->discount}}</span>
                        @endif
                        <span class="text-xl">Обычная цена {{$favorite->product->price}}</span>
                    </div>
                    <div class="flex ml-6 items-center">
                        <span class="mr-3">Размер</span>
                        <div class="relative">
                            <select name="size" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                @foreach(explode(',',$favorite->product->size) as $one)
                                <option value="{{$one}}">{{$one}}</option>
                                @endforeach
                            </select>
                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</section>
@endsection