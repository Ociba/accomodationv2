<?php

namespace Modules\SuperMarketItemCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\SupermarketCategories;

class SuperMarketItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supermarketitemcategory::index');
    }

    /**
     * This function saves the category.
     * @return Renderable
     */
    public function createCategory()
    {
        $save_category =new SupermarketCategories;
        $save_category->item_category =request()->item_category;
        $save_category->created_by    =auth()->user()->id;
        $save_category->save();
        return redirect()->back()->with('msg','You have successfully created Category');
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
        return view('supermarketitemcategory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $edit_category =SupermarketCategories::where('id',$id)->get();
        return view('supermarketitemcategory::edit',compact('edit_category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        SupermarketCategories::where('id',$id)->update(array(
            'item_category' =>request()->item_category
        ));
        return redirect('/supermarketitemcategory/')->with('msg','You have successfully Updated Category');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteCategory($id)
    {
        SupermarketCategories::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have deleted successfully');
    }
}
