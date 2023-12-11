@extends('layouts.base')
@section('content')

<section class="home">
    <div class="slide active" style="background: url(images/home-bg-1.jpg) no-repeat;">
        <div class="content">
            <h3>Fly Up</h3>
            <a href="/products" class="btn">shop now</a>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
        <div class="content">
            <h3>Be Invincible</h3>
            <a href="/products" class="btn">shop now</a>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
        <div class="content">
            <h3>Run fast</h3>
            <a href="/products" class="btn">shop now</a>
        </div>
    </div>
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
</section>
<section class="banner">
    <div class="box">
        <img src="images/banner-2.jpg">
        <div class="content">
            <h3>SALE</h3>
            <a href="/products?sale=1" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src=".\images\blog-2.jpg">
        <div class="content">
            <h3>New Arrivals</h3>
            <a href="/feed" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/banner-1.jpg">
        <div class="content">
            <h3>For women</h3>
            <a href="/products?catalog=2" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/banner-3.jpg">
        <div class="content">
            <h3>For Men</h3>
            <a href="/products?catalog=1" class="btn">shop now</a>
        </div>
    </div>

</section>
@endsection