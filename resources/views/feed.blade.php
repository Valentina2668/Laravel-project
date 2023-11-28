@extends('layouts.base')
@section('content')
    <section class="category" id="category">
        <h1>  New Arrivals</h1>
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