<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $products = Product::all(); // Это вернет коллекцию моделей
    return view('products', compact('products'));
    }
    // метод для отображения всех продуктов
}
