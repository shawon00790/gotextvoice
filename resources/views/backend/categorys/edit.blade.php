@extends('backend.layouts.apps')

@section('content')
<div class="p-6">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-2 gap-6">
        <!-- 🔵 Edit Category -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-4">Edit Category</h2>

            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <input type="text" name="name"
                       value="{{ old('name', $category->name) }}"
                       class="w-full border p-2 mb-3 rounded"
                       placeholder="Category Name" required>

                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <!-- Current Image -->
                @if($category->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $category->image) }}"
                             class="w-20 h-20 object-cover rounded">
                    </div>
                @endif

                <!-- New Image -->
                <input type="file" name="image" class="w-full border p-2 mb-3 rounded">

                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <button class="bg-yellow-500 text-white px-4 py-2 rounded w-full">
                    Update Category
                </button>
            </form>
        </div>
    </div>
</div>
@endsection