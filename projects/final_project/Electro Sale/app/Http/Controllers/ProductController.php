<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::with('category')->paginate(10);
        $products = Product::all();

        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd(\Auth::user()->name);
        //
        // $categories = Category::where('status', 1)->get();

        return view('dashboard.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'description' => 'string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'status' => 'required|boolean',
            // 'category_id' => 'required|exists:categories,id',
        ]);

        // $validatedData['user_id'] = \Auth::user()->id;
        // Create the product

        if ($request->hasFile('image')) {
            // Store the image in the 'public/products' directory (storage/app/public/products)
            $imagePath = $request->file('image')->store('public/products');

            // If you want to get the URL for accessing the image
            // $imageUrl = Storage::url($imagePath); // This will give you the URL to access the image
        } else {
            $imagePath = null; // No image uploaded
        }

        $validatedData['image'] = $imagePath;

        Product::create($validatedData);

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}