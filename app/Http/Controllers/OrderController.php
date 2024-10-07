<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;


class OrderController extends Controller
{
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::findOrFail($id);
        $totalAmount = $product->price * $request->quantity;

        Order::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_amount' => $totalAmount
        ]);

        return redirect()->route('products.show', $id)->with('message', 'Заказ успешно оформлен!');
    }
}
