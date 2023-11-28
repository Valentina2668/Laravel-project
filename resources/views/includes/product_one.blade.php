<div class="box-container">
<div class="box">
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    <h3>{{$product->name}}</h3>
    <img src="{{asset('/storage/'.$product->picture)}}" alt="Image">
    <div class="price">${{$product->price}}
    </div>
    <a href="{{asset('product/'.$product->id)}}" class="btn">Подробнее о товаре</a>
</div>
</div>