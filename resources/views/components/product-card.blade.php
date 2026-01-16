<div class="card card-hover overflow-hidden">
    <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-56 object-cover">
    <div class="p-4">
        <h3 class="font-semibold">{{ $product->name }}</h3>
        <p class="opacity-60 text-sm">{{ ucfirst($product->category) }}</p>
        <p class="mt-2 font-bold gold">
            RM {{ number_format($product->price, 2) }}
        </p>
    </div>
</div>
