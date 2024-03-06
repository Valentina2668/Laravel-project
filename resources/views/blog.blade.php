@extends('layouts.base')
@section('content')

<section class="heading">
    <h1>Блог</h1>
    <p><a href="/"> Главная</a> > Блог </p>
</section>
<section>
    <div class="blogs">

        @foreach($blogs as $blog)
        <div class="box-container p-6">
            <div class="box">
                <div class="image ">
                    <img src="{{asset('/storage/'.$blog->picture)}}" alt="картинка блога">
                </div>
                <div class="content">
                    <h1 class="text-center normal-case text-5xl pt-10">{{$blog->name}}</h1>
                    <h2>{!!$blog->description!!}</h2>
                    <a href="{{asset('blog/'.$blog->id)}}" class="btn btn mt-4 text-2xl border-2 border-gray-400 hover:border-green-400">Подробней</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-clock"></i> Дата {{optional ($blog->created_at)->diffForHumans()}}</a>
                        <a href="#"><i class="fas fa-user"></i>Автор {{$blog->user->name}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <div align="center">
            {!!$blogs->links()!!}
        </div>

    </div>
</section>
@endsection