<x-app-layout>

    <h1 class="section-title mb-8">Orders</h1>

    @foreach($orders as $order)
        <a href="{{ route('admin.orders.show', $order) }}">
            <div class="admin-list-item">
                <p>#{{ $order->id }} — {{ $order->customer_name }}</p>
                <p class="gold">RM {{ number_format($order->total, 2) }}</p>
            </div>
        </a>
    @endforeach

</x-app-layout>
