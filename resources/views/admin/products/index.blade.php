<x-app-layout>

    <div class="flex justify-between items-center mb-8">
        <h1 class="section-title">Products</h1>
        <a href="{{ route('admin.products.create') }}" class="btn-primary">Add Product</a>
    </div>

    <div class="admin-table">

        @foreach($products as $product)
            <div class="admin-row">

                <img src="{{ asset('storage/' . $product->image) }}" class="admin-img">

                <div>
                    <p class="font-semibold">{{ $product->name }}</p>
                    <p class="text-gray-400 text-sm">{{ ucfirst($product->category) }}</p>
                </div>

                <p class="gold font-bold">
                    RM {{ number_format($product->price, 2) }}
                </p>

                <div class="flex gap-3">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn-small">Edit</a>

                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}">
                        @csrf @method('DELETE')
                        <button class="btn-small bg-red-600 hover:bg-red-500">Delete</button>
                    </form>
                </div>

            </div>
        @endforeach

    </div>

</x-app-layout>
