<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('category::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createCategory(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories',
            'created_by'    =>'',
        ]);
        $category = new Category;
        $category->category_name =request()->category_name;
        $category->created_by    = auth()->user()->id;
        $category->save();
        return redirect('/category/')->with('msg','Operation Successful');
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
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editCategory($category_id)
    {
        $edit_category =Category::where('id',$category_id)->get();
        return view('category::edit_category',compact('edit_category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateCategory($category_id)
    {
        Category::where('id',$category_id)->update(array(
            'category_name' =>request()->category_name
        ));
        return Redirect('/category/')->with('msg','Operation Successfull');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteCategory($category_id)
    {
        Category::where('id',$category_id)->delete();
        return redirect()->back()->with('msg','Operation Successfull');
    }
}
