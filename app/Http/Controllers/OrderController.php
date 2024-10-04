<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            //проверка на наличие продукта по его ID
            //должна быть целым числом и не меньше 1
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalAmount = $product->price * $request->quantity;

        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalAmount,
        ]);
        //метод создает новую запись в таблице order, используя данные о продукте, количестве и общей цене.

        return redirect()->route('show', $product->id)->with('success', 'Заказ успешно оформлен!');
    }


}
