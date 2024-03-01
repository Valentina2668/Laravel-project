@extends('layouts.base')
@section('content')
<section class="blog">
    <!-- <h1 class="title">our daily posts</h1> -->
    <a href="/blog" class="btn btn mt-4 text-2xl border-2 border-gray-400 hover:border-green-400">Назад</a>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="{{asset('/storage/'.$blog->picture)}}" alt="">
            </div>
            <div class="content">
                <h3>{{$blog->name}}</h3>
                <p class="normal-case">{!!$blog->description!!}</p>
                <div class="normal-case">{!!$blog->content!!}</div>
                <div class="icons">
                    <a href="#"><i class="fas fa-clock"></i>Дата {{optional ($blog->created_at)->diffForHumans()}}</a>
                    <a href="#"><i class="fas fa-user"></i>Автор {{$blog->user->name}}</a>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection