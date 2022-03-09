<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class EditCategoryForm extends Component
{
    public function render($category_id)
    {
        return view('livewire.edit-category-form',[
            'edit_category' =>Category::where('id',$this->category_id)->get()
        ]);
    }
    public function mount(){
        $this->category_id = \DB::table('categories')->where('id',request()->route()->id)->value('id');
}
}
