<x-app-layout>

<h1 class="text-3xl font-bold mb-6">Add Product</h1>

<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Name" class="input">

    <select name="category" class="input">
        <option value="perfume">Perfume</option>
        <option value="thawb">Thawb</option>
    </select>

    <textarea name="description" placeholder="Description" class="input"></textarea>

    <input type="number" name="price" placeholder="Price (RM)" class="input">
    <input type="number" name="stock" placeholder="Stock" class="input">

    <input type="file" name="image" class="input">

    <input type="text" name="size" placeholder="Size (Thawb only)" class="input">
    <input type="text" name="color" placeholder="Color (Thawb only)" class="input">
    <input type="text" name="notes" placeholder="Notes (Perfume only)" class="input">

    <button class="btn-primary">Create Product</button>
</form>

</x-app-layout>
