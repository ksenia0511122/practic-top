<!DOCTYPE html>
<html>
<head>
    <title>Мои товары</title>
</head>
<body>
    <h1>Актуальные товары</h1>
        @foreach ($products as $product)
                <strong>{{ $product->name }}</strong><br>
                Цена: {{ $product->price }} ₽<br>
        @endforeach
</body>
</html>
