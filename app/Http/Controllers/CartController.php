<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * This function gets cart
     */
    protected function getCart(){
        return view('cart');
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
}
