<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
return view('products');
    }

    public function store(ProductRequest $request)
    {

        $product=new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->photo = $request->photo;
        $product->save();
        return redirect()->back();
    }
}
