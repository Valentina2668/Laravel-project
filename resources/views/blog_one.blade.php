@extends('layouts.base')
@section('content')
<section class="blog">
    <!-- <h1 class="title">our daily posts</h1> -->
    <a href="/blog" class="btn">back</a>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="{{asset('/storage/'.$blog->picture)}}" alt="">
            </div>
            <div class="content">
                <h3>{{$blog->name}}</h3>
                <p>{{$blog->description}}</p>
                <p>{!!$blog->content!!}</p>
                <div class="icons">
                    <a href="#"><i class="fas fa-clock"></i>Date {{optional ($blog->created_at)->diffForHumans()}}</a>
                    <a href="#"><i class="fas fa-user"></i>By {{$blog->user->name}}</a>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection