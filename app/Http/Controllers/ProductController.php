<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
<<<<<<< HEAD
   {
        $products = Product::all();

        return view("products.index", compact("products"));
   }
    public function show($id) 
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
=======
    {
        $products = Product::all();
        return view('products.index', compact('products'));
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
    }
}
