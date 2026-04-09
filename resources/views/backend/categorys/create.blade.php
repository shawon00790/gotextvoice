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
        <!-- 🔵 Left: Add Category -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-4">Add Category</h2>
            

            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="name" placeholder="Category Name"
                       class="w-full border p-2 mb-3 rounded" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <input type="file" name="image" class="w-full border p-2 mb-3 rounded">
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                <button class="bg-blue-500 text-white px-4 py-2 rounded w-full">
                    Add Category
                </button>
            </form>
        </div>
    </div>
</div>
@endsection