<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supermarket;
use App\Models\User;
use App\Models\Cart;
use Hash;

class CartController extends Controller
{
    /**
     * This function gets cart
     */
    protected function cartList(){
        $cartItems = \Cart::getContent();
        return view('cart',compact('cartItems'));
    }
    /**
     * This function gets checkout for particular customer
     */
    protected function getCheckout(){
        return view('checkout');
    }
    /**
     * This function gets order to be placed
     */
    protected function OrderList(){
      return view('submit-order');
    }
    /**
     * This function returns cart page
     */
    public function cart()
    {
        $cartItems = \Cart::getContent();
        return view('cart',compact('cartItems'));
    }
    /**
     * This function updates the quantity
     */
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        //return redirect()->route('cart.list');
        return redirect()->back();
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }
    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
    public function getSupermarket(){
        $product = Supermarket::where('status','active')->get();
        return view('products',compact('product'));
    }

}
