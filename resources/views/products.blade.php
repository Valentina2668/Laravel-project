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
                <label><p>Sale</p><input type="checkbox" name='sale' value=1></label>
                
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
            <div class="image">
                <div class="icons">
                    <a href="{{asset('add_cart/'.$product->id)}}" class="fas fa-shopping-cart"></a>
                    <a href="{{asset('product/' .$product->id.'/add_to_favorites')}}" class="fas fa-heart"></a>
                    <a href="{{asset('product/'.$product->id)}}" class="fas fa-eye"></a>
                </div>
                <img src="/storage/{{$product->picture}}" alt="">
            </div>
            <div class="content">
                <h3>{{$product->status}}</h3>
                <div class="price">Цена со скидкой {{$product->discount}}</br>
                <span>Обычная цена {{$product->price}}</span></div>
            </div>
        </div>
        @endforeach

    </div>

</section>

@endsection