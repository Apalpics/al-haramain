<x-guest-layout>

    <div class="max-w-5xl mx-auto py-12 px-6">

        <h1 class="text-3xl font-bold gold mb-8">My Orders</h1>

        @if($orders->count() === 0)
            <p class="text-gray-400">You have no orders yet.</p>

            <a href="{{ route('shop.index') }}" class="btn-primary mt-6 inline-block">
                Shop Now
            </a>

        @else

            <div class="space-y-4">

                @foreach($orders as $order)
                    <a href="{{ route('orders.show', $order) }}">
                        <div class="bg-[#1f1f24] p-5 rounded-xl border border-soft shadow card-hover">
                            
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-lg font-semibold gold">
                                        Order #{{ $order->id }}
                                    </p>

                                    <p class="text-gray-400 text-sm mt-1">
                                        {{ $order->created_at->format('d M Y, h:i A') }}
                                    </p>

                                    <p class="text-gray-300 mt-2">
                                        Status:
                                        <span class="gold capitalize">{{ $order->status }}</span>
                                    </p>
                                </div>

                                <div class="text-right">
                                    <p class="text-xl font-bold gold">
                                        RM {{ number_format($order->total, 2) }}
                                    </p>

                                    <p class="text-gray-500 mt-2">View →</p>
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach

            </div>

        @endif

    </div>

</x-guest-layout>
