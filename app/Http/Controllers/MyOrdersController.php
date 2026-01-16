<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // Security: user can only view their own order
        abort_unless($order->user_id === Auth::id(), 403);

        $order->load('items');

        return view('orders.show', compact('order'));
    }
}
