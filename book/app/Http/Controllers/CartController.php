<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Helpers\Cart;
class CartController extends Controller
{
    public function index(Cart $cart){
        // $cartItems = $cart->list();
        return view('layout.cart',compact('cart'));
    }
    public function add(Request $request,Cart $cart){
        $products = book::find($request->id);
        $quantity = $request->quantity;
        $cart->add($products,$quantity);
        return redirect()->route('cart-shop');
    }
}
