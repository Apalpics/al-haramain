<x-guest-layout>
    <div class="max-w-6xl mx-auto py-12 px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Shop</h1>

            <form method="GET" action="{{ route('shop.index') }}" class="flex gap-2">
                <input type="hidden" name="category" value="{{ $category }}">
                <input name="search" value="{{ $search }}" placeholder="Search products..."
                       class="rounded border-gray-300">
                <button class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-700" type="submit">
                    Search
                </button>
            </form>
        </div>

        <div class="flex gap-3 mb-6">
            <a href="{{ route('shop.index') }}"
               class="px-3 py-1 rounded border {{ $category ? '' : 'bg-gray-900 text-white' }}">
                All
            </a>
            <a href="{{ route('shop.index', ['category' => 'perfume']) }}"
               class="px-3 py-1 rounded border {{ $category==='perfume' ? 'bg-gray-900 text-white' : '' }}">
                Perfumes
            </a>
            <a href="{{ route('shop.index', ['category' => 'thawb']) }}"
               class="px-3 py-1 rounded border {{ $category==='thawb' ? 'bg-gray-900 text-white' : '' }}">
                Thawbs
            </a>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($products as $product)
                <a href="{{ route('shop.show', $product) }}"
                   class="block bg-white dark:bg-gray-800 rounded-lg shadow p-4 hover:opacity-90">
                    <div class="font-semibold text-gray-900 dark:text-gray-100">{{ $product->name }}</div>
                    <div class="text-sm opacity-80">{{ ucfirst($product->category) }}</div>
                    <div class="mt-2 text-gray-900 dark:text-gray-100">RM {{ number_format($product->price, 2) }}</div>
                </a>
            @empty
                <p class="opacity-80">No products found.</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </div>
</x-guest-layout>

