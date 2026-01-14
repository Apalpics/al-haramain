<x-guest-layout>
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">
            Cart
        </h1>

        @if(session('success'))
            <div class="mb-4 p-3 rounded bg-green-100 text-green-900">
                {{ session('success') }}
            </div>
        @endif

        @if(empty($cart))
            <p class="opacity-80">Your cart is empty.</p>
            <a class="underline mt-4 inline-block" href="{{ route('shop.index') }}">Go shopping</a>
        @else
            <div class="space-y-4">
                @foreach($cart as $id => $item)
                    <div class="flex items-center justify-between bg-white dark:bg-gray-800 p-4 rounded shadow">
                        <div class="flex items-center gap-4">
                            @if(!empty($item['image']))
                                <img class="w-16 h-16 object-cover rounded"
                                     src="{{ asset('storage/' . $item['image']) }}"
                                     alt="{{ $item['name'] }}">
                            @else
                                <div class="w-16 h-16 rounded bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-xs">
                                    No Image
                                </div>
                            @endif

                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">{{ $item['name'] }}</p>
                                <p class="text-sm opacity-80">RM {{ number_format($item['price'], 2) }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <form method="POST" action="{{ route('cart.update', $id) }}" class="flex items-center gap-2">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                       min="1" class="w-20 rounded border-gray-300">
                                <button class="underline">Update</button>
                            </form>

                            <form method="POST" action="{{ route('cart.remove', $id) }}">
                                @csrf
                                <button class="text-red-500 underline">Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 text-xl font-semibold text-gray-900 dark:text-gray-100">
                Total: RM {{ number_format($total, 2) }}
            </div>

            <div class="mt-4">
                <a href="{{ route('shop.index') }}" class="underline">Continue shopping</a>
            </div>
        @endif
    </div>
</x-guest-layout>
