@extends('layouts.base')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="ordercontainer">
    <div class="container">
        <div class="image">
            <img src="images/заказ.jpg" alt="order"/>
        </div>
        <div class="content">
            <h3>Ваш успешно вошли на сайт</h3>
            <p>
                В своем личном кабинете Вы можете изменить свои данные
            </p>
        </div>
    </div>
</div>
@endsection