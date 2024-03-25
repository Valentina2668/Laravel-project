<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@extends('layouts.base')
@section('content')
<section>
    @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
        <div class="text-red-600 ">{{$error}}</div>
        @endforeach
    </div>
    @endif
    <form action="{{asset('cart/form_save')}}" method="post">
        @csrf
        @php
        $itogo=0;
        @endphp
        <table class="table table-striped">
            <th class="w-2/4">Наименование</th>
            <th class="w-1/4 text-center">Количество</th>
            <th class="w-1/4 text-right">Цена</th>
        </table>
        @foreach ($prod_arr as $product)

        @php
        $summa=(($product->discount != '') ? (float) $product->discount:(float)$product->price )* $prod_count[$product->id];
        $itogo += $summa;
        @endphp
        <input type="hidden" name="product[{{$product->id}}]" value="{{$prod_count[$product->id]}}">
        <table class="table table-striped">
            <tr>
                <td class="w-2/4">{{$product->name}}</td>
                <td class="w-1/4 text-center">{{$prod_count[$product->id]}}</td>
                <td class="w-1/4 text-right">{{$summa}}</td>
            </tr>
            @endforeach
        </table>
        <div class="pb-20 pt-20 text-lg">
            <span>Итого </span>
            <span>{{$itogo}}</span>
        </div>

        <div class="pb-20 pt-20 text-lg">
            <h2>Выберите способ доставки </h2>
            <ul>
                <li class="pt-2 ">
                    <input type="radio" name="delivery" value="one" checked />
                    <label for="one">Самовывоз</label>
                    <div class="check"></div>
                </li>
                <li class="pt-2">
                    <input type="radio" name="delivery" value="two" />
                    <label for="two">Доставка курьером</label>
                    <div class="check"></div>
                </li>
            </ul>
        </div>



        <div class="grid lg:grid-cols-2 mt-15 md:grid-cols-1 sm:grid-cols-1">
            <div class="p-6 border-1 border-gray-800 dark:border-gray-200 md:border-l flex flex-col">
                <label for="name" class="block">
                    <span class="text-gray-700">Имя</span>
                    @if($errors->has('name'))
                    {{$errors->first('name')}}
                    @endif
                    <input class="block w-full mt-1 form-input" placeholder="Ваше имя" id="name" name="name" type="text" autocomplete="off" required="">
                </label>
                <label for="email" class="block mt-4">
                    <span class="text-gray-800">Email</span>
                    @if($errors->has('email'))
                    {{$errors->first('email')}}
                    @endif
                    <input class="block w-full mt-1 form-input" id="email" name="email" autocomplete="off" type="email">
                </label>
                <label for="phone" class="hidden sm:block mt-4">
                    <span class="text-gray-700">Телефон</span>
                    @if($errors->has('phone'))
                    {{$errors->first('phone')}}
                    @endif
                    <input class="block w-full mt-1 form-input" id="phone" name="phone" autocomplete="off" type="tel" required type="text" pattern="\+375\([0-9]{2}\)[0-9 -]{6,12} {6,12}" placeholder="+375(__) ___ __ __" title="Формат: (096) 99">
                </label>
            </div>
            <div class="p-6 border-1 border-gray-800 dark:border-gray-200 md:border-r flex flex-col">
                <label class="block">
                    <span class="text-gray-700">Детали (необязательно)</span>
                    <textarea class="block w-full mt-1 form-textarea" wire:model="message" name="details" rows="3" placeholder="Детали"></textarea>
                </label>
                <button class="px-4 py-2 border-1 black mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
                    Подтвердить заказ
                </button>
            </div>
        </div>
    </form>
</section>
@endsection