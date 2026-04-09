<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
        
    </style>
</head>
<body class="antialiased">
    <!-- Overlay -->
    <div id="overlay" class="overlay fixed inset-0 bg-black/50 z-40" onclick="closeOverlays()"></div>
    
    <!-- Navigation -->
    
    
    <!-- Mobile Menu -->
    
    
    <!-- Cart Sidebar -->
    <div id="cart-sidebar" class="cart-sidebar fixed top-0 right-0 bottom-0 w-96 max-w-full bg-white z-50 shadow-2xl flex flex-col">
        <div class="flex items-center justify-between p-6 border-b border-slate-200">
            <span class="font-semibold text-slate-900">Your Cart</span>
            <button onclick="closeOverlays()" class="p-2 text-slate-600 hover:text-slate-900" aria-label="Close cart">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div id="cart-items" class="flex-1 overflow-y-auto p-6">
            <!-- Cart items will be rendered here -->
        </div>
        <div class="p-6 border-t border-slate-200 bg-slate-50">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-600">Subtotal</span>
                <span id="cart-total" class="text-xl font-semibold text-slate-900">$0.00</span>
            </div>
            <button onclick="navigateTo('checkout'); closeOverlays();" class="btn-primary w-full py-3 text-white font-medium rounded-xl">
                Checkout
            </button>
        </div>
    </div>
    
    <!-- Main Content -->
    <main>
        <!-- HOME PAGE -->
        <div id="page-home" class="page active">
            <!-- Hero Section -->
            <section class="hero-gradient pt-24 lg:pt-32 pb-16 lg:pb-24">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                        <div class="animate-in">
                            <p class="text-indigo-600 font-medium text-sm tracking-wide uppercase mb-4"> Collection From 2015</p>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight tracking-tight mb-6">
                                Buy Google Voice.<br/>
                                <span class="text-slate-400">Buy Bulk Gmail.</span>
                            </h1>
                            <p class="text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                                Quality best and validation must, price reasonable, always large quantity availabe
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button onclick="navigateTo('products')" class="btn-primary px-8 py-4 text-white font-medium rounded-xl text-center">
                                    Shop Collection
                                </button>
                                <button onclick="navigateTo('about')" class="px-8 py-4 border border-slate-300 text-slate-900 font-medium rounded-xl hover:border-slate-400 transition-colors text-center">
                                    Our Story
                                </button>
                            </div>
                        </div>
                        <div class="animate-in delay-200">
                            <div class="relative">
                                <div class="aspect-[5/4] rounded-3xl image-placeholder overflow-hidden shadow-2xl">
                                    <img src="{{ asset('images/gotextvoice.jpg') }}" alt="Featured furniture" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Featured Categories -->
            <section class="py-16 lg:py-24 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Shop by Category</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto">Explore our carefully curated collections designed to elevate every corner of your home.</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6" id="categories-grid">
                        <!-- Categories will be rendered here -->
                    </div>
                </div>
            </section>
            
            <!-- Featured Products -->
            <section class="py-16 lg:py-24">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between mb-12">
                        <div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-2">Trending Now</h2>
                            <p class="text-slate-600">Most loved pieces this season</p>
                        </div>
                        <button onclick="navigateTo('products')" class="hidden sm:flex items-center text-indigo-600 font-medium hover:text-indigo-700 transition-colors">
                            View All
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="featured-products">
                        <!-- Featured products will be rendered here -->
                    </div>
                </div>
            </section>
            
            <!-- Brand Promise -->
            <section class="py-16 lg:py-24 bg-slate-900 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Premium Quality</h3>
                            <p class="text-slate-400 leading-relaxed">Crafted with the finest materials and meticulous attention to detail.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Fast Delivery</h3>
                            <p class="text-slate-400 leading-relaxed">Free express shipping on all orders over $150. Delivered in 3-5 days.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">5-Year Warranty</h3>
                            <p class="text-slate-400 leading-relaxed">Complete peace of mind with our comprehensive warranty coverage.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- PRODUCTS PAGE -->
        <div id="page-products" class="page">
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mb-8">
                        <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-2">All Products</h1>
                        <p class="text-slate-600">Discover our complete collection of premium home goods</p>
                    </div>
                    
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Filters Sidebar -->
                        <aside class="w-full lg:w-64 flex-shrink-0">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 sticky top-24">
                                <h3 class="font-semibold text-slate-900 mb-4">Filters</h3>
                                
                                <!-- Category Filter -->
                                <div class="mb-6">
                                    <h4 class="text-sm font-medium text-slate-700 mb-3">Category</h4>
                                    <div class="space-y-2" id="category-filters">
                                        <!-- Category filters will be rendered here -->
                                    </div>
                                </div>
                                
                                <!-- Price Filter -->
                                <div class="mb-6">
                                    <h4 class="text-sm font-medium text-slate-700 mb-3">Price Range</h4>
                                    <div class="space-y-2" id="price-filters">
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="price" value="all" class="filter-checkbox sr-only" checked onchange="filterProducts()">
                                            <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center">
                                                <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
                                            </span>
                                            <span class="text-slate-600 text-sm">All Prices</span>
                                        </label>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="price" value="0-200" class="filter-checkbox sr-only" onchange="filterProducts()">
                                            <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center">
                                                <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
                                            </span>
                                            <span class="text-slate-600 text-sm">Under $200</span>
                                        </label>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="price" value="200-500" class="filter-checkbox sr-only" onchange="filterProducts()">
                                            <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center">
                                                <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
                                            </span>
                                            <span class="text-slate-600 text-sm">$200 - $500</span>
                                        </label>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="price" value="500+" class="filter-checkbox sr-only" onchange="filterProducts()">
                                            <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center">
                                                <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
                                            </span>
                                            <span class="text-slate-600 text-sm">$500+</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <button onclick="resetFilters()" class="w-full py-2 text-sm text-indigo-600 font-medium hover:text-indigo-700 transition-colors">
                                    Reset Filters
                                </button>
                            </div>
                        </aside>
                        
                        <!-- Products Grid -->
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-6">
                                <p class="text-slate-600 text-sm"><span id="product-count">0</span> products</p>
                                <select id="sort-select" onchange="sortProducts()" class="text-sm border border-slate-200 rounded-lg px-3 py-2 bg-white">
                                    <option value="featured">Featured</option>
                                    <option value="price-asc">Price: Low to High</option>
                                    <option value="price-desc">Price: High to Low</option>
                                    <option value="name">Name</option>
                                </select>
                            </div>
                            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6" id="products-grid">
                                <!-- Products will be rendered here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- PRODUCT DETAIL PAGE -->
        <div id="page-product" class="page">
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Breadcrumb -->
                    <nav class="mb-8">
                        <ol class="flex items-center space-x-2 text-sm">
                            <li><a href="#" onclick="navigateTo('home')" class="text-slate-500 hover:text-slate-900 transition-colors">Home</a></li>
                            <li><span class="text-slate-400">/</span></li>
                            <li><a href="#" onclick="navigateTo('products')" class="text-slate-500 hover:text-slate-900 transition-colors">Products</a></li>
                            <li><span class="text-slate-400">/</span></li>
                            <li><span id="breadcrumb-product" class="text-slate-900">Product</span></li>
                        </ol>
                    </nav>
                    
                    <div class="grid lg:grid-cols-2 gap-8 lg:gap-16">
                        <!-- Gallery -->
                        <div>
                            <div class="aspect-square rounded-2xl overflow-hidden bg-white shadow-sm mb-4">
                                <img id="product-main-image" src="" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="grid grid-cols-4 gap-4" id="product-thumbnails">
                                <!-- Thumbnails will be rendered here -->
                            </div>
                        </div>
                        
                        <!-- Product Info -->
                        <div>
                            <p id="product-category" class="text-indigo-600 font-medium text-sm tracking-wide uppercase mb-2">Category</p>
                            <h1 id="product-title" class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Product Name</h1>
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="ml-1 text-sm font-medium text-slate-900">4.9</span>
                                    <span class="ml-1 text-sm text-slate-500">(128 reviews)</span>
                                </div>
                                <span class="text-slate-300">|</span>
                                <span class="text-sm text-slate-600">In Stock</span>
                            </div>
                            <p id="product-price" class="text-3xl font-bold text-slate-900 mb-6">$0.00</p>
                            <p id="product-description" class="text-slate-600 leading-relaxed mb-8">Description goes here.</p>
                            
                            <!-- Quantity -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-slate-700 mb-2">Quantity</label>
                                <div class="flex items-center space-x-3">
                                    <button onclick="updateQuantity(-1)" class="w-10 h-10 border border-slate-200 rounded-lg flex items-center justify-center hover:border-slate-300 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </button>
                                    <span id="product-quantity" class="w-12 text-center font-medium text-slate-900">1</span>
                                    <button onclick="updateQuantity(1)" class="w-10 h-10 border border-slate-200 rounded-lg flex items-center justify-center hover:border-slate-300 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Add to Cart -->
                            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                                <button onclick="addToCart()" class="btn-primary flex-1 py-4 text-white font-medium rounded-xl flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <button class="w-14 h-14 border border-slate-200 rounded-xl flex items-center justify-center hover:border-slate-300 transition-colors" aria-label="Add to wishlist">
                                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Features -->
                            <div class="border-t border-slate-200 pt-6 space-y-4">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-slate-600">Free shipping on orders over $150</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-slate-600">30-day return policy</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-slate-600">5-year warranty included</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Products -->
                    <div class="mt-16 lg:mt-24">
                        <h2 class="text-2xl font-bold text-slate-900 mb-8">You May Also Like</h2>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="related-products">
                            <!-- Related products will be rendered here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CHECKOUT PAGE -->
        <div id="page-checkout" class="page">
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-8">Checkout</h1>
                    
                    <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                        <!-- Checkout Form -->
                        <div class="lg:col-span-2">
                            <form action="https://formspree.io/f/your_id" method="POST" id="checkout-form" onsubmit="return handleCheckout(event)">
                                <!-- Shipping Details -->
                                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-slate-100 mb-6">
                                    <h2 class="text-xl font-semibold text-slate-900 mb-6">Shipping Details</h2>
                                    <div class="grid sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                                            <input type="text" name="firstName" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                                            <input type="text" name="lastName" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                                            <input type="email" name="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Address</label>
                                            <input type="text" name="address" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">City</label>
                                            <input type="text" name="city" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">ZIP Code</label>
                                            <input type="text" name="zip" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Phone</label>
                                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Hidden cart data -->
                                <input type="hidden" name="cartData" id="checkout-cart-data">
                                <input type="hidden" name="orderTotal" id="checkout-order-total">
                                
                                <button type="submit" class="btn-primary w-full py-4 text-white font-medium rounded-xl text-lg">
                                    Place Order
                                </button>
                            </form>
                        </div>
                        
                        <!-- Order Summary -->
                        <div class="lg:col-span-1">
                            <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-slate-100 sticky top-24">
                                <h2 class="text-xl font-semibold text-slate-900 mb-6">Order Summary</h2>
                                <div id="checkout-items" class="space-y-4 mb-6 max-h-64 overflow-y-auto">
                                    <!-- Checkout items will be rendered here -->
                                </div>
                                <div class="border-t border-slate-200 pt-4 space-y-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-600">Subtotal</span>
                                        <span id="checkout-subtotal" class="font-medium text-slate-900">$0.00</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-600">Shipping</span>
                                        <span id="checkout-shipping" class="font-medium text-slate-900">$0.00</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-600">Tax</span>
                                        <span id="checkout-tax" class="font-medium text-slate-900">$0.00</span>
                                    </div>
                                    <div class="flex items-center justify-between text-lg font-semibold pt-3 border-t border-slate-200">
                                        <span class="text-slate-900">Total</span>
                                        <span id="checkout-total" class="text-slate-900">$0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ABOUT PAGE -->
        <div id="page-about" class="page">
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Hero -->
                    <div class="text-center mb-16 lg:mb-24">
                        <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Our Story</h1>
                        <p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                            Founded in 2018, LUXE began with a simple mission: to make exceptional design accessible to everyone. We believe that beautiful, well-crafted furniture shouldn't be a luxury reserved for the few.
                        </p>
                    </div>
                    
                    <!-- Story Image -->
                    <div class="aspect-[21/9] rounded-3xl overflow-hidden mb-16 lg:mb-24">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1400&auto=format&fit=crop" alt="Our workspace" class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Values -->
                    <div class="grid md:grid-cols-2 gap-12 lg:gap-16 mb-16 lg:mb-24">
                        <div>
                            <h2 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Design Philosophy</h2>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Every piece in our collection is the result of countless hours of refinement. We work with independent designers and skilled artisans who share our commitment to quality and sustainability. Our design language is intentionally understated — we let materials and craftsmanship speak for themselves.
                            </p>
                            <p class="text-slate-600 leading-relaxed">
                                From the initial sketch to the final product, we consider every detail. The result is furniture that feels as good as it looks, built to last for generations.
                            </p>
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800&auto=format&fit=crop" alt="Design process" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="bg-slate-900 rounded-3xl p-8 lg:p-16 mb-16 lg:mb-24">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                            <div>
                                <p class="text-4xl lg:text-5xl font-bold text-white mb-2">50K+</p>
                                <p class="text-slate-400">Happy Customers</p>
                            </div>
                            <div>
                                <p class="text-4xl lg:text-5xl font-bold text-white mb-2">200+</p>
                                <p class="text-slate-400">Unique Products</p>
                            </div>
                            <div>
                                <p class="text-4xl lg:text-5xl font-bold text-white mb-2">15</p>
                                <p class="text-slate-400">Countries Served</p>
                            </div>
                            <div>
                                <p class="text-4xl lg:text-5xl font-bold text-white mb-2">4.9</p>
                                <p class="text-slate-400">Average Rating</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team -->
                    <div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-8 text-center">Meet Our Team</h2>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="aspect-square rounded-2xl overflow-hidden mb-4">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&face" alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-slate-900">Marcus Chen</h3>
                                <p class="text-sm text-slate-500">Founder & CEO</p>
                            </div>
                            <div class="text-center">
                                <div class="aspect-square rounded-2xl overflow-hidden mb-4">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&auto=format&fit=crop&face" alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-slate-900">Sarah Williams</h3>
                                <p class="text-sm text-slate-500">Creative Director</p>
                            </div>
                            <div class="text-center">
                                <div class="aspect-square rounded-2xl overflow-hidden mb-4">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&auto=format&fit=crop&face" alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-slate-900">James Park</h3>
                                <p class="text-sm text-slate-500">Head of Design</p>
                            </div>
                            <div class="text-center">
                                <div class="aspect-square rounded-2xl overflow-hidden mb-4">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&auto=format&fit=crop&face" alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-slate-900">Emma Rodriguez</h3>
                                <p class="text-sm text-slate-500">Operations Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CONTACT PAGE -->
        <div id="page-contact" class="page">
            <div class="pt-24 lg:pt-28 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-3xl mx-auto">
                        <div class="text-center mb-12">
                            <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Get in Touch</h1>
                            <p class="text-lg text-slate-600 leading-relaxed">
                                Have a question about our products or need help with an order? We're here to help. Fill out the form below and we'll get back to you within 24 hours.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-sm border border-slate-100">
                            <form action="https://formspree.io/f/your_id" method="POST" id="contact-form">
                                <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Name</label>
                                        <input type="text" name="name" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                                        <input type="email" name="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                                    <input type="text" name="subject" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                </div>
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                                    <textarea name="message" rows="5" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all resize-none"></textarea>
                                </div>
                                <button type="submit" class="btn-primary w-full py-4 text-white font-medium rounded-xl">
                                    Send Message
                                </button>
                            </form>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="grid sm:grid-cols-3 gap-6 mt-12">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-slate-900 mb-1">Email</h3>
                                <p class="text-slate-600 text-sm">gotextvoice@gmail.com</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-slate-900 mb-1">Phone</h3>
                                <p class="text-slate-600 text-sm">+88 01233-456733</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-slate-900 mb-1">Location</h3>
                                <p class="text-slate-600 text-sm">San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    
    
    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white px-6 py-4 rounded-xl shadow-lg transform translate-y-20 opacity-0 transition-all z-50">
        <p id="toast-message">Item added to cart</p>
    </div>
</body>
</html>