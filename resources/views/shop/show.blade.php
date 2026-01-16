<x-guest-layout>

    <div class="max-w-5xl mx-auto px-6 py-12">

        <a href="{{ route('shop.index') }}" class="back-link">← Back to Shop</a>

        <div class="product-show">

            {{-- IMAGE --}}
            <img src="{{ asset('storage/' . $product->image) }}"
                 class="product-show-img">

            {{-- DETAILS --}}
            <div class="product-show-details">
                <h1 class="text-3xl font-bold gold">{{ $product->name }}</h1>

                <p class="text-gray-400 mt-1 capitalize">{{ $product->category }}</p>

                <p class="text-3xl gold mt-4 font-bold">
                    RM {{ number_format($product->price, 2) }}
                </p>

                <p class="mt-6 text-gray-300">{{ $product->description }}</p>

                {{-- ADD TO CART --}}
                <form method="POST" action="{{ route('cart.add', $product) }}" class="mt-8">
                    @csrf
                    <button class="btn-primary w-full">Add to Cart</button>
                </form>
            </div>

        </div>

    </div>

</x-guest-layout>
