<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('items');
       return view('admin.orders.show', compact('order'));
    }

    // ✅ Clean: One method handles status update
    // ✅ If admin cancels an order, we restore stock (only once)
    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'status' => ['required', 'in:pending,processing,shipped,completed,cancelled'],
        ]);

        DB::transaction(function () use ($order, $data) {

            $oldStatus = $order->status;
            $newStatus = $data['status'];

            // If switching to cancelled (and it was not cancelled before) => restore stock
            if ($newStatus === 'cancelled' && $oldStatus !== 'cancelled') {
                $order->load('items');

                foreach ($order->items as $item) {
                    if ($item->product_id) {
                        Product::where('id', $item->product_id)
                            ->increment('stock', (int) $item->quantity);
                    }
                }
            }

            // If changing from cancelled to something else => keep it simple
            // (We won't re-deduct stock to avoid confusing logic for now.)

            $order->update([
                'status' => $newStatus,
            ]);
        });

        return redirect()
            ->route('admin.orders.show', $order)
            ->with('success', 'Order status updated successfully.');
    }
}
