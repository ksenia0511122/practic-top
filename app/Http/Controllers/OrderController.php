<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::where('user_id', auth()->id())->get();
    return view('index', compact('orders'));

}

    public function __construct()
    {
        $this->middleware('auth');
        // проводит проверку
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalAmount = $product->price * $request->quantity;

        // Создание заказа
        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalAmount,
            'user_id'=>auth()->id(), // Установка ID текущего пользователя
        ]);



        return redirect()->route('show', $product->id)->with('success', 'Заказ успешно оформлен!');
    }
}
