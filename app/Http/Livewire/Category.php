<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\Category as Cat;

class Category extends Component

{
    use WithPagination, WithSorting;

    public $category_name,$created_by;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.category',[
            'category' =>$this->getCategory()
        ]);
    }
     /**
     * returns the valid contracts of a login company
     */
    private function getCategory(){
        return Comment::join('users','user.id','categories.created_by')->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);
    }
}
