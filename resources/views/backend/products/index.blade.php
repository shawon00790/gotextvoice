@extends('backend.layouts.apps')

@section('content')
<div class="p-6 w-full space-y-6">
    <div class=" flex justify-between items-center bg-gray-100 p-1 rounded shadow">
        <div>
            <h2 class="text-2xl font-bold mb-4">Product List</h2>
        </div>
        <div>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Product</a>
        </div>
    </div>
    <div class=" ">
        <table class="border-collapse border w-full">
            <thead>
                <tr>
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Price</th>
                    <th class="border p-2">Category</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Quantity</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr>
                    <td class="border p-2 text-center">{{ $key + 1 }}</td>
                    <td class="border p-2">
                        @if($product->image)
                            <img height="50" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-16 h-16 object-cover" alt="Product Image">
                        @endif
                    </td>
                    <td class="border p-2">{{ $product->product_name }}</td>
                    <td class="border p-2 text-center">{{ $product->price }}</td>
                    <td class="border p-2">{{ $product->category->name ?? 'N/A' }}</td>
                    <td class="border p-2 text-center">{{ $product->status ? 'Active' : 'Inactive' }}</td>
                    <td class="border p-2 text-center">{{ $product->quantity }}</td>
                    <td class="border p-2 text-center">
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                {{ $products->links() }}
        </table>
    </div>
</div>

@endsection