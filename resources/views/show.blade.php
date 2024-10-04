<form action="{{ route('order.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <h2>{{ $product->name }}</h2> <!-- Отображение названия товара -->

    <label for="quantity">Количество:</label>
    <input type="number" id="quantity" name="quantity" min="1" required>

    <button type="submit">Заказать</button>
    @if (session("success"))
        <div>{{session("success")}}</div>
    @endif
</form>
