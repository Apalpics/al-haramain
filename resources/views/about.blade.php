<x-guest-layout>

    <section class="relative">
        <img src="{{ asset('storage/about_banner.jpg') }}"
             class="w-full h-[420px] object-cover brightness-75">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-5xl font-bold text-white drop-shadow-xl">About Us</h1>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-6 py-20 text-gray-800 dark:text-gray-200 leading-relaxed">

        <h2 class="text-3xl font-bold mb-6 text-yellow-600">Who We Are</h2>

        <p class="mb-6">
            Al Haramain is a luxury brand specializing in premium Arabian perfumes and elegant thawbs.
            Our mission is to bring authentic Middle Eastern craftsmanship to the world.
        </p>

        <h2 class="text-3xl font-bold mt-12 mb-6 text-yellow-600">Our Values</h2>

        <ul class="list-disc ml-6 space-y-3">
            <li>Authentic Arabian fragrance craftsmanship</li>
            <li>High-quality fabrics for premium thawbs</li>
            <li>Affordable luxury for everyone</li>
        </ul>

        <h2 class="text-3xl font-bold mt-12 mb-6 text-yellow-600">Our Promise</h2>

        <p>
            We promise excellence in quality, fair pricing, and unforgettable experiences with every product.
        </p>

    </div>

</x-guest-layout>
