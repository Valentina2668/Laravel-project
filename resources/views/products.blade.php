@extends('layouts.base')
@section('content')

<section class="products">
    <section class="heading">
        <h1>products</h1>
        <p><a href="/">home</a>>><a href={{asset('products')}}>products</a> >> for men </p>
    </section>
    <h1 class="title">featured products</h1>
    <div class="box-container">
        @foreach($products as $product)
        <div class="box">
            <h1>
             {{$product->name}}   
            </h1>
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="{{asset('product/' .$product->id.'/add_to_favorites')}}" class="fas fa-heart"></a>
                    <a href="{{asset('product/'.$product->id)}}" class="fas fa-eye"></a>
                </div>
                <img src="/storage/{{$product->picture}}" alt="">
            </div>
            <div class="content">
                <h3>{{$product->status}}</h3>
                <div class="price">{{$product->price}}<span>{{$product->discount}}</span></div>
            </div>
        </div>
        @endforeach

    </div>

</section>

@endsection