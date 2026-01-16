<x-guest-layout>

    <div class="max-w-4xl mx-auto px-6 py-12">

        <h1 class="section-title">Checkout</h1>

        <form action="{{ route('checkout.place') }}" method="POST" class="checkout-form">
            @csrf

            <input type="text" name="customer_name" class="input" placeholder="Full Name" required>
            <input type="text" name="phone" class="input" placeholder="Phone">
            <textarea name="address" class="input" placeholder="Full Address" required></textarea>

            <button class="btn-primary mt-4 w-full">Place Order</button>
        </form>

    </div>

</x-guest-layout>
