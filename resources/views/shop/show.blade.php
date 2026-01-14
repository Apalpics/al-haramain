<x-guest-layout>
    <div class="max-w-4xl mx-auto py-12 px-4">
        <a class="underline opacity-80" href="{{ route('shop.index') }}">← Back to shop</a>

        <div class="mt-6 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/2">
                    @if($product->image)
                        <img class="w-full rounded"
                             src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}">
                    @else
                        <div class="w-full h-64 rounded bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                            No Image
                        </div>
                    @endif
                </div>

                <div class="md:w-1/2">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        {{ $product->name }}
                    </h1>

                    <p class="opacity-80 mt-1">
                        {{ ucfirst($product->category) }}
                    </p>

                    <div class="mt-4 text-xl text-gray-900 dark:text-gray-100">
                        RM {{ number_format($product->price, 2) }}
                    </div>

                    @if($product->description)
                        <p class="mt-4 text-gray-700 dark:text-gray-300">
                            {{ $product->description }}
                        </p>
                    @endif

                    <div class="mt-4 text-sm opacity-80">
                        Stock: {{ $product->stock }}
                    </div>

                    <div class="mt-6 p-4 rounded border border-gray-300 dark:border-gray-700">
                        <p class="font-semibold mb-2">Details</p>
                        <ul class="text-sm opacity-90 space-y-1">
                            @if($product->size)
                                <li>Size: {{ $product->size }}</li>
                            @endif
                            @if($product->color)
                                <li>Color: {{ $product->color }}</li>
                            @endif
                            @if($product->notes)
                                <li>Notes: {{ $product->notes }}</li>
                            @endif
                        </ul>
                    </div>

                    <div class="mt-6">
                        <form method="POST" action="{{ route('cart.add', $product) }}">
                            @csrf
                            <button type="submit"
                                    class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-700">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
