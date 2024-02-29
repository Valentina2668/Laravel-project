@extends('layouts.base')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div>
        <div class="relative">
            <img src="./images/1676554957_catherineasquithgallery-com-p-zelenii-piksel-na-chernom-fone-113.jpg" 
            alt="фоновое изображение" class="bg-cover w-screen h-80">
            <div class="p-2 text-white normal-case text-7xl absolute top-16 bg-black text-center w-100">
                {{ __("Вы успешно вошли на сайт") }}
            </div>
        </div>
    </div>
</div>
@endsection