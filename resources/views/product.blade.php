@extends('layouts.base')
@section('content')
<section class="products">
    <h1 class="title">featured products</h1>

    <div class="shoes-container">
        <div class="img-and-descr">
            <div class="images">
                <img src="http://mistillas.cl/wp-content/uploads/2018/04/Nike-Epic-React-Flyknit-%E2%80%9CPearl-Pink%E2%80%9D-01.jpg" />
            </div>
            <div class="shoes-description">
                <p>Women's Running Shoe</p>
                <h1>Nike Epic React Flyknit</h1>
                <h2>$150</h2>
                <p class="desc">The Nike Epic React Flyknit foam cushioning is responsive yet light-weight, durable
                    yet
                    soft. This creates a sensation that not only enhances the feeling of moving forward, but makes
                    running feel fun, too.</p>
            </div>

        </div>
        <div class="size-and-order">
            <div class="size-description">
                <p class="pick">choose size</p>
                <div class="shoes-sizes">
                    <div class="size">5</div>
                    <div class="size">6</div>
                    <div class="size">7</div>
                    <div class="size">8</div>
                    <div class="size">9</div>
                    <div class="size">10</div>
                    <div class="size">11</div>
                    <div class="size">12</div>
                </div>
            </div>
            <div class="buttons">
                <button class="add">Add to Cart</button>
                <button class="like"><span>♥</span></button>
            </div>

        </div>
    </div>
</section>


@endsection