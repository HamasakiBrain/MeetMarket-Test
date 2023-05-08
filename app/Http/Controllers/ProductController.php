<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category', 'brand')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $category = Category::whereHas('children')->get();
        return view('products.create', compact('brands', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        $product = Product::create($validated);
        $category_ids = $validated['category_id'];
        $product->positions()->create([
            'size' => $validated['size'],
            'product_id' => $product->id,
            'price' => $validated['price']
        ]);

        foreach ($category_ids as $category_id) {
            $parent = Category::find($category_id)->parent()->first() ?? null;
            $category_path = $parent ? $parent->pivot->parent_id . '.' . $parent->pivot->category_id : $category_id;

            $product->category()->create([
                'category_id' => $category_id,
                'parent_category_id' => $parent?->id,
                'product_id' => $product->id,
                'category_path' => $category_path
            ]);
        }
        return redirect()->route('dashboard');
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
        $brands = Brand::all();
        $category = Category::whereHas('children')->get();
        $categories = $product->productCategories()->pluck('category_id')->all();
        $positions = $product->positions()->get();
        return view('products.edit', compact('product', 'category', 'brands', 'categories', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
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
