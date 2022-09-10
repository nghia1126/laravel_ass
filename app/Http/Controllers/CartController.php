<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $totalAll = 0;
        if(Auth::check()) {
            $carts = Cart::select('cart.*', 'products.name', 'products.avatar', 'products.price')->join('products', 'cart.product_id', '=', 'products.id')->where('user_id', '=', Auth::user()->id)->get();
            return view('client.cart', [
                'carts' => $carts,
                'totalAll' => $totalAll
            ]);
        } else {
            return view('errors.cart-empty');
        }

    }
    public function store(Request $request)
    {
        $cartModel = new Cart();
        $carts = DB::table('cart')->where('user_id', '=', Auth::user()->id)->get();
        foreach ($carts as $cart) {
            if ($request->product_id == $cart->product_id) {
                $cartId = Cart::select('cart.*', 'products.name', 'products.avatar', 'products.price')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.product_id', '=', $request->product_id)->get();
                $newQuantity = $cart->quantity + $request->quantity;
                $id = $cartId->pluck('id');
                Cart::whereIn('id', $id)->update(['quantity' => $newQuantity]);
                return redirect()->route('listCart');
            }
        }

        $cartModel->fill($request->all());
        $cartModel->save();
        return redirect()->route('listCart');
    }

    public function destroy($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->route('listCart');
    }

}
