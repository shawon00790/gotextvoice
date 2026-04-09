@extends('backend.layouts.apps')

@section('content')
  <div class="flex-1 flex flex-col">

    <!-- Content -->
    <main class="p-6 space-y-6 overflow-y-auto">
      <div class="p-6">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-2 gap-6">
        <!-- 🟢 Right: Category List -->
        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold mb-4">Category List</h2>
                <a href="{{ route('categories.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">
                    Add Category
                </a>
            </div>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="p-2">Name</th>
                        <th class="p-2">Image</th>
                        <th class="p-2">Slug</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr class="border-b">
                        <td class="p-2">{{ $category->name }}</td>
                        <td class="p-2">
                            @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-16 h-16 object-cover rounded">
                            @else
                                No Image
                            @endif
                        </td>

                        <td class="p-2">
                            {{ $category->slug }}
                        </td>

                        <td class="p-2 space-x-2 flex items-center justify-start">
                            <a href="{{ route('categories.edit', $category->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">
                                Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-2 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>

    </main>
  </div>
@endsection