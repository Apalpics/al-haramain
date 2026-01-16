<x-app-layout title="Admin Panel">

<div class="max-w-4xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold text-gold">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

        {{-- ORDERS --}}
        <a href="{{ route('admin.orders.index') }}"
           class="p-6 bg-gray-800 rounded-xl border border-gray-700 hover:bg-gray-700 transition">
            <h2 class="text-xl font-bold text-white">Orders</h2>
            <p class="text-gray-400 mt-2">View all orders</p>
        </a>

        {{-- PRODUCTS --}}
        <a href="{{ route('admin.products.index') }}"
           class="p-6 bg-gray-800 rounded-xl border border-gray-700 hover:bg-gray-700 transition">
            <h2 class="text-xl font-bold text-white">Products</h2>
            <p class="text-gray-400 mt-2">Manage products</p>
        </a>

        {{-- STORE --}}
        <a href="{{ route('shop.index') }}"
           class="p-6 bg-gray-800 rounded-xl border border-gray-700 hover:bg-gray-700 transition">
            <h2 class="text-xl font-bold text-white">Store</h2>
            <p class="text-gray-400 mt-2">Visit storefront</p>
        </a>

    </div>
</div>

</x-app-layout>
