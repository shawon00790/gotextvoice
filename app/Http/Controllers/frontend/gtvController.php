<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Dom\ProcessingInstruction;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Feature;
use App\Models\order;
class gtvController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.pages.home', compact('categories', 'products'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contacts()
    {
        return view('frontend.pages.contact');
    }

    public function products(Request $request)
    {
        $categories = Category::all();

        $products = Product::query()
            ->when($request->category && $request->category != 'all', function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('frontend.pages.products', compact('products', 'categories'));
    }
    public function filter(Request $request)
    {
        $categories = Category::all();
        $query = Product::query();

        if ($request->has('category_id') && !empty($request->category_id)) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('price_min') && !empty($request->price_min)) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->has('price_max') && !empty($request->price_max)) {
            $query->where('price', '<=', $request->price_max);
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(9);

        return view('frontend.pages.products', compact('products', 'categories'));
    }
    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $features = Feature::where('product_id', $product->id)->get();

        $products = Product::latest()->take(4)->get();

        return view('frontend.pages.single-product', compact('product', 'features', 'products'));
    }

    public function checkout(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::findOrFail($productId);

        return view('frontend.pages.checkout', compact('product', 'quantity'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'status' => 'pending',
        ]);

        return redirect()->route('index')->with('success', 'Your order has been placed successfully!');
    }   
}
