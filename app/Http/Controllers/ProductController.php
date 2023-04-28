<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia (
            'Product/Index',
            [
                'products' => Product::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Product/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
      $request->user()->products()->create(
            $request->validate([
                'item' => 'required',
                'desc' => 'required',
                'quantity' => 'required|integer|min:1',
                'unitPrice' => 'required|integer|min:1',
            ])
        );
        return redirect()->route('product.index')->with('success','Producted added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return inertia (
            'Product/Show',
            [
                'product' => $product
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return inertia(
            'Product/Edit',
            [
                'product' => $product
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update(
            $request->validate([
                'item' => 'required',
                'desc' => 'required',
                'quantity' => 'required|integer|min:1',
                'unitPrice' => 'required|integer|min:1',
            ])
        );

        return redirect()->route('product.index')->with('success', 'product was changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()
            ->with('success','product was deleted');
    }
}
