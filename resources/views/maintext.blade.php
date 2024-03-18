@extends('layouts.base')
@section('content')
<section class="heading">
    <h1> {!!$maintext->name!!}</h1>
    <p><a href="/">Главная </a> &gt;&gt; {!!$maintext->name!!} </p>
</section>
<div>
    {!!$maintext->body!!}
</div>
@endsection