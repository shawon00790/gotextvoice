@extends('frontend.layouts.apps')

@section('title', 'Contact page - gotextvoice')
@section('description', 'Welcome to contact page, here you can buy google voice, textnow, old gmail, gmail and many more accounts with best price and fast delivery.')

@section('content')
<main>
    <div class="page active">
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
                                    <input type="text" name="name" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                                    <input type="email" name="email" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                                <input type="text" name="subject" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all">
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                                <textarea name="message" rows="5" required="" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 transition-all resize-none"></textarea>
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-1">Email</h3>
                            <p class="text-slate-600 text-sm">gotextvoice@gmail.com</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-1">Phone</h3>
                            <p class="text-slate-600 text-sm">+88 01233-456733</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
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
@endsection