<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            // В контроллере
    $products = Product::all(); // Это вернет коллекцию моделей
    return view('products', compact('products'));

    }
    // метод для отображения всех продуктов

    public function show($id)
    {
        $product = Product::findOrFail($id);
        //  найти продукт по его идентификатору
        return view('show', compact('product'));
        // возвращает представление, compact создает массив product
    }


}
