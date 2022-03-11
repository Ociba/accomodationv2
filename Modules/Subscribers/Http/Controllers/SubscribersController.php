<?php

namespace Modules\Subscribers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Subscriber;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('subscribers::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createSubscriber()
    {
        $subscriber_object =new Subscriber;
        $subscriber_object->subscriber_email =request()->subscriber_email;
        $subscriber_object->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('subscribers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('subscribers::edit');
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
    public function deleteSubscriber($subscriber_id)
    {
        Subscriber::where('id',$subscriber_id)->delete();
        return redirect()->back()->with('msg','Subscriber Email Deleted');
    }
}
