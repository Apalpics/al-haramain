<x-guest-layout>

    <div class="flex justify-center items-center min-h-screen bg-black">

        <div class="w-full max-w-md bg-white dark:bg-gray-900 p-10 rounded-2xl shadow-xl border border-yellow-600">

            <h1 class="text-3xl font-bold text-center text-yellow-600 mb-8">
                Welcome Back
            </h1>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="font-semibold">Email</label>
                    <input type="email" name="email" class="w-full p-3 rounded-lg border">
                </div>

                <div>
                    <label class="font-semibold">Password</label>
                    <input type="password" name="password" class="w-full p-3 rounded-lg border">
                </div>

                <button class="w-full py-3 bg-yellow-500 text-black font-bold rounded-lg">
                    Log In
                </button>

            </form>

        </div>
    </div>

</x-guest-layout>
