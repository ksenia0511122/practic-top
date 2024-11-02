<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказы</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('components.header')
    <div class="container mt-5">
        <h1 class="mb-4">Заказы</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Название товара</th>
                    <th>Количество</th>
                    <th>Дата создания</th>
                    <th>Email пользователя</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->user_email }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            @if ($order->status === 'new')
                                <form action="{{ route('orders.approve', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Одобрить</button>
                                </form>
                            @elseif ($order->status === 'approved')
                                <form action="{{ route('orders.deliver', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Доставить</button>
                                </form>
                            @elseif ($order->status === 'delivered')
                                <span class="text-success">Доставлено</span>
                            @endif

                            @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
