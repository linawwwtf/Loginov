<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index']);

Route::get('/products',  function () {
    $products = [
        ["name" => "Orange", "cost" => 50000000, "amount" => 27],
    ["name" => "Banana", "cost" => 120000000, "amount" => 17],
    ["name" => "Bread", "cost" => 70000000, "amount" => 0],
    ];
    return view('products', ['products'=> $products]);
});
