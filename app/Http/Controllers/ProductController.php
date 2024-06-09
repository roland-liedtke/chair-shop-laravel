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

    public function addToCart(Request $request)
    {
        $productId = $request->input('id');
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('frontend.shop')->with('error', 'Product not found!');
        }

        // Add product to cart
        $cart = session()->get('cart', []);
        $cart[$productId] = [
            'name' => $product->name,
            'price' => $product->price,
        ];
        session()->put('cart', $cart);

        return redirect()->route('products.index')->with('success', 'Product added to cart successfully!');
    }
    public function showAll()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();

        return view('frontend.home', compact(['products', 'total']));
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
            'description' => 'string|max:1000'
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
        $description = $request->description;

        $products->title = $title;
        $products->category = $category;
        $products->price = $price;
        $products->description = $description;

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
