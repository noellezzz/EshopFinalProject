<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Retrieve all products from the database

        return view('products.index', ['products' => $products]); // Pass the $products variable to the view

    }

    public function create()
    {

        return View::make('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'ProductPrice' => 'required',
            'ProductImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $product = new Product();
        $product->ProductName = $request->ProductName;
        $product->ProductDescription = $request->ProductDescription;
        $product->ProductPrice = $request->ProductPrice;
        if ($request->hasFile('ProductImage')) {
            $image = $request->file('ProductImage');

            $path = $image->store('public/productimg');
            $product->ProductImage = str_replace('public/', 'storage/', $path);
        }
        $product->save();

        return redirect('/product');
    }
    public function edit($id)
    {
        $products = Product::find($id);

        return View::make('products.edit', compact('products'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'ProductPrice' => 'required',
            'ProductImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $products = Product::find($id);
        $products->ProductName = $request->ProductName;
        $products->ProductDescription = $request->ProductDescription;
        $products->ProductPrice = $request->ProductPrice;
        if ($request->hasFile('ProductImage')) {
            $image = $request->file('ProductImage');

            $path = $image->store('public/productimg');
            $products->ProductImage = str_replace('public/', 'storage/', $path);
        }
        $products->save();
        return Redirect::to('/product');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return Redirect::to('/product');
    }

}
