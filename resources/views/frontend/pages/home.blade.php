@extends('frontend.layouts.apps')

@section('title', 'Buy Google Voice & Gmail Accounts Online | gotextvoice')
@section('description', 'Buy verified Google Voice, Gmail, and TextNow accounts at gotextvoice. Get bulk accounts, fast delivery, secure payment, and best prices online.')

@section('content')
<main>
    <!-- HERO SECTION -->
    <section class="hero-gradient pt-24 lg:pt-32 pb-16 lg:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="animate-in">
                    <p class="text-indigo-600 font-medium text-sm tracking-wide uppercase mb-4">Trusted Since 2015</p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight tracking-tight mb-6">
                        Buy Verified Google Voice Accounts<br/>
                        <span class="text-slate-400">Bulk Gmail & TextNow Accounts</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                        Get verified accounts at the best prices. Fast delivery, secure payments, and large quantity availability for businesses and personal use.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('products') }}" onclick="navigateTo('products')" class="btn-primary px-8 py-4 text-white font-medium rounded-xl text-center">
                            Shop Accounts
                        </a>
                        <a href="{{ route('about') }}" onclick="navigateTo('about')" class="px-8 py-4 border border-slate-300 text-slate-900 font-medium rounded-xl hover:border-slate-400 transition-colors text-center">
                            Our Story
                        </a>
                    </div>
                </div>
                <div class="animate-in delay-200">
                    <div class="relative">
                        <div class="aspect-[5/4] rounded-3xl image-placeholder overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/gotextvoice.jpg') }}" alt="Buy Google Voice and Gmail accounts online" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED CATEGORIES -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Shop by Category</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Browse our collections of Google Voice, Gmail, and TextNow accounts, organized for easy selection.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-6" id="categories-grid">
                @forelse ($categories as $category)
                    <a href="{{ route('products', ['category' => $category->id]) }}" class="animate-in">
                        <div class="category-card aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }} accounts" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 flex items-end p-6">
                                <h3 class="text-white text-xl font-semibold mb-1">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-2">Trending Now</h2>
                    <p class="text-slate-600">Most popular Google Voice and Gmail accounts this season</p>
                </div>
                <a href="{{ route('products') }}" class="hidden sm:flex items-center text-indigo-600 font-medium hover:text-indigo-700 transition-colors">
                    View All
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="featured-products">
                @forelse ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}" class="block">
                        <article class="product-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 cursor-pointer group">
                            <div class="aspect-square overflow-hidden bg-slate-100">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }} account" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            </div>
                            <div class="p-4">
                                <p class="text-xs text-indigo-600 font-medium uppercase tracking-wide mb-1">{{ $product->category->name }}</p>
                                <h3 class="font-semibold text-slate-900 mb-1 truncate">{{ $product->product_name }}</h3>
                                <p class="text-slate-900 font-bold">${{ number_format($product->price, 2) }}</p>
                            </div>
                        </article>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- BRAND PROMISE -->
    <section class="py-16 lg:py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Seamless Gmail Integration</h2>
                    <p class="text-slate-400 leading-relaxed">Connect all your Gmail accounts effortlessly for fast communication and bulk management.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Instant Google Voice Calls</h2>
                    <p class="text-slate-400 leading-relaxed">Make and receive calls instantly from anywhere with Google Voice, keeping you globally connected.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Reliable Security & Backup</h2>
                    <p class="text-slate-400 leading-relaxed">Enjoy peace of mind with Google Voice and Gmail’s robust security features and seamless backup options.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection