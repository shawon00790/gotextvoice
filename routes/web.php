<?php

use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\orderController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\frontend\gtvController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//frontend routes

// Route::get('/', function () {
//     return view('googlevoice');
// });

// Route::get('/', function () {
//     return view('frontend.pages.home');
// });


Route::group(
    ['prefix' => '/'],
    function () {
        Route::get('/', [gtvController::class, 'index'])->name('index');
        Route::get('/about', [gtvController::class, 'about'])->name('about');
        Route::get('/contact', [gtvController::class, 'contacts'])->name('contact');
        Route::get('/products', [gtvController::class, 'products'])->name('products');
        Route::get('/product/{slug}', [gtvController::class, 'singleProduct'])->name('product.show');
        Route::get('/checkout', [gtvController::class, 'checkout'])->name('checkout.page');
        Route::post('/place-order', [gtvController::class, 'placeOrder'])->name('place.order');
        Route::Post('/orders', [orderController::class, 'store'])->name('submit.orders');
    }
);




//backend routes

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', categoryController::class);
    Route::resource('products', productController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
