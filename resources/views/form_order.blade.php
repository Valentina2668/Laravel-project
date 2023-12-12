@extends('layouts.base')
@section('content')
<section>
    <form action="{{asset('cart/form_save')}}" method="post">
        @csrf
        @php
        $itogo=0;
        @endphp

        @foreach ($prod_arr as $product)

        @php
        $summa=(($product->discount != '') ? (float) $product->discount:(float)$product->price )* $prod_count[$product->id];
        $itogo += $summa;
        @endphp
        <input type="hidden" name="product[{{$product->id}}]" value="{{$prod_count[$product->id]}}" <table>
        <tr>
            <td>Name {{$product->name}}</td>
            <td>Count {{$prod_count[$product->id]}}</td>
            <td>Summa {{$summa}}</td>
        </tr>


        @endforeach
        <tr>
            <td colspan="2">Итого</td>
            <td>{{$itogo}}</td>

        </tr>
        <div class="grid grid-cols-2">
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l flex flex-col">
                <label for="name" class="block">
                    <span class="text-gray-700">Имя</span>
                    <input class="block w-full mt-1 form-input" placeholder="Ваше имя" id="name" name="name" type="text" autocomplete="off" required="">
                </label>
                <label for="email" class="block mt-4">
                    <span class="text-gray-700">Email</span>
                    <input class="block w-full mt-1 form-input" id="email" name="email" autocomplete="off" type="email" required="">
                </label>
                <label for="phone" class="hidden sm:block mt-4">
                    <span class="text-gray-700">Телефон</span>
                    <input class="block w-full mt-1 form-input" id="phone" name="phone" autocomplete="off" type="tel">
                </label>
            </div>
            <div class="p-6 border-t border-black-200 dark:border-gray-700 md:border-r flex flex-col">
                <label class="block ">
                    <span class="text-gray-700">Детали (необязательно)</span>
                    <textarea class="block w-full mt-1 form-textarea" wire:model="message" name="details" rows="3" placeholder="Детали"></textarea>
                </label>
                <button class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
                    Подтвердить заказ
                </button>
            </div>
        </div>
    </form>
</section>
@endsection