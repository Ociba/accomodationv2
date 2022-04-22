<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supermarket;
use App\Models\User;
use App\Models\Cart;
use App\Models\Equipment;
use App\Models\Location;
use Hash;

class CartController extends Controller
{
    /**
     * This function gets cart
     */
    protected function cartList(){
        $supermarket_items =Supermarket::where('discount',null)->where('status','active')->latest()->limit(6)->get();
        $equipment_items =Equipment::where('status','active')->latest()->limit(6)->get();
        $cartItems = \Cart::getContent();
        return view('cart',compact('cartItems','supermarket_items','equipment_items'));
    }
    /**
     * This function gets checkout for particular customer
     */
    protected function getCheckout(){
        $supermarket_items =Supermarket::where('discount',null)->where('status','active')->latest()->get();
        $equipment_items =Equipment::where('status','active')->latest()->get();
        $cartItems = \Cart::getContent();
        return view('checkout',compact('cartItems','supermarket_items','equipment_items'));
    }
    /**
     * This function gets order to be placed
     */
    protected function OrderList(){
        $supermarket_items =Supermarket::where('discount',null)->where('status','active')->latest()->limit(12)->get();
        $equipment_items =Equipment::where('status','active')->latest()->limit(12)->get();
        $cartItems = \Cart::getContent();
      return view('submit-order', compact('cartItems','supermarket_items','equipment_items'));
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
