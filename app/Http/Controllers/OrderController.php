<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Services\PaypackService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($data['product_id']);
        $total = $product->price * $data['quantity'];

        Order::create([
            'product_id' => $product->id,
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'quantity' => $data['quantity'],
            'total_price' => $total,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Order received! We will contact you to deliver.');
    }

    public function payWithPaypack(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string|max:50',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($data['product_id']);
        $total = $product->price * $data['quantity'];

        $paypack = PaypackService::fromConfig();
        if (! $paypack) {
            return back()->with('error', 'Pay with PayPack is not available. Use "Place order" and we will contact you for payment.');
        }

        $order = Order::create([
            'product_id' => $product->id,
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'quantity' => $data['quantity'],
            'total_price' => $total,
            'status' => 'pending',
            'payment_provider' => 'paypack',
        ]);

        try {
            $result = $paypack->cashin($data['phone'], $total);
            $ref = $result['ref'] ?? $result['reference'] ?? null;
            if ($ref) {
                $order->update(['payment_reference' => $ref]);
            }
        } catch (\Throwable $e) {
            $order->update(['payment_provider' => null]);
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('order.thankyou')->with('success', 'Payment request sent. Check your phone (MTN/Airtel) to complete payment.');
    }
}
