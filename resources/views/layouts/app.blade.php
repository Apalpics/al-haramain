<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-gray-100">

    {{-- ADMIN NAV --}}
    <nav class="bg-[#111] border-b border-soft">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

            <a href="{{ route('admin.dashboard') }}" class="text-xl gold font-bold">Admin Panel</a>

            <div class="flex items-center gap-6">
                <a href="{{ route('admin.products.index') }}" class="nav-link">Products</a>
                <a href="{{ route('admin.orders.index') }}" class="nav-link">Orders</a>
                <a href="{{ route('home') }}" class="nav-link">Store</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="nav-link">Logout</button>
                </form>
            </div>

        </div>
    </nav>

    <main class="max-w-6xl mx-auto py-10 px-6">
        {{ $slot }}
    </main>

</body>
</html>
