<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Show checkout page for a single product (albums shop).
     * Query: product_id, quantity (optional, default 1).
     */
    public function show(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1|max:99',
        ]);

        $product = Product::where('is_active', true)->findOrFail($request->product_id);
        $quantity = (int) ($request->quantity ?? 1);
        $total = $product->price * $quantity;

        return view('website.checkout', [
            'product' => $product,
            'quantity' => $quantity,
            'total' => $total,
        ]);
    }
}
