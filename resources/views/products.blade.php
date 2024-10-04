<!DOCTYPE html>
<html>
<head>
    <title>Мои товары</title>
</head>
<body>
    <h1>Актуальные товары</h1>
    @foreach ($products as $product)
        <div id="product-{{ $product->id }}">
            <a href="{{ route('show', $product->id) }}">
                <strong>{{ $product->name }}</strong>
            </a><br>
            {{-- создаем ссылку на страницу, где можно увидеть детали конкретного товара --}}
            Цена: {{ $product->price }} ₽<br>
        </div>
    @endforeach
</body>
</html>
