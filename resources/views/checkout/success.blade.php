<x-guest-layout>

    <div class="max-w-4xl mx-auto px-6 py-12 text-center">

        <h1 class="section-title">Order Placed!</h1>

        <p class="text-gray-300 mt-3">
            Your order #{{ $order->id }} has been placed successfully.
        </p>

        <p class="text-gray-400 mt-3">Thank you for shopping with us.</p>

        <a href="{{ route('orders.show', $order) }}" class="btn-primary mt-6 inline-block">
            View Order
        </a>

    </div>

</x-guest-layout>
