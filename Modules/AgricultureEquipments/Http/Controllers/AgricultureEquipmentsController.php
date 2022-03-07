<?php

namespace Modules\AgricultureEquipments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AgricultureEquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('agricultureequipments::index');
    }
    /**
     * This function gets received requests
     */
    public function equipmentReceivedRequests(){
        return view('agricultureequipments::received_requests');
    }
     /**
     * This function gets equipments in stock for sale
     */
    public function availbleEquipments(){
        return view('agricultureequipments::available_equipment');
    }
     /**
     * This function gets equipments being taken or bought
     */
    public function equipmentTaken(){
        return view('agricultureequipments::equipment_taken');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('agricultureequipments::create');
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
        return view('agricultureequipments::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('agricultureequipments::edit');
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
