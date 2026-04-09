@extends('backend.layouts.apps')

@section('content')
<div class="p-6 w-full">

@if(session('success'))
<div class="bg-green-100 p-2 mb-3">{{ session('success') }}</div>
@endif

<div class="grid grid-cols-2 gap-4">
    <div class="bg-white p-4  rounded shadow">

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Category -->
            <label class="block mb-1 font-medium">Category</label>
            <select name="category_id" class="w-full border p-2 mb-4" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <!-- Product Name -->
            <label class="block mb-1 font-medium">Product Name</label>
            <input type="text" name="product_name" placeholder="Product Name" value="{{ old('product_name') }}" class="w-full border p-2 mb-4" required>

            <!-- Price -->
            <label class="block mb-1 font-medium">Price</label>
            <input type="number" name="price" placeholder="Price" value="{{ old('price') }}" class="w-full border p-2 mb-4" required>

            <!-- Description -->
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" placeholder="Description" class="w-full border p-2 mb-4">{{ old('description') }}</textarea>

            <!-- Image -->
            <label class="block mb-1 font-medium">Product Image</label>
            <input type="file" name="image" class="w-full border p-2 mb-4" accept="image/*">

            <!-- Status -->
            <label class="block mb-1 font-medium">Status</label>
            <select name="status" class="w-full border p-2 mb-4">
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
            </select>

            <!-- Stock -->
            <label class="block mb-1 font-medium">Stock</label>
            <input type="number" name="stock" placeholder="Stock" value="{{ old('stock', 0) }}" class="w-full border p-2 mb-4">

            <!-- Quantity -->
            <label class="block mb-1 font-medium">Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity" value="{{ old('quantity', 0) }}" class="w-full border p-2 mb-4">

            <!-- Features -->
            <label class="block mb-1 font-medium">Features</label>
            <div id="feature-wrapper">
                @if(old('feature_name'))
                    @foreach(old('feature_name') as $feature)
                        <input type="text" name="feature_name[]" placeholder="Feature" value="{{ $feature }}" class="w-full border p-2 mb-2">
                    @endforeach
                @else
                    <input type="text" name="feature_name[]" placeholder="Feature" class="w-full border p-2 mb-2">
                @endif
            </div>

            <button type="button" onclick="addFeature()" class="bg-gray-500 text-white px-2 py-1 mb-4">
                + Add Feature
            </button>

            <button class="bg-blue-500 text-white px-4 py-2 w-full">
                Save Product
            </button>
        </form>

        <script>
        function addFeature() {
            const wrapper = document.getElementById('feature-wrapper');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'feature_name[]';
            input.placeholder = 'Feature';
            input.className = 'w-full border p-2 mb-2';
            wrapper.appendChild(input);
        }
        </script>

    </div>
    <div class="bg-white p-4 rounded shadow h-auto max-w-screen overflow-y-auto">

        <table class="table-auto">
  <thead>
    <tr>
      <th>Song</th>
      <th>Artist</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
      <td>Malcolm Lockyer</td>
      <td>1961</td>
    </tr>
    <tr>
      <td>Witchy Woman</td>
      <td>The Eagles</td>
      <td>1972</td>
    </tr>
    <tr>
      <td>Shining Star</td>
      <td>Earth, Wind, and Fire</td>
      <td>1975</td>
    </tr>
  </tbody>
</table>

    </div>
</div>
</div>

<script>
function addFeature() {
    let html = `
    <div class="flex mb-2">
        <input type="text" name="feature_name[]" class="w-full border p-2">
        <button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2">X</button>
    </div>
    `;
    document.getElementById('feature-wrapper').insertAdjacentHTML('beforeend', html);
}
</script>

@endsection