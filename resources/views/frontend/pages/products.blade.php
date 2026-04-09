@extends('frontend.layouts.apps')

@section('title', 'Buy Google Voice, Gmail & TextNow Accounts Online | gotextvoice')
@section('description', 'Shop verified Google Voice, Gmail, and TextNow accounts at gotextvoice. Bulk accounts, fast delivery, and secure payment available.')

@section('content')
<main>
    <div class="page active">
        <div class="pt-24 lg:pt-28 pb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- PAGE HEADER -->
                <div class="mb-8">
                    <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-2">All Accounts</h1>
                    <p class="text-slate-600">Explore our full collection of Google Voice, Gmail, and TextNow accounts with best prices and fast delivery.</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">

                    <!-- FILTER SIDEBAR -->
                    <aside class="w-full lg:w-64 flex-shrink-0">
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 sticky top-24">
                            <h2 class="font-semibold text-slate-900 mb-4">Filters</h2>

                            <!-- CATEGORY FILTER -->
                            <div class="mb-6">
                                <h3 class="text-sm font-medium text-slate-700 mb-3">Category</h3>
                                <div class="space-y-2" id="category-filters">
                                    <label class="flex items-center cursor-pointer">
                                        <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center transition-colors">
                                            <input type="radio" name="category" value="all"
                                            {{ request('category') == null || request('category') == 'all' ? 'checked' : '' }}
                                            onchange="window.location.href='{{ route('products') }}'">
                                        </span>
                                        <span class="text-slate-600 text-sm">All Categories</span>
                                    </label>

                                    @forelse ($categories as $category)
                                        <label class="flex items-center cursor-pointer">
                                            <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center transition-colors">
                                                <input type="radio" name="category" value="{{ $category->id }}"
                                                {{ request('category') == $category->id ? 'checked' : '' }}
                                                onchange="window.location.href='{{ route('products') }}?category={{ $category->id }}'">
                                            </span>
                                            <span class="text-slate-600 text-sm">{{ $category->name }} Accounts</span>
                                        </label>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- PRODUCTS GRID -->
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-6">
                            <p class="text-slate-600 text-sm"><span id="product-count">{{ $products->count() }}</span> accounts available</p>
                        </div>

                        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6" id="products-grid">
                            @forelse ($products as $product)
                                <a href="{{ route('product.show', $product->slug) }}" class="block">
                                    <article class="product-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 cursor-pointer group">
                                        <div class="aspect-square overflow-hidden bg-slate-100">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }} Google Voice/Gmail Account" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                                        </div>
                                        <div class="p-4">
                                            <p class="text-xs text-indigo-600 font-medium uppercase tracking-wide mb-1">{{ $product->category->name ?? '' }}</p>
                                            <h3 class="font-semibold text-slate-900 mb-1 truncate">{{ $product->product_name }}</h3>
                                            <p class="text-slate-900 font-bold">${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </article>
                                </a>
                            @empty
                                <p class="text-slate-600">No accounts found in this category.</p>
                            @endforelse
                        </div>

                        {{ $products->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection