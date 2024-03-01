@extends('layouts.base')
@section('content')
<section class="heading">
        <h1> {!!$maintext->name!!}</h1>
        <p><a href="/">Главная </a> &gt;&gt; {!!$maintext->name!!} </p>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {!!$maintext->body!!}
                </div>
            </div>
        </div>
    </div>
    @endsection
