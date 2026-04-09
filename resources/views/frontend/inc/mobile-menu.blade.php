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