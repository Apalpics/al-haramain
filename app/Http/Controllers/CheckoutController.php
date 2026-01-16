<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(fn($item) => (float)$item['price'] * (int)$item['quantity']);

        return view('checkout.show', compact('cart', 'total'));
    }

    public function place(Request $request)
    {
        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'phone'         => ['nullable', 'string', 'max:50'],
            'address'       => ['required', 'string', 'max:500'],
        ]);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        try {
            $order = DB::transaction(function () use ($data, $cart) {

                $productIds = array_map('intval', array_keys($cart));
                $products = Product::whereIn('id', $productIds)->lockForUpdate()->get()->keyBy('id');

                // ✅ Validate: exists + enough stock
                foreach ($cart as $productId => $item) {
                    $productId = (int) $productId;

                    if (!$products->has($productId)) {
                        throw new \Exception("A product in your cart no longer exists.");
                    }

                    $product = $products[$productId];
                    $qty = (int) $item['quantity'];

                    if ($qty < 1) {
                        throw new \Exception("Invalid quantity in cart.");
                    }

                    if ((int)$product->stock < $qty) {
                        throw new \Exception("Not enough stock for {$product->name}. Available: {$product->stock}");
                    }
                }

                // ✅ Total from DB price (more correct than session)
                $total = 0;
                foreach ($cart as $productId => $item) {
                    $productId = (int) $productId;
                    $product = $products[$productId];
                    $qty = (int) $item['quantity'];
                    $total += ((float)$product->price) * $qty;
                }

                // Create order
               $order = Order::create([
    'user_id'       => Auth::id(),
    'customer_name' => $data['customer_name'],
    'phone'         => $data['phone'] ?? null,
    'address'       => $data['address'],
    'total'         => $total,
    'status'        => 'pending',
]);

                // Create items + deduct stock
                foreach ($cart as $productId => $item) {
                    $productId = (int) $productId;
                    $product = $products[$productId];
                    $qty = (int) $item['quantity'];

                    OrderItem::create([
                        'order_id'     => $order->id,
                        'product_id'   => $productId,
                        'product_name' => $product->name,
                        'unit_price'   => (float) $product->price,
                        'quantity'     => $qty,
                    ]);

                    // ✅ Deduct stock
                    $product->decrement('stock', $qty);
                }

                return $order;
            });

        } catch (\Throwable $e) {
            return redirect()->route('cart.index')->with('error', $e->getMessage());
        }

        session()->forget('cart');

        return redirect()->route('checkout.success', $order);
    }

    public function success(Order $order)
    {
        $order->load('items');

        return view('checkout.success', compact('order'));
    }
}
