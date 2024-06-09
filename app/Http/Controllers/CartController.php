<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        return response()->json(['message' => 'Product added to cart'], 200);
    }

    public function viewCart()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();

        return view('cart', compact('cartItems'));
    }

    public function removeFromCart($id)
    {
        $userId = Auth::id();
        Cart::where('user_id', $userId)->where('id', $id)->delete();

        return response()->json(['message' => 'Product removed from cart'], 200);
    }
}
