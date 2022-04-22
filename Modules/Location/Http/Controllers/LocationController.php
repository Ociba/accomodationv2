<?php

namespace Modules\Location\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('location::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createLocation(Request $request)
    {
        $validated = $request->validate([
            'location'         => 'required|unique:locations',
            'transport_amount' => 'required|max:255',
            'created_by'    =>'',
        ]);
        $location = new Location;
        $location->location         =request()->location;
        $location->transport_amount =request()->transport_amount;
        $location->created_by    = auth()->user()->id;
        $location->save();
        return redirect('/location/')->with('msg','Operation Successful');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function editLocation($location_id)
    {
        $get_location=Location::where('id',$location_id)->get();
        return view('location::edit_location',compact('get_location'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('location::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('location::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateLocation($location_id)
    {
        Location::where('id',$location_id)->update(array(
            'location'         =>request()->location,
            'transport_amount' =>request()->transport_amount
        ));

        return redirect('/location/')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteLocation($location_id)
    {
        Location::where('id',$location_id)->delete();
        return redirect()->back()->with('msg','Operation successful');
    }
}
