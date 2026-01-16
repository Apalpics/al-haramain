<x-guest-layout>

    <div class="max-w-5xl mx-auto py-12 px-6">

        <a href="{{ route('orders.index') }}" class="text-gray-400 hover:text-gold">
            ← Back to My Orders
        </a>

        <h1 class="text-3xl font-bold gold mt-6">Order #{{ $order->id }}</h1>

        <p class="text-gray-400 mt-2">
            {{ $order->created_at->format('d M Y, h:i A') }}
        </p>

        {{-- DELIVERY INFO --}}
        <div class="bg-[#1f1f24] p-6 rounded-xl border border-soft mt-8 shadow">

            <h2 class="text-xl font-semibold mb-4 gold">Delivery Info</h2>

            <p><span class="text-gray-400">Name:</span> {{ $order->customer_name }}</p>
            <p><span class="text-gray-400">Phone:</span> {{ $order->phone }}</p>
            <p><span class="text-gray-400">Address:</span> {{ $order->address }}</p>

        </div>

        {{-- ORDER SUMMARY --}}
        <div class="bg-[#1f1f24] p-6 rounded-xl border border-soft mt-6 shadow">

            <h2 class="text-xl font-semibold mb-4 gold">Order Summary</h2>

            <p><span class="text-gray-400">Status:</span>
                <span class="gold capitalize">{{ $order->status }}</span>
            </p>

            <p class="mt-2 text-xl font-bold">
                Total:
                <span class="gold">RM {{ number_format($order->total, 2) }}</span>
            </p>

        </div>

        {{-- ITEMS --}}
        <div class="bg-[#1f1f24] p-6 rounded-xl border border-soft mt-6 shadow">

            <h2 class="text-xl font-semibold mb-4 gold">Items</h2>

            @foreach($order->items as $item)
                <div class="flex justify-between border-b border-soft pb-3 mb-3">
                    <div>
                        <p class="font-medium">{{ $item->product_name }}</p>
                        <p class="text-gray-400 text-sm">
                            RM {{ number_format($item->unit_price, 2) }} × {{ $item->quantity }}
                        </p>
                    </div>

                    <p class="gold font-bold">
                        RM {{ number_format($item->unit_price * $item->quantity, 2) }}
                    </p>
                </div>
            @endforeach

        </div>

    </div>

</x-guest-layout>
