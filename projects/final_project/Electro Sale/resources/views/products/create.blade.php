<!-- resources/views/products/create.blade.php -->

<form action="{{ route('home') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="product_name" class="block text-gray-700 font-bold mb-2">Product Name</label>
        <input type="text" name="product_name" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
        <input type="text" name="price" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
        <textarea name="description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <div class="mb-4">
        <label for="stock" class="block text-gray-700 font-bold mb-2">Stock</label>
        <input type="number" name="stock" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
        <select name="status" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
        <input type="file" name="image" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="text-center">
        <button type="submit" class="bg-blue-400 font-bold text-blue-500 px-4 py-2 border rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
    </div>
</form>
