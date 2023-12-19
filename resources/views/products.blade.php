@extends('layouts.base')
@section('content')



<section class="heading">
    <h1>products</h1>
    <p><a href="/">home</a>>><a href={{asset('products')}}>products</a> >> catalog </p>
</section>
<h1 class="title">featured products</h1>
<section class="products">
    <form class="p-2" action="{{asset('products')}}">
        <div class="select-catalog">
            <select name='catalog' class="catalog-name">
                <option value=0> Choose from the catalog
                </option>
                <option value=1>For men
                </option>
                <option value=2>For women
                </option>
            </select>
            <select name="size">
                <option value="">
                    Choose you size
                </option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>

            </select>
            <label>
                <p>Sale</p><input type="checkbox" name='sale' value=1>
            </label>

            <div class="grid grid-cols-2">


                <div>
                    <div x-data="{ price: {{(request()->price_min)? request()->price_min:$min_price}} }" class="w-full">
                        <label for="price" class="font-bold text-gray-700" x-text="`от`  + price">{{$min_price}}</label>
                        <input type="range" min="{{$min_price}}" name="price_min" max="{{$avg_price}}" x-model="price" class="w-full h-2 bg-blue-100 appearance-none" />
                    </div>
                </div>
                <div x-data="{ price: {{(request()->price_max)? request()->price_max:$max_price}} }" class="w-full">
                    <label for="price" class="font-bold text-gray-700 block text-right" x-text="`до`  + price">{{$max_price}}</label>
                    <input type="range" min="{{$avg_price}}" name="price_max" max="{{$max_price}}" x-model="price" class="w-full h-2 bg-blue-100 appearance-none" />
                </div>
            </div>
        </div>
        <div class="tex-center" text-sm mt-2>
            <button type="submit" class="btn"> Sort</button>
        </div>
        <div class="tex-center" text-sm mt-2>
            <button class="btn"><a href="/products"></a> Reset</button>
        </div>
    </form>

    <!-- <section class=''>
        <input type="range" min="23" name="price_min" max="483" x-model="price">
    </section> -->
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
                    <div class="price">
                        @if($product->discount)
                        <span> Цена со скидкой {{$product->discount}}</span>
                        @endif
                        <span>Обычная цена {{$product->price}}</span>
                    </div>
                    <div class="flex ml-6 items-center">
                        <span class="mr-3">Size</span>
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