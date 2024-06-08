<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // First View
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }

    // Create Product
    public function create()
    {
        return view('admin.product.create');
    }

    // Save Product
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);
        $data = Product::create($validation);
        if ($data) {
            session() -> flash('success', 'Product Add Successfully');
            return redirect(route('admin/products'));
        } else {
            session() -> flash('error', 'Some Problem');
            return redirect(route('admin/products/create'));
        }
    }

    // Edit Product
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin/product/update', compact('products'));
    }

    // Delete Product
    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session() -> flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        } else {
            session() -> flash('error', 'Some Problem');
            return redirect(route('admin/products'));
        }
    }

    // Update Product
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $title = $request->title;
        $category = $request->category;
        $price = $request->price;

        $products->title = $title;
        $products->category = $category;
        $products->price = $price;

        $data = $products->save();

        if ($data) {
            session() -> flash('success', 'Product Update Successfully');
            return redirect(route('admin/products'));
        } else {
            session() -> flash('error', 'Some Problem');
            return redirect(route('admin/products/update'));
        }
    }
}
