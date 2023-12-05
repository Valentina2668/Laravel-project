@extends('layouts.base')
@section('content')
<section class="product-one">
    <section class="heading">
        <h1>products</h1>
        <p><a href="/">home</a>>><a href={{asset('products')}}>products</a> </p>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" viewBox="0 0 23 21" fill="none">
                        <path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183Z" fill="#FF0000" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>  </a>
                @else
                <a href="{{asset('product/' .$product->id.'/add_to_favorites')}}"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M20.84 5.11C20.3292 4.599 19.7228 4.19365 19.0554 3.91708C18.3879 3.64052 17.6725 3.49817 16.95 3.49817C16.2275 3.49817 15.5121 3.64052 14.8446 3.91708C14.1772 4.19365 13.5708 4.599 13.06 5.11L12 6.17L10.94 5.11C9.90831 4.07831 8.50903 3.49871 7.05 3.49871C5.59097 3.49871 4.19169 4.07831 3.16 5.11C2.12831 6.14169 1.54871 7.54097 1.54871 9C1.54871 10.459 2.12831 11.8583 3.16 12.89L4.22 13.95L12 21.73L19.78 13.95L20.84 12.89C21.351 12.3792 21.7564 11.7728 22.0329 11.1054C22.3095 10.4379 22.4518 9.72249 22.4518 9C22.4518 8.27751 22.3095 7.5621 22.0329 6.89464C21.7564 6.22719 21.351 5.62076 20.84 5.11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="fixed top-0 right-0 bg-green-500 text-white p-2 mt-4 mr-4 rounded z-20" x-show="showHardware" x-data="{showHardware : true}">
                <div  @click="showHardware = false">
                {{$error}}
                </div>
            </div>
        @endforeach
    @endif

@endsection