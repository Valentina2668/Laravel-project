@extends('layouts.base')
@section('content')
<section class="blog">
    <!-- <h1 class="title">our daily posts</h1> -->
    <section class="heading">
        <h1>Блог</h1>
        <p><a href="/"> Главная</a> > <a href="/blog"> Блог</a> > Статья блога</p>
    </section>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="{{asset('/storage/'.$blog->picture)}}" alt="">
            </div>
            <div class="content">
                <h1>{{$blog->name}}</h1>
                <h2>{!!$blog->description!!}</h2>
                <p>{!!$blog->content!!}</p>
                <div class="icons">
                    <a href="#"><i class="fas fa-clock"></i>Дата {{optional ($blog->created_at)->diffForHumans()}}</a>
                    <a href="#"><i class="fas fa-user"></i>Автор {{$blog->user->name}}</a>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection