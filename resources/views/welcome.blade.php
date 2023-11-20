@extends('layouts.base')
@section('content')
<section class="home">
    <div class="slide active" style="background: url(images/home-bg-1.jpg) no-repeat;">
        <div class="content">
            <span> protect your eyes </span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
        <div class="content">
            <span> protect your eyes </span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
        <div class="content">
            <span> protect your eyes </span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div id="next-slide" onclick="next()"class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()"class="fas fa-angle-left"></div>
</section>
<section class="banner">
    <div class="box">
        <img src="images/banner-1.jpg">
        <div class="content">
            <span>special offer</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/banner-2.jpg">
        <div class="content">
            <span>special offer</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="images/banner-3.jpg">
        <div class="content">
            <span>special offer</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
</section>
@endsection