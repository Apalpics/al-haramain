<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($errors->any())
                        <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
                            <ul class="list-disc pl-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf

                        <div>
                            <label class="block mb-1">Name</label>
                            <input name="name" value="{{ old('name') }}" class="w-full rounded border-gray-300" required>
                        </div>

                        <div>
                            <label class="block mb-1">Category</label>
                            <select name="category" class="w-full rounded border-gray-300" required>
                                <option value="perfume" @selected(old('category')==='perfume')>Perfume</option>
                                <option value="thawb" @selected(old('category')==='thawb')>Thawb</option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1">Description</label>
                            <textarea name="description" class="w-full rounded border-gray-300" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block mb-1">Price (RM)</label>
                                <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="w-full rounded border-gray-300" required>
                            </div>
                            <div>
                                <label class="block mb-1">Stock</label>
                                <input type="number" name="stock" value="{{ old('stock', 0) }}" class="w-full rounded border-gray-300" required>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1">Image</label>
                            <input type="file" name="image" class="w-full">
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label class="block mb-1">Size (thawb)</label>
                                <input name="size" value="{{ old('size') }}" class="w-full rounded border-gray-300">
                            </div>
                            <div>
                                <label class="block mb-1">Color (thawb)</label>
                                <input name="color" value="{{ old('color') }}" class="w-full rounded border-gray-300">
                            </div>
                            <div>
                                <label class="block mb-1">Notes (perfume)</label>
                                <input name="notes" value="{{ old('notes') }}" class="w-full rounded border-gray-300">
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-700" type="submit">
                                Save
                            </button>
                            <a class="px-4 py-2 rounded border" href="{{ route('admin.products.index') }}">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
