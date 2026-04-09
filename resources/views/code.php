<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOTEXTVOICE — Google voice and gmail buy sale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#4f46e5',
                        dark: '#0f172a',
                        light: '#f8fafc',
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        :root {
            --bg: #f8fafc;
            --fg: #0f172a;
            --muted: #64748b;
            --accent: #4f46e5;
            --card: #ffffff;
            --border: #e2e8f0;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            background-color: var(--bg);
            color: var(--fg);
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        
        .glass-dark {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        
        .page {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
            display: none;
        }
        
        .page.active {
            opacity: 1;
            transform: translateY(0);
            display: block;
        }
        
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 40px -10px rgba(79, 70, 229, 0.5);
        }
        
        .image-placeholder {
            background: linear-gradient(135deg, #e2e8f0 0%, #f1f5f9 50%, #e2e8f0 100%);
            background-size: 200% 200%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-in {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        .gallery-thumb {
            transition: all 0.3s ease;
        }
        
        .gallery-thumb.active {
            border-color: var(--accent);
            opacity: 1;
        }
        
        .gallery-thumb:not(.active) {
            opacity: 0.6;
        }
        
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
        
        .cart-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .filter-checkbox:checked + label {
            color: var(--accent);
            font-weight: 500;
        }
        
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f8fafc 100%);
        }
        
        .category-card {
            position: relative;
            overflow: hidden;
        }
        
        .category-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.8) 0%, transparent 60%);
            transition: opacity 0.3s ease;
        }
        
        .category-card:hover::before {
            opacity: 0.9;
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .cart-sidebar {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }
        
        .cart-sidebar.open {
            transform: translateX(0);
        }
        
        .overlay {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        
        .overlay.open {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Overlay -->
    <div id="overlay" class="overlay fixed inset-0 bg-black/50 z-40" onclick="closeOverlays()"></div>
    
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 glass border-b border-slate-200/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="#" onclick="navigateTo('home')" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-slate-900 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">GTV</span>
                    </div>
                    <span class="text-slate-900 font-semibold text-lg tracking-tight">GOTEXTVOICE</span>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" onclick="navigateTo('home')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Home</a>
                    <a href="#" onclick="navigateTo('products')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Products</a>
                    <a href="#" onclick="navigateTo('about')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">About</a>
                    <a href="#" onclick="navigateTo('contact')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Contact</a>
                </div>
                
                <!-- Actions -->
                <div class="flex items-center space-x-4">
                    <button onclick="toggleCart()" class="relative p-2 text-slate-600 hover:text-slate-900 transition-colors" aria-label="Shopping cart">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <span id="cart-count" class="cart-badge absolute -top-1 -right-1 w-5 h-5 bg-indigo-600 text-white text-xs rounded-full flex items-center justify-center font-medium hidden">0</span>
                    </button>
                    
                    <!-- Mobile Menu Button -->
                    <button onclick="toggleMobileMenu()" class="lg:hidden p-2 text-slate-600 hover:text-slate-900 transition-colors" aria-label="Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 bottom-0 w-80 max-w-full bg-white z-50 shadow-2xl">
        <div class="flex items-center justify-between p-6 border-b border-slate-200">
            <span class="font-semibold text-slate-900">Menu</span>
            <button onclick="closeOverlays()" class="p-2 text-slate-600 hover:text-slate-900" aria-label="Close menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="p-6 space-y-4">
            <a href="#" onclick="navigateTo('home'); closeOverlays();" class="block py-3 text-slate-900 font-medium border-b border-slate-100">Home</a>
            <a href="#" onclick="navigateTo('products'); closeOverlays();" class="block py-3 text-slate-900 font-medium border-b border-slate-100">Products</a>
            <a href="#" onclick="navigateTo('about'); closeOverlays();" class="block py-3 text-slate-900 font-medium border-b border-slate-100">About</a>
            <a href="#" onclick="navigateTo('contact'); closeOverlays();" class="block py-3 text-slate-900 font-medium border-b border-slate-100">Contact</a>
        </div>
    </div>
    
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
                            <p class="text-indigo-600 font-medium text-sm tracking-wide uppercase mb-4">New Collection 2024</p>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight tracking-tight mb-6">
                                Timeless Design.<br/>
                                <span class="text-slate-400">Modern Living.</span>
                            </h1>
                            <p class="text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                                Discover curated pieces that transform your space into a sanctuary of style and comfort. Premium quality, thoughtful design.
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
                                <div class="aspect-[4/5] rounded-3xl image-placeholder overflow-hidden shadow-2xl">
                                    <img src="google voice buy sale.png" alt="Featured furniture" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 animate-in delay-300">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-slate-900">Free Shipping</p>
                                            <p class="text-sm text-slate-500">On orders over $150</p>
                                        </div>
                                    </div>
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
    <footer class="bg-slate-900 text-white py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center">
                            <span class="text-slate-900 font-bold text-sm">GTV</span>
                        </div>
                        <span class="font-semibold text-lg">GOTEXTVOICE</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">Trusted google voice and gmail buy sale supplers here. Thoughtfully creating, expertly making.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Shop</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" onclick="navigateTo('products')" class="hover:text-white transition-colors">All Products</a></li>
                        <li><a href="#" onclick="filterByCategory('Living Room')" class="hover:text-white transition-colors">Gmail</a></li>
                        <li><a href="#" onclick="filterByCategory('Bedroom')" class="hover:text-white transition-colors">Google Voice</a></li>
                        <li><a href="#" onclick="filterByCategory('Office')" class="hover:text-white transition-colors">Text Now</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" onclick="navigateTo('about')" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" onclick="navigateTo('contact')" class="hover:text-white transition-colors">Contact</a></li>
                        <!-- <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Press</a></li> -->
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Shipping</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Returns</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Warranty</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row items-center justify-between">
                <p class="text-slate-400 text-sm mb-4 sm:mb-0">2026 GTV. All rights reserved.</p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white px-6 py-4 rounded-xl shadow-lg transform translate-y-20 opacity-0 transition-all z-50">
        <p id="toast-message">Item added to cart</p>
    </div>

    <script>
        // ==================== DATA ====================
        const products = [
            {
                id: 1,
                name: "Meridian Lounge Chair",
                category: "Living Room",
                price: 849,
                description: "A masterclass in modern comfort. The Meridian Lounge Chair features a solid oak frame with hand-stitched leather upholstery. Each piece is crafted by skilled artisans using traditional techniques passed down through generations.",
                images: [
                    "https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1506439773649-6e0eb8cfb237?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1550254478-ead40cc54513?w=800&auto=format&fit=crop"
                ],
                featured: true
            },
            {
                id: 2,
                name: "Oslo Coffee Table",
                category: "Living Room",
                price: 425,
                description: "Scandinavian simplicity meets functional design. The Oslo Coffee Table is crafted from solid walnut with brass accents. Its clean lines and warm wood tones make it a perfect centerpiece for any modern living space.",
                images: [
                    "https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1532372320572-cda25653a26d?w=800&auto=format&fit=crop"
                ],
                featured: true
            },
            {
                id: 3,
                name: "Vertex Standing Desk",
                category: "Office",
                price: 1299,
                description: "Transform your workspace with the Vertex Standing Desk. Features a whisper-quiet motorized lift system, solid bamboo top, and integrated cable management. Designed for the modern professional who values both form and function.",
                images: [
                    "https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1593062096033-9a26b09da705?w=800&auto=format&fit=crop"
                ],
                featured: true
            },
            {
                id: 4,
                name: "Aria Bed Frame",
                category: "Bedroom",
                price: 1650,
                description: "Sleep in style with the Aria Bed Frame. Its floating platform design creates an illusion of space, while the upholstered headboard provides a comfortable backdrop for reading. Available in king and queen sizes.",
                images: [
                    "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=800&auto=format&fit=crop",
                    "https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=800&auto=format&fit=crop"
                ],
                featured: true
            },
            {
                id: 5,
                name: "Echo Bookshelf",
                category: "Living Room",
                price: 595,
                description: "More than storage, the Echo Bookshelf is a sculptural statement. Its asymmetrical design creates visual interest while providing ample space for books and display objects. Made from powder-coated steel and solid oak.",
                images: [
                    "https://images.unsplash.com/photo-1594620302200-9a762244a156?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 6,
                name: "Zenith Pendant Light",
                category: "Living Room",
                price: 289,
                description: "Illuminate your space with the Zenith Pendant Light. Its hand-blown glass shade creates a warm, diffused glow perfect for dining areas or entryways. Includes adjustable suspension cable for customized height.",
                images: [
                    "https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 7,
                name: "Comfort Executive Chair",
                category: "Office",
                price: 799,
                description: "Premium ergonomics meet refined aesthetics. The Comfort Executive Chair features adjustable lumbar support, breathable mesh back, and memory foam seat. Perfect for long work sessions without compromising on style.",
                images: [
                    "https://images.unsplash.com/photo-1580480055273-228ff5388ef8?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 8,
                name: "Minimalist Nightstand",
                category: "Bedroom",
                price: 345,
                description: "Understated elegance for your bedside. The Minimalist Nightstand features a soft-close drawer and open shelf for books. Crafted from solid ash with a natural oil finish that ages beautifully over time.",
                images: [
                    "https://images.unsplash.com/photo-1499933374294-4584851497cc?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 9,
                name: "Artisan Floor Lamp",
                category: "Living Room",
                price: 395,
                description: "Hand-cast concrete base meets linen shade in this striking floor lamp. The Artisan's industrial-chic aesthetic adds character to any corner, while the warm light creates an inviting atmosphere.",
                images: [
                    "https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 10,
                name: "Heritage Dresser",
                category: "Bedroom",
                price: 1295,
                description: "A timeless piece built to last generations. The Heritage Dresser features eight spacious drawers with dovetail joinery and soft-close slides. Made from solid cherry wood with hand-rubbed finish.",
                images: [
                    "https://images.unsplash.com/photo-1558997519-83ea9252edf8?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 11,
                name: "Modular Sofa System",
                category: "Living Room",
                price: 2499,
                description: "Design your perfect seating arrangement. The Modular Sofa System allows you to configure and reconfigure as your needs change. Premium down-blend cushions and kiln-dried hardwood frame ensure lasting comfort.",
                images: [
                    "https://images.unsplash.com/photo-1550581190-9c1c48d21d6c?w=800&auto=format&fit=crop"
                ],
                featured: false
            },
            {
                id: 12,
                name: "Wireless Charging Desk Pad",
                category: "Office",
                price: 149,
                description: "Upgrade your workspace with this sleek wireless charging pad. Italian leather exterior with integrated Qi charging technology. Compatible with all Qi-enabled devices.",
                images: [
                    "https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=800&auto=format&fit=crop"
                ],
                featured: false
            }
        ];

        const categories = [
            { name: "Living Room", image: "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&auto=format&fit=crop" },
            { name: "Bedroom", image: "https://images.unsplash.com/photo-1540518614846-7eded433c457?w=600&auto=format&fit=crop" },
            { name: "Office", image: "https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&auto=format&fit=crop" }
        ];

        // ==================== STATE ====================
        let cart = [];
        let currentProduct = null;
        let productQuantity = 1;
        let activeFilters = {
            category: 'all',
            price: 'all'
        };

        // ==================== INITIALIZATION ====================
        document.addEventListener('DOMContentLoaded', () => {
            loadCart();
            renderCategories();
            renderFeaturedProducts();
            renderCategoryFilters();
            renderProducts();
            updateCartUI();
        });

        // ==================== NAVIGATION ====================
        function navigateTo(page, productId = null) {
            // Hide all pages
            document.querySelectorAll('.page').forEach(p => {
                p.classList.remove('active');
            });
            
            // Show target page
            const targetPage = document.getElementById(`page-${page}`);
            if (targetPage) {
                targetPage.classList.add('active');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
            
            // Handle product detail
            if (page === 'product' && productId) {
                loadProduct(productId);
            }
            
            // Update checkout if navigating there
            if (page === 'checkout') {
                updateCheckoutPage();
            }
        }

        // ==================== CART MANAGEMENT ====================
        function loadCart() {
            const savedCart = localStorage.getItem('luxe-cart');
            if (savedCart) {
                cart = JSON.parse(savedCart);
            }
        }

        function saveCart() {
            localStorage.setItem('luxe-cart', JSON.stringify(cart));
        }

        function addToCart() {
            if (!currentProduct) return;
            
            const existingItem = cart.find(item => item.id === currentProduct.id);
            
            if (existingItem) {
                existingItem.quantity += productQuantity;
            } else {
                cart.push({
                    id: currentProduct.id,
                    name: currentProduct.name,
                    price: currentProduct.price,
                    image: currentProduct.images[0],
                    quantity: productQuantity
                });
            }
            
            saveCart();
            updateCartUI();
            showToast(`${currentProduct.name} added to cart`);
            productQuantity = 1;
            document.getElementById('product-quantity').textContent = '1';
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            saveCart();
            updateCartUI();
            updateCheckoutPage();
        }

        function updateCartItemQuantity(productId, delta) {
            const item = cart.find(i => i.id === productId);
            if (item) {
                item.quantity += delta;
                if (item.quantity <= 0) {
                    removeFromCart(productId);
                } else {
                    saveCart();
                    updateCartUI();
                    updateCheckoutPage();
                }
            }
        }

        function updateCartUI() {
            const cartCount = document.getElementById('cart-count');
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');
            
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
            // Update badge
            if (totalItems > 0) {
                cartCount.textContent = totalItems;
                cartCount.classList.remove('hidden');
            } else {
                cartCount.classList.add('hidden');
            }
            
            // Update cart items
            if (cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="text-center py-8">
                        <svg class="w-16 h-16 text-slate-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <p class="text-slate-500">Your cart is empty</p>
                    </div>
                `;
            } else {
                cartItems.innerHTML = cart.map(item => `
                    <div class="flex items-start space-x-4 pb-4 border-b border-slate-100">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
                            <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-slate-900 text-sm truncate">${item.name}</h4>
                            <p class="text-slate-500 text-sm">$${item.price.toLocaleString()}</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <button onclick="updateCartItemQuantity(${item.id}, -1)" class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center hover:border-slate-300 transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                    </svg>
                                </button>
                                <span class="text-sm font-medium">${item.quantity}</span>
                                <button onclick="updateCartItemQuantity(${item.id}, 1)" class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center hover:border-slate-300 transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button onclick="removeFromCart(${item.id})" class="text-slate-400 hover:text-slate-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                `).join('');
            }
            
            cartTotal.textContent = `$${totalPrice.toLocaleString()}`;
        }

        // ==================== PRODUCT RENDERING ====================
        function renderCategories() {
            const container = document.getElementById('categories-grid');
            container.innerHTML = categories.map((cat, index) => `
                <div class="category-card aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group" onclick="filterByCategory('${cat.name}')">
                    <img src="${cat.image}" alt="${cat.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-semibold mb-1">${cat.name}</h3>
                            <p class="text-white/70 text-sm">${products.filter(p => p.category === cat.name).length} products</p>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function renderFeaturedProducts() {
            const container = document.getElementById('featured-products');
            const featured = products.filter(p => p.featured);
            container.innerHTML = featured.map(product => createProductCard(product)).join('');
        }

        function renderCategoryFilters() {
            const container = document.getElementById('category-filters');
            const allCategories = ['all', ...new Set(products.map(p => p.category))];
            
            container.innerHTML = allCategories.map(cat => `
                <label class="flex items-center cursor-pointer">
                    <input type="radio" name="category" value="${cat}" class="filter-checkbox sr-only" ${cat === 'all' ? 'checked' : ''} onchange="filterProducts()">
                    <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center transition-colors">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
                    </span>
                    <span class="text-slate-600 text-sm">${cat === 'all' ? 'All Categories' : cat}</span>
                </label>
            `).join('');
            
            // Add visual feedback for radio buttons
            const radios = container.querySelectorAll('input[type="radio"]');
            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    container.querySelectorAll('span:first-of-type').forEach(span => {
                        span.querySelector('span').classList.add('scale-0');
                    });
                    if (this.checked) {
                        this.nextElementSibling.querySelector('span').classList.remove('scale-0');
                    }
                });
            });
        }

        function renderProducts() {
            const container = document.getElementById('products-grid');
            let filtered = [...products];
            
            // Apply category filter
            if (activeFilters.category !== 'all') {
                filtered = filtered.filter(p => p.category === activeFilters.category);
            }
            
            // Apply price filter
            if (activeFilters.price !== 'all') {
                const [min, max] = activeFilters.price.split('-').map(v => v === '+' ? Infinity : parseInt(v));
                filtered = filtered.filter(p => {
                    if (max === undefined) return p.price >= min;
                    return p.price >= min && p.price <= max;
                });
            }
            
            // Apply sort
            const sortValue = document.getElementById('sort-select')?.value || 'featured';
            switch (sortValue) {
                case 'price-asc':
                    filtered.sort((a, b) => a.price - b.price);
                    break;
                case 'price-desc':
                    filtered.sort((a, b) => b.price - a.price);
                    break;
                case 'name':
                    filtered.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                default:
                    filtered.sort((a, b) => (b.featured ? 1 : 0) - (a.featured ? 1 : 0));
            }
            
            document.getElementById('product-count').textContent = filtered.length;
            container.innerHTML = filtered.map(product => createProductCard(product)).join('');
        }

        function createProductCard(product) {
            return `
                <article class="product-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 cursor-pointer group" onclick="viewProduct(${product.id})">
                    <div class="aspect-square overflow-hidden bg-slate-100">
                        <img src="${product.images[0]}" alt="${product.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    </div>
                    <div class="p-4">
                        <p class="text-xs text-indigo-600 font-medium uppercase tracking-wide mb-1">${product.category}</p>
                        <h3 class="font-semibold text-slate-900 mb-1 truncate">${product.name}</h3>
                        <p class="text-slate-900 font-bold">$${product.price.toLocaleString()}</p>
                    </div>
                </article>
            `;
        }

        function viewProduct(productId) {
            loadProduct(productId);
            navigateTo('product');
        }

        function loadProduct(productId) {
            currentProduct = products.find(p => p.id === productId);
            if (!currentProduct) return;
            
            document.getElementById('breadcrumb-product').textContent = currentProduct.name;
            document.getElementById('product-category').textContent = currentProduct.category;
            document.getElementById('product-title').textContent = currentProduct.name;
            document.getElementById('product-price').textContent = `$${currentProduct.price.toLocaleString()}`;
            document.getElementById('product-description').textContent = currentProduct.description;
            document.getElementById('product-main-image').src = currentProduct.images[0];
            document.getElementById('product-main-image').alt = currentProduct.name;
            
            // Render thumbnails
            const thumbContainer = document.getElementById('product-thumbnails');
            thumbContainer.innerHTML = currentProduct.images.map((img, index) => `
                <button class="gallery-thumb aspect-square rounded-xl overflow-hidden border-2 ${index === 0 ? 'border-indigo-600 active' : 'border-transparent'}" onclick="setMainImage('${img}', this)">
                    <img src="${img}" alt="${currentProduct.name} view ${index + 1}" class="w-full h-full object-cover">
                </button>
            `).join('');
            
            // Render related products
            const related = products.filter(p => p.category === currentProduct.category && p.id !== currentProduct.id).slice(0, 4);
            const relatedContainer = document.getElementById('related-products');
            relatedContainer.innerHTML = related.map(product => createProductCard(product)).join('');
            
            productQuantity = 1;
            document.getElementById('product-quantity').textContent = '1';
        }

        function setMainImage(src, button) {
            document.getElementById('product-main-image').src = src;
            document.querySelectorAll('.gallery-thumb').forEach(thumb => {
                thumb.classList.remove('active', 'border-indigo-600');
                thumb.classList.add('border-transparent');
            });
            button.classList.add('active', 'border-indigo-600');
            button.classList.remove('border-transparent');
        }

        function updateQuantity(delta) {
            productQuantity = Math.max(1, Math.min(10, productQuantity + delta));
            document.getElementById('product-quantity').textContent = productQuantity;
        }

        // ==================== FILTERING & SORTING ====================
        function filterProducts() {
            const categoryRadio = document.querySelector('input[name="category"]:checked');
            const priceRadio = document.querySelector('input[name="price"]:checked');
            
            activeFilters.category = categoryRadio ? categoryRadio.value : 'all';
            activeFilters.price = priceRadio ? priceRadio.value : 'all';
            
            renderProducts();
        }

        function filterByCategory(category) {
            activeFilters.category = category;
            
            // Update radio button
            const categoryRadio = document.querySelector(`input[name="category"][value="${category}"]`);
            if (categoryRadio) {
                categoryRadio.checked = true;
            }
            
            navigateTo('products');
            setTimeout(renderProducts, 100);
        }

        function sortProducts() {
            renderProducts();
        }

        function resetFilters() {
            activeFilters = { category: 'all', price: 'all' };
            document.querySelector('input[name="category"][value="all"]').checked = true;
            document.querySelector('input[name="price"][value="all"]').checked = true;
            renderProducts();
        }

        // ==================== CHECKOUT ====================
        function updateCheckoutPage() {
            const checkoutItems = document.getElementById('checkout-items');
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = subtotal >= 150 ? 0 : 15;
            const tax = Math.round(subtotal * 0.08);
            const total = subtotal + shipping + tax;
            
            if (cart.length === 0) {
                checkoutItems.innerHTML = '<p class="text-slate-500 text-center py-4">Your cart is empty</p>';
            } else {
                checkoutItems.innerHTML = cart.map(item => `
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
                            <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-slate-900 text-sm truncate">${item.name}</h4>
                            <p class="text-slate-500 text-sm">Qty: ${item.quantity}</p>
                        </div>
                        <p class="font-medium text-slate-900">$${(item.price * item.quantity).toLocaleString()}</p>
                    </div>
                `).join('');
            }
            
            document.getElementById('checkout-subtotal').textContent = `$${subtotal.toLocaleString()}`;
            document.getElementById('checkout-shipping').textContent = shipping === 0 ? 'Free' : `$${shipping}`;
            document.getElementById('checkout-tax').textContent = `$${tax.toLocaleString()}`;
            document.getElementById('checkout-total').textContent = `$${total.toLocaleString()}`;
            
            // Update hidden form fields
            document.getElementById('checkout-cart-data').value = JSON.stringify(cart);
            document.getElementById('checkout-order-total').value = total;
        }

        function handleCheckout(event) {
            if (cart.length === 0) {
                showToast('Your cart is empty');
                event.preventDefault();
                return false;
            }
            
            // Form will submit to Formspree
            showToast('Processing your order...');
            return true;
        }

        // ==================== UI UTILITIES ====================
        function toggleMobileMenu() {
            document.getElementById('mobile-menu').classList.add('open');
            document.getElementById('overlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function toggleCart() {
            document.getElementById('cart-sidebar').classList.add('open');
            document.getElementById('overlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeOverlays() {
            document.getElementById('mobile-menu').classList.remove('open');
            document.getElementById('cart-sidebar').classList.remove('open');
            document.getElementById('overlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').textContent = message;
            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        // Navbar scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('shadow-sm');
            } else {
                navbar.classList.remove('shadow-sm');
            }
            
            lastScroll = currentScroll;
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeOverlays();
            }
        });
    </script>
</body>
</html>