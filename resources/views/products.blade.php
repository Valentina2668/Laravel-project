@extends('layouts.base')
@section('content')

<section class="products">
    <h1 class="title">featured products</h1>
    <div class="box-container">
        @foreach($products as $product)
        <div class="box">
            {{$product->name}}
            <div class="image">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="/storage/{{$product->picture}}" alt="">
            </div>
            <div class="content">
                <h3>premium glasses</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$20.00<span>$25.00</span></div>
            </div>
        </div>
        @endforeach

    </div>

</section>

@endsection