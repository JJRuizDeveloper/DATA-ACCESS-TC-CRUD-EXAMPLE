<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function detail()
    {
        $product = Product::find($id);
        return view('products.detail', compact('product'));
    }

    public function store(Request $request)
    {
        Product::create($request->all()); 
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->save();
        return redirect()->route('product.index');
    }

    public function destroy(Request $request, $id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }
}
