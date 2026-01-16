<nav class="bg-[#2a2d32] border-b border-soft shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <a href="{{ route('home') }}" class="text-xl font-semibold gold">
            Al Haramain
        </a>

        <div class="flex items-center gap-6 text-gray-200">

            <a href="{{ route('shop.index') }}" class="hover-gold">Shop</a>

            @auth
                <a href="{{ route('orders.index') }}" class="hover-gold">My Orders</a>

                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.dashboard') }}" class="hover-gold gold font-semibold">
                        Admin Panel
                    </a>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="hover-gold">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover-gold">Login</a>
                <a href="{{ route('register') }}" class="hover-gold">Register</a>
            @endauth
        </div>
    </div>
</nav>
