<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Products
            </h2>

            <a href="{{ route('admin.products.create') }}"
               class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-700">
                + Add Product
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th class="py-2">Name</th>
                                    <th class="py-2">Category</th>
                                    <th class="py-2">Price</th>
                                    <th class="py-2">Stock</th>
                                    <th class="py-2 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr class="border-b border-gray-100 dark:border-gray-700">
                                        <td class="py-2">{{ $product->name }}</td>
                                        <td class="py-2">{{ ucfirst($product->category) }}</td>
                                        <td class="py-2">RM {{ number_format($product->price, 2) }}</td>
                                        <td class="py-2">{{ $product->stock }}</td>
                                        <td class="py-2 text-right space-x-2">
                                            <a class="underline" href="{{ route('admin.products.edit', $product) }}">Edit</a>

                                            <form class="inline" method="POST" action="{{ route('admin.products.destroy', $product) }}"
                                                  onsubmit="return confirm('Delete this product?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="underline text-red-400" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="py-4" colspan="5">No products yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
