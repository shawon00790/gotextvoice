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