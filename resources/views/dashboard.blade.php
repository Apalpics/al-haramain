<x-app-layout>

    <div class="max-w-5xl mx-auto px-6 py-20">

        <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-10">
            Welcome, {{ auth()->user()->name }}
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <a href="{{ route('orders.index') }}" class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow border border-yellow-600 text-center">
                <h2 class="text-2xl font-bold mb-2">My Orders</h2>
                <p class="opacity-70">View your order history</p>
            </a>

            <a href="{{ route('profile.edit') }}" class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow border border-yellow-600 text-center">
                <h2 class="text-2xl font-bold mb-2">Profile</h2>
                <p class="opacity-70">Edit your personal info</p>
            </a>

            <a href="{{ route('shop.index') }}" class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow border border-yellow-600 text-center">
                <h2 class="text-2xl font-bold mb-2">Shop</h2>
                <p class="opacity-70">Continue shopping</p>
            </a>

        </div>

    </div>

</x-app-layout>
