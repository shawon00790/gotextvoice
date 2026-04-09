<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 glass border-b border-slate-200/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="{{ route('index') }}" onclick="navigateTo('home')" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-slate-900 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">GTV</span>
                </div>
                <span class="text-slate-900 font-semibold text-lg tracking-tight">GOTEXTVOICE</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('index') }}" onclick="navigateTo('home')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Home</a>
                <a href="{{ route('products') }}" onclick="navigateTo('products')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Products</a>
                <a href="{{ route('about') }}" onclick="navigateTo('about')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">About</a>
                <a href="{{ route('contact') }}" onclick="navigateTo('contact')" class="text-slate-600 hover:text-slate-900 transition-colors text-sm font-medium">Contact</a>
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