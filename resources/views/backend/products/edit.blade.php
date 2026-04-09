@extends('backend.layouts.apps')

@section('content')
<div class="p-6 w-full">

    <div>
        <div class=" flex items-center justify-between mb-4">
            <div>
                <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
            </div>
            <div>
                <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Category -->
        <label class="block mb-1 font-medium">Category</label>
        <select name="category_id" class="w-full border p-2 mb-1 @error('category_id') border-red-500 @enderror">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Product Name -->
        <label class="block mb-1 font-medium">Product Name</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}" class="w-full border p-2 mb-4 @error('product_name') border-red-500 @enderror">
        @error('product_name')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Price -->
        <label class="block mb-1 font-medium">Price</label>
        <input type="number" name="price" value="{{ $product->price }}" class="w-full border p-2 mb-4 @error('price') border-red-500 @enderror">
        @error('price')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Description -->
        <label class="block mb-1 font-medium">Description</label>
        <textarea name="description" class="w-full border p-2 mb-4 @error('description') border-red-500 @enderror">{{ $product->description }}</textarea>
        @error('description')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Image -->
        <label class="block mb-1 font-medium">Image</label>
        <input type="file" name="image" class="w-full border p-2 mb-4">
        @error('image')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Status -->
        <select name="status" class="w-full border p-2 mb-4">
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Quantity -->
        <label class="block mb-1 font-medium">Quantity</label>
        <input type="number" name="quantity" placeholder="0" value="{{ ($product->quantity) }}" class="w-full border p-2 mb-4 @error('quantity') border-red-500 @enderror">
        @error('quantity')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <!-- Features -->
        <label class="block mb-1 font-medium">Features</label>
        <div id="feature-wrapper">
            @foreach($product->features as $feature)
                <div class="flex mb-2">
                    <input type="text" name="feature_name[]" value="{{ $feature->feature_name }}" class="w-full border p-2">
                    <button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2">X</button>
                </div>
            @endforeach
        </div>
        @error('feature_name.*')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        <button type="button" onclick="addFeature()" class="bg-gray-500 text-white px-2 py-1 mb-4">
            + Add Feature
        </button>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full">
            Update Product
        </button>
    </form>
</div>

<script>
function addFeature() {
    let html = `
    <div class="flex mb-2">
        <input type="text" name="feature_name[]" class="w-full border p-2">
        <button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2">X</button>
    </div>`;
    document.getElementById('feature-wrapper').insertAdjacentHTML('beforeend', html);
}
</script>

@endsection