@extends('layouts.base')
@section('content')


<section class="heading">
    <h1>Новые поступления</h1>
    <p><a href="/">Главная</a> > <a href={{asset('products')}}>Каталог</a> > Новинки</p>
</section>

<section class="products">
    <div>
        
    </div>
    <div class="box-container">
        @foreach ($feeds as $feed)
        @if ($feed->model_name == 'Product')
        @include('includes.product_one', ['product'=>$feed->product])
        @endif
        @endforeach
    </div>
</section>

@endsection