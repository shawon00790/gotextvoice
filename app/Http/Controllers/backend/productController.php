<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Feature;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'category_id' => 'required|exists:categories,id',
        'product_name' => 'required|unique:products,product_name',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        'status' => 'nullable|in:0,1',
        'quantity' => 'nullable|integer',
        'description' => 'nullable|string',
        'feature_name.*' => 'nullable|string',
    ]);

    // Image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . Str::slug($request->product_name) . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('products', $imageName, 'public');
    }

    // Product create
    $product = Product::create([
        'category_id' => $request->category_id,
        'product_name' => $request->product_name,
        'slug' => Str::slug($request->product_name),
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imagePath,
        'status' => $request->status ?? 1,
        'quantity' => $request->quantity ?? 0,
    ]);

    // Features add
    if ($request->feature_name) {
        foreach ($request->feature_name as $feature) {
            if ($feature != null) {
                Feature::create([
                    'product_id' => $product->id,
                    'feature_name' => $feature
                ]);
            }
        }
    }

    return back()->with('success','Product Added Successfully!');
    }

    public function edit($id)
{
    $product = Product::with('features')->findOrFail($id);
    $categories = Category::all();

    return view('backend.products.edit', compact('product', 'categories'));
}



    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => [
                'required',
                Rule::unique('products', 'product_name')->ignore($id),
            ],
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'status' => 'nullable|in:0,1',
            'quantity' => 'nullable|integer',
            'description' => 'nullable|string',
            'feature_name.*' => 'nullable|string',
        ]);



        // Image update
        if ($request->hasFile('image')) {

            // 👉 OLD IMAGE DELETE
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // 👉 NEW IMAGE UPLOAD
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->product_name) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('products', $imageName, 'public');

            // 👉 SAVE NEW PATH
            $product->image = $imagePath;
        }

        $product->update([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'quantity' => $request->quantity,
            'image' => $imagePath ?? $product->image,
        ]);

        // Features update
        $product->features()->delete();

        if ($request->feature_name) {
            foreach ($request->feature_name as $feature) {
                if ($feature) {
                    $product->features()->create([
                        'feature_name' => $feature
                    ]);
                }
            }
        }

        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    


}