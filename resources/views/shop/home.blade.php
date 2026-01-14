<x-guest-layout>
    <div class="max-w-6xl mx-auto py-12 px-4">
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                Al Haramain Perfumes & Thawbs
            </h1>
            <p class="mt-2 text-gray-600 dark:text-gray-300">
                Elegance in every thread, captivation in every scent.
            </p>

            <div class="mt-6 flex justify-center gap-3">
                <a href="{{ route('shop.index', ['category' => 'perfume']) }}"
                   class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-700">
                    Browse Perfumes
                </a>
                <a href="{{ route('shop.index', ['category' => 'thawb']) }}"
                   class="px-4 py-2 rounded border border-gray-400 text-gray-900 dark:text-gray-100">
                    Browse Thawbs
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Latest Perfumes</h2>
                <div class="grid grid-cols-2 gap-4">
                    @forelse($latestPerfumes as $p)
                        <a href="{{ route('shop.show', $p) }}" class="block border rounded p-3 hover:opacity-90">
                            <div class="font-semibold">{{ $p->name }}</div>
                            <div class="text-sm opacity-80">RM {{ number_format($p->price, 2) }}</div>
                        </a>
                    @empty
                        <p class="opacity-80">No perfumes yet.</p>
                    @endforelse
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Latest Thawbs</h2>
                <div class="grid grid-cols-2 gap-4">
                    @forelse($latestThawbs as $t)
                        <a href="{{ route('shop.show', $t) }}" class="block border rounded p-3 hover:opacity-90">
                            <div class="font-semibold">{{ $t->name }}</div>
                            <div class="text-sm opacity-80">RM {{ number_format($t->price, 2) }}</div>
                        </a>
                    @empty
                        <p class="opacity-80">No thawbs yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

