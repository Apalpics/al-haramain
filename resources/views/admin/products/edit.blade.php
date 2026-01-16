<x-app-layout>

    <h1 class="text-3xl font-bold text-gold mb-8">Edit Product</h1>

    <form method="POST"
          action="{{ route('admin.products.update', $product) }}"
          enctype="multipart/form-data"
          class="card p-6 space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input name="name" value="{{ $product->name }}" class="input" required>
        </div>

        <div>
            <label>Category</label>
            <select name="category" class="input">
                <option value="perfume" {{ $product->category === 'perfume' ? 'selected' : '' }}>Perfume</option>
                <option value="thawb" {{ $product->category === 'thawb' ? 'selected' : '' }}>Thawb</option>
            </select>
        </div>

        <div>
            <label>Description</label>
            <textarea name="description" class="input h-24">{{ $product->description }}</textarea>
        </div>

        <div>
            <label>Price (RM)</label>
            <input name="price" type="number" step="0.01" class="input"
                   value="{{ $product->price }}" required>
        </div>

        <div>
            <label>Stock</label>
            <input name="stock" type="number" min="0" class="input"
                   value="{{ $product->stock }}" required>
        </div>

        {{-- IMAGE PREVIEW --}}
        <div>
            <p class="mb-2">Current Image:</p>
            <img src="{{ asset('storage/' . $product->image) }}"
                 class="w-32 rounded mb-3">

            <input type="file" name="image" class="input">
        </div>

        {{-- OPTIONAL FIELDS --}}
        <div>
            <label>Size (Thawb)</label>
            <input name="size" class="input" value="{{ $product->size }}">
        </div>

        <div>
            <label>Color (Thawb)</label>
            <input name="color" class="input" value="{{ $product->color }}">
        </div>

        <div>
            <label>Notes (Perfume)</label>
            <input name="notes" class="input" value="{{ $product->notes }}">
        </div>

        <button class="btn-primary w-full">Save Changes</button>

    </form>

</x-app-layout>
