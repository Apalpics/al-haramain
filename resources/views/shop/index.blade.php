<x-guest-layout>

    <h1 class="text-3xl font-bold mb-6">Shop</h1>

    <!-- FILTERS -->
    <form method="GET" class="flex gap-4 mb-6">
        <select name="category" class="input w-40">
            <option value="">All</option>
            <option value="perfume">Perfumes</option>
            <option value="thawb">Thawbs</option>
        </select>

        <input type="text" name="search" placeholder="Search…" class="input w-64">

        <button class="btn-primary">Search</button>
    </form>

    <!-- PRODUCTS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @foreach($products as $product)
            <a href="{{ route('shop.show', $product) }}">
                <div class="card card-hover overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-72 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="opacity-60 text-sm">{{ ucfirst($product->category) }}</p>
                        <p class="mt-2 font-bold text-yellow-500">RM {{ number_format($product->price, 2) }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-guest-layout>
