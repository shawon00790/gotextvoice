@extends('frontend.layouts.apps')

@section('title', 'Single Product - gotextvoice')
@section('description', 'Welcome to single product page, here you can buy google voice, textnow, old gmail, gmail and many more accounts with best price and fast delivery.')

@section('content')
    <main>
        <div>
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Breadcrumb -->
                    <nav class="mb-8">
                        <ol class="flex items-center space-x-2 text-sm">
                            <li><a href="{{ route('index') }}" onclick="navigateTo('home')" class="text-slate-500 hover:text-slate-900 transition-colors">Home</a></li>
                            <li><span class="text-slate-400">/</span></li>
                            <li><a href="{{ route('products') }}" onclick="navigateTo('products')" class="text-slate-500 hover:text-slate-900 transition-colors">Products</a></li>
                            <li><span class="text-slate-400">/</span></li>
                            <li><span id="breadcrumb-product" class="text-slate-900">{{ $product->product_name }}</span></li>
                        </ol>
                    </nav>
                    
                    <div class="grid lg:grid-cols-2 gap-8 lg:gap-16">
                        <!-- Gallery -->
                        <div>
                            <div class="aspect-square rounded-2xl overflow-hidden bg-white shadow-sm mb-4">
                                <img id="product-main-image" src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&amp;auto=format&amp;fit=crop" alt="Meridian Lounge Chair" class="w-full h-full object-cover">
                            </div>
                            
                        </div>
                        
                        <!-- Product Info -->
                        <div>
                            <p id="product-category" class="text-indigo-600 font-medium text-sm tracking-wide uppercase mb-2">{{ $product->category->name }}</p>
                            <h1 id="product-title" class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">{{ $product->product_name }}</h1>
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.8１h3.46１a１ １ ０ ００.９５１-.６９l１.０７-３.２９２z"></path>
                                    </svg>
                                    @if ($product->rating)
                                        <span class="ml-1 text-sm font-medium text-slate-900">{{ $product->rating }}</span>
                                    @endif
                                    @if ($product->reviews)
                                        <span class="ml-1 text-sm text-slate-500">( {{ $product->reviews }} reviews)</span>
                                    @endif
                                </div>
                                <span class="text-slate-300">|</span>
                                <span class="text-sm text-slate-600">In Stock({{ $product->quantity }})</span>
                            </div>
                            <p id="product-price" class="text-3xl font-bold text-slate-900 mb-6">${{ number_format($product->price, 2) }}</p>
                            <!-- Features -->
                            <div class="border-t border-slate-200 pt-6 space-y-4">
                                @forelse ( $features as $feature )
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-sm text-slate-700">{{ $feature->feature_name }}</p>
                                    </div>
                                    
                                @empty
                                    
                                @endforelse
                            </div>
                            <!-- Add to Cart -->
                            <div class="py-5">                           
                                <form class="flex flex-col sm:flex-row gap-4 mb-8" action="{{ route('checkout.page') }}" method="GET" onsubmit="return syncQuantity()">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                       
                                    <input name="quantity" class="p-3 border border-green-200 rounded" type="number" id="product-quantity"
                                        class="w-12 text-center font-medium text-slate-900 border rounded"
                                        value="1" min="1">
                                    <button type="submit" class="btn-primary flex-1 py-4 text-white font-medium rounded-xl flex items-center justify-center space-x-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                        <span>Buy Now</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Products -->
                    <div class="mt-16 lg:mt-24">
                        <h2 class="text-2xl font-bold text-slate-900 mb-8">You May Also Like</h2>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="related-products">
                            @forelse ( $products as $product )
                                <a href="{{ route('product.show', $product->slug) }}" class="block">
                                    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&amp;auto=format&amp;fit=crop" alt="{{ $product->product_name }}" class="w-full h-48 object-cover">
                                        <div class="p-4">
                                            <h3 class="text-lg font-medium text-slate-900 mb-2">{{ $product->product_name }}</h3>
                                            <p class="text-sm text-slate-600 mb-4">{{ $product->category->name }}</p>
                                            <p class="text-lg font-bold text-slate-900">${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    

    <script>
    function updateQuantity(change) {
        let input = document.getElementById('product-quantity');

        let current = parseInt(input.value) || 1;

        current += change;

        // minimum limit
        if (current < 1) current = 1;

        input.value = current;
    }

    // manual input edit korleo valid thakbe
    document.getElementById('product-quantity').addEventListener('input', function() {
        let val = parseInt(this.value) || 1;

        if (val < 1) val = 1;

        this.value = val;
    });
    </script>
@endsection