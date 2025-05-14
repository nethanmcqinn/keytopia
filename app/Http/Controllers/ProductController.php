<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Return the products view with the products data
        return view('products', ['products' => $products]);
    }
    public function create()
{
    return view('admin.products.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'features' => 'nullable|string',
        'stock' => 'required|integer|min:0',
    ]);

    Product::create($validated);

    return redirect()->route('admin.dashboard')->with('success', 'Product created successfully!');
}
}
