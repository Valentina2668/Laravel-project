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
                <a href="#" class="fas fa-heart"></a>
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