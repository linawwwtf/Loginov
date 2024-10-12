<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\OrderController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/order', [OrderController::class, 'store'])->name('product.order');




=======

Route::get('/product', [ProductController::class, 'index']);

Route::get('/products',  function () {
    $products = [
        ["name" => "Orange", "cost" => 50000000, "amount" => 27],
    ["name" => "Banana", "cost" => 120000000, "amount" => 17],
    ["name" => "Bread", "cost" => 70000000, "amount" => 0],
    ];
    return view('products', ['products'=> $products]);
});
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
