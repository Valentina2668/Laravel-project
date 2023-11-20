@extends('layouts.base')
@section('content')
<section class="products">
    <section class="heading">
        <h1>products</h1>
        <p><a href="/">home</a>>><a href={{asset('products')}}>products</a> >> for men </p>
    </section>
    <h1 class="title">Featured product</h1>
    <div class="item-container">
        <div class="image-and-description">
            <div class="item-image">
                <img src="/storage/{{$product->picture}}" alt="">
            </div>
            <div class="item-description">
                <h1>{{$product->name}} </h1>
                @if ($favorite)
                <a href="{{asset('product/' .$favorite->product->id.'/remove_from_favorites')}}">
                    <svg class="h-4 w-4 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7" />
                    </svg></a>
                @else
                <a href="{{asset('product/' .$product->id.'/add_to_favorites')}}"> <svg class="h-4 w-4 text-black-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7" />
                    </svg></a>
                @endif
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam laudantium
                    rem ea nostrum suscipit, iure excepturi inventore consectetur provident tempore magnam molestiae
                    obcaecati eveniet ex dolores labore deserunt cumque eum.</p>
            </div>
        </div>
        <div class="size-and-buy">

            <div class="item-size">
                @foreach($sizes as $one)
                <a href="#" class="btn">{{$one}}</a>
                @endforeach
            </div>
            <a href="#" class="btn">buy now</a>
        </div>

    </div>
</section>


@endsection