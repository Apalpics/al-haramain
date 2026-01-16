<x-guest-layout>

    <div class="max-w-5xl mx-auto px-6 py-12">

        <h1 class="section-title">Your Cart</h1>

        @if(!$cart)
            <p class="text-gray-400">Your cart is empty.</p>
            <a href="{{ route('shop.index') }}" class="btn-primary mt-6 inline-block">
                Continue Shopping
            </a>

        @else

            @foreach($cart as $id => $item)
                <div class="cart-item">

                    <img src="{{ asset('storage/' . $item['image']) }}" class="cart-img">

                    <div class="cart-details">
                        <p class="text-lg font-semibold">{{ $item['name'] }}</p>
                        <p class="gold font-bold">
                            RM {{ number_format($item['price'], 2) }}
                        </p>

                        <form action="{{ route('cart.update', $id) }}" method="POST" class="qty-box">
                            @csrf
                            <input type="number" name="quantity" min="1" value="{{ $item['quantity'] }}" class="qty-input">
                            <button class="btn-small">Update</button>
                        </form>

                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button class="remove-link">Remove</button>
                        </form>
                    </div>

                </div>
            @endforeach

            <div class="cart-total-box">
                <p class="text-xl">Total: <span class="gold">RM {{ number_format($total, 2) }}</span></p>
                <a href="{{ route('checkout.show') }}" class="btn-primary w-full mt-4">Checkout</a>
            </div>

        @endif

    </div>

</x-guest-layout>
