<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product=new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->photo = $request->photo;
        $product->save();
        return redirect(  'products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product=Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $product=Product::findOrFail($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->photo = $request->photo;
        $product->save();
        return redirect(  'products');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $product =Product::findorFail($id);
        $product->delete();

        return redirect( 'products');
    }
}
