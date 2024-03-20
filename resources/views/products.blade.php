@extends('layouts.base')
@section('content')



<section class="heading">
    <h1>Каталог</h1>
    <p><a href="/">Главная</a> > <a href={{asset('products')}}>Каталог</a></p>
</section>
<section class="products">
    @include('includes.filters')
        <div class="box-container">
        @foreach($products as $product)
        <div class="box">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                {{$product->name}}
            </h1>
            <form action="{{asset('add_cart/'.$product->id)}}">
                @csrf
                <div class="image">
                    <div class="icons">
                        <button type="submit"><a class="fas fa-shopping-cart"></a></button>
                        <a href="{{asset('product/' .$product->id.'/add_to_favorites')}}" class="fas fa-heart"></a>
                        <a href="{{asset('product/'.$product->id)}}" class="fas fa-eye"></a>
                    </div>
                    <img src="/storage/{{$product->picture}}" alt="">
                </div>


                <div class="content">
                    <h3>{{$product->status}}</h3>
                    <div class="flex flex-col">
                        @if($product->discount)
                        <span class="text-2xl text-green-600"> Цена со скидкой {{$product->discount}}<span> BYN</span></span>
                        @endif
                        <span class="text-xl">Обычная цена {{$product->price}}<span> BYN</span></span>
                    </div>
                    <div class="flex ml-6 items-center">
                        <span class="mr-3">Размер</span>
                        <div class="relative">
                            <select name="size" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                @foreach(explode(',',$product->size) as $one)
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
            </form>
        </div>
    </div>
    @endforeach

    </div>

</section>

@endsection