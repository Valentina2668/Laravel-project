@extends('layouts.base')
@section('content')
<section class="blogs">
    <h1 class="title">our daily posts</h1>
    <div class="box-container">
        
        <div class="box">
        <a href="{{asset('blog/'.$blog->id)}}" class="btn">back</a>
            <div class="image">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>{{$blog->name}}</h3>
                <p>{{$blog->description}}</p>
                <p>{!!$blog->content!!}</p>
                <div class="icons">
                    <a href="#"><i class="fas fa-clock"></i>Date {{optional ($blog->created_at)->diffForHumans()}}</a>
                    <a href="#"><i class="fas fa-user"></i>By user{{$blog->user->name}}</a>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection