@extends('frontend.layouts.apps')

@section('title', 'Home - gotextvoice')
@section('description', 'Welcome to gotextvoice, here you can buy google voice, textnow, old gmail, gmail and many more accounts with best price and fast delivery.')

@section('content')
    <main>
        <!-- HOME PAGE -->
        <div>
            <div id="page-checkout" class="page active">
                <div class="pt-24 lg:pt-28 pb-16">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-8">Checkout</h1>
                        
                        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                            <!-- Checkout Form -->
                            <div class="lg:col-span-2">
                                <form action="{{ route('submit.orders') }}" method="POST" class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-slate-100 mb-6">
                                    <!-- Shipping Details -->
                                    @csrf
                                    <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-slate-100 mb-6">
                                        <h2 class="text-xl font-semibold text-slate-900 mb-6">Shipping Details</h2>
                                        <input value="{{ $product->id }}" type="hidden" name="product_id">
                                        <div class="grid sm:grid-cols-2 gap-4">
                                            <div class="sm:col-span-2">
                                                <label class="block text-sm font-medium text-slate-700 mb-2">Full Name <span>*</span></label>
                                                <input type="text" name="name" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                                @error('name')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label class="block text-sm font-medium text-slate-700 mb-2">Email <span>*</span></label>
                                                <input type="email" name="email" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                                @error('email')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label class="block text-sm font-medium text-slate-700 mb-2">Address <span>*</span></label>
                                                <input type="text" name="address" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                                @error('address')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label class="block text-sm font-medium text-slate-700 mb-2">Phone <span>*</span></label>
                                                <input type="tel" name="phone" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                                @error('phone')
                                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
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
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
                                                <img src="https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?w=800&amp;auto=format&amp;fit=crop" alt="Oslo Coffee Table" class="w-full h-full object-cover">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-medium text-slate-900 text-sm truncate">{{ $product->product_name }}</h4>
                                                <p class="text-slate-500 text-sm">Qty: {{ $quantity }}</p>
                                            </div>
                                            <p class="font-medium text-slate-900">${{ $product->price }}</p>
                                        </div>
                                    </div>
                                    <div class="border-t border-slate-200 pt-4 space-y-3">
                                        <div class="flex items-center justify-between text-lg font-semibold pt-3 border-t border-slate-200">
                                            <span class="text-slate-900">Total</span>
                                            <span id="checkout-total" class="text-slate-900">${{ $quantity * $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection