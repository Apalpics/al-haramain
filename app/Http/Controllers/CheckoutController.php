<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('success', 'Your cart is empty.');
        }

        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        return view('checkout.show', compact('cart', 'total'));
    }

    public function place(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('success', 'Your cart is empty.');
        }

        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:2000'],
        ]);

        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        $order = Order::create([
            'user_id' => Auth::id(),
            'customer_name' => $data['customer_name'],
            'phone' => $data['phone'] ?? null,
            'address' => $data['address'],
            'status' => 'pending',
            'total' => $total,
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'product_name' => $item['name'],
                'unit_price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }

        // clear cart after order is placed
        session()->forget('cart');

        return redirect()->route('checkout.success', $order);
    }

    public function success(Order $order)
    {
        // quick safety: only allow admin OR the user who placed it
        if (!Auth::user() || (!Auth::user()->is_admin && $order->user_id !== Auth::id())) {
            abort(403);
        }

        $order->load('items');

        return view('checkout.success', compact('order'));
    }
}
