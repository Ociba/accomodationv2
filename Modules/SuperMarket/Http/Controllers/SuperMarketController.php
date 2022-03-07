<?php

namespace Modules\SuperMarket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuperMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supermarket::index');
    }
    /**
     * This function get all supermarket items
     */
    public function getSupermarketItems()
    {
        return view('supermarket::supermarket_items');
    }
    /**
     * This function get all supermarket customer orders
     */
    public function getSupermarketCustomerOrders()
    {
        return view('supermarket::customer_orders');
    }

     /**
     * This function get all supermarket customer orders
     */
    public function getSupermarketCustomerOrdersSummary()
    {
        return view('supermarket::customer_order_summary');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('supermarket::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('supermarket::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('supermarket::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
