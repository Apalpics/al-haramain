<x-guest-layout>

    <section class="relative">
        <img src="{{ asset('storage/contact_banner.jpg') }}"
             class="w-full h-[420px] object-cover brightness-75">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-5xl font-bold text-white drop-shadow-xl">Contact Us</h1>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6 py-20">

        <form class="space-y-6 bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg">

            <div>
                <label class="font-semibold">Full Name</label>
                <input type="text" class="w-full p-3 border rounded-lg">
            </div>

            <div>
                <label class="font-semibold">Email</label>
                <input type="email" class="w-full p-3 border rounded-lg">
            </div>

            <div>
                <label class="font-semibold">Message</label>
                <textarea class="w-full p-3 border rounded-lg h-32"></textarea>
            </div>

            <button class="px-6 py-3 bg-yellow-500 text-black font-bold rounded-lg">
                Send Message
            </button>

        </form>

    </div>

</x-guest-layout>
