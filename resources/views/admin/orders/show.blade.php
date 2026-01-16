<x-app-layout>

    <a href="{{ route('admin.orders.index') }}" class="back-link">← Back</a>

    <h1 class="section-title mt-6">Order #{{ $order->id }}</h1>

    <div class="admin-order-box">

        <div>
            <h3 class="gold font-semibold text-xl mb-3">Customer</h3>
            <p>Name: {{ $order->customer_name }}</p>
            <p>Phone: {{ $order->phone }}</p>
            <p>Address: {{ $order->address }}</p>
        </div>

        <div>
            <h3 class="gold font-semibold text-xl mb-3">Order</h3>
            <p>Status: <span class="gold">{{ $order->status }}</span></p>
            <p>Total: <span class="gold">RM {{ number_format($order->total, 2) }}</span></p>
        </div>

    </div>

    <h2 class="gold font-semibold text-xl mt-10">Items</h2>

    @foreach($order->items as $item)
        <div class="admin-list-item mt-4">
            <p>{{ $item->product_name }}</p>
            <p class="gold">RM {{ number_format($item->unit_price * $item->quantity, 2) }}</p>
        </div>
    @endforeach

</x-app-layout>
