<x-guest-layout>

    {{-- HERO SECTION --}}
    <section class="relative w-full h-[550px] overflow-hidden">
        <img src="{{ asset('storage/hero_home.jpg') }}"
             class="absolute inset-0 w-full h-full object-cover brightness-75" />

        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
            <h1 class="text-5xl font-bold text-white drop-shadow-xl">Luxury Perfumes & Thawbs</h1>
            <p class="text-gray-200 mt-3 text-lg drop-shadow-lg">
                Crafted for elegance. Inspired by heritage.
            </p>
            <a href="{{ route('shop.index') }}"
               class="mt-6 px-6 py-3 bg-gold text-black rounded-lg font-semibold hover:bg-yellow-500 transition">
                Shop Now
            </a>
        </div>
    </section>

    {{-- CATEGORY SECTION --}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl text-center mb-12 text-gold">Shop By Category</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            {{-- PERFUMES --}}
            <a href="{{ route('shop.index', ['category' => 'perfume']) }}">
                <div class="relative rounded-xl overflow-hidden shadow-lg group">
                    <img src="{{ asset('storage/perfume_category.jpg') }}"
                         class="w-full h-64 object-cover group-hover:scale-110 transition" />
                    <div class="absolute inset-0 flex justify-center items-center bg-black/40">
                        <h3 class="text-white text-3xl font-bold">Perfumes</h3>
                    </div>
                </div>
            </a>

            {{-- THAWBS --}}
            <a href="{{ route('shop.index', ['category' => 'thawb']) }}">
                <div class="relative rounded-xl overflow-hidden shadow-lg group">
                    <img src="{{ asset('storage/thawb_category.jpg') }}"
                         class="w-full h-64 object-cover group-hover:scale-110 transition" />
                    <div class="absolute inset-0 flex justify-center items-center bg-black/40">
                        <h3 class="text-white text-3xl font-bold">Thawbs</h3>
                    </div>
                </div>
            </a>

        </div>
    </section>

</x-guest-layout>
