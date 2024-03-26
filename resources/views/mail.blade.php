<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение заказа</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .confirmation {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .title{
            text-align: center;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="confirmation">
        <h1 class="title">Подтверждение заказа</h1>
        <div class="item">
            <span>Наименование товара:</span>
            <span>{{Кроссовки}}</span>
        </div>
        {{$test_message}}
        <div class="item">
            <span>Количество:</span>
            <span>{{1}}</span>
        </div>
        <div class="item">
            <span>Цена товара:</span>
            <span>{{$499.99}}</span>
        </div>
        <div class="item">
            <span>Итоговая цена:</span>
            <span>{{$499.99}}</span>
        </div>
        <div class="item">
            <span>Способ доставки:</span>
            <span>Доставка курьером</span>
        </div>
        <div class="item">
            <span>Контакты магазина:</span>
            <span>Телефон: +375294567890<br>
                Эл. почта: info@example.com<br>
                Адрес: <br> 
                ул. П. Мстиславца 20
            </span>
        </div>
    </div>
</body>
</html>

