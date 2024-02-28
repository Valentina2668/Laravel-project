@extends('layouts.base')
@section('content')
<section class="category" id="category">
    <section class="heading">
        <h1>Новые поступления</h1>
        <p><a href="/">Главная</a> > <a href={{asset('products')}}>Каталог</a> > Новинки</p>
    </section>
    @foreach ($feeds as $feed)
    <div class="box-container">
        <div class="box">
            Hey there
            @if ($feed->model_name == 'Product')
            @include('includes.product_one', ['product'=>$feed->product])
            @elseif($feed->model_name == 'Catalog')
            @include('includes.catalog_one', ['catalog'=>$feed->catalog])
            @endif
        </div>
    </div>
    @endforeach
</section>
@endsection