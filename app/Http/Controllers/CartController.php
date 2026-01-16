<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(fn($item) => (float)$item['price'] * (int)$item['quantity']);

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Product $product)
    {
        // ✅ Block if out of stock
        if ((int)$product->stock <= 0) {
            return redirect()->back()->with('error', 'Sorry, this product is out of stock.');
        }

        $cart = session()->get('cart', []);

        // current qty in cart (if exists)
        $currentQty = isset($cart[$product->id]) ? (int)$cart[$product->id]['quantity'] : 0;

        // ✅ Block if trying to add beyond stock
        if ($currentQty >= (int)$product->stock) {
            return redirect()->back()->with('error', 'You already reached the maximum available stock for this product.');
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name'     => $product->name,
                'price'    => (float)$product->price,  // keep price
                'quantity' => 1,
                'image'    => $product->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function update(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$product->id])) {
            return redirect()->back();
        }

        $qty = (int) $request->quantity;

        // minimum 1
        if ($qty < 1) $qty = 1;

        // ✅ max = stock
        $maxStock = (int) $product->stock;

        // if product now out of stock, remove it
        if ($maxStock <= 0) {
            unset($cart[$product->id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('error', 'This product became out of stock and was removed from your cart.');
        }

        if ($qty > $maxStock) {
            $qty = $maxStock;
        }

        $cart[$product->id]['quantity'] = $qty;
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated');
    }

    public function remove(Product $product)
    {
        $cart = session()->get('cart', []);
        unset($cart[$product->id]);

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed');
    }
}
