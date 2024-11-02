<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product; // Импортируем модель Product


class AdminController extends Controller
{
    public function index()
    {
        // Проверка роли пользователя
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        // Получение всех заказов
        $orders = Order::all();

        return view('admin', compact('orders'));

    }

    public function approve($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'approved';
        $order->save();
        return redirect()->route('admin');
    }

    public function deliver($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'delivered';
        $order->save();

        return redirect()->route('admin');
    }

}
