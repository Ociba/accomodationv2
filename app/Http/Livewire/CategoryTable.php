<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $category_name,$created_by;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.category-table',[
            'category' =>Category::join('users','users.id','categories.created_by')
            ->where('categories.category_name','like',$searchTerm)->Paginate($this->per_page,['categories.*','users.name'])
        ]);
    }

 
}
