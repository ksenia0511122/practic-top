<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products List</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - Cost: {{ $product['cost'] }} - Amount: {{ $product['amount'] }}</li>
        @endforeach
    </ul>
</body>
</html>
