<?php

namespace App\Http\Controllers;

// routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    $products = [
        ["name" => "Orange", "cost" => 50000000, "amount" => 27],
        ["name" => "Banana", "cost" => 120000000, "amount" => 17],
        ["name" => "Bread", "cost" => 70000000, "amount" => 0],
    ];

    return view('products', ['products' => $products]);
});



