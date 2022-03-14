<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supermarket as Items;
use Livewire\WithPagination;

class Supermarket extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="9";

    public $item_group_id,$item,$description,$price,$photo,$discount,$new_price,$number;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.supermarket',[
            'supermarket_items' =>Items::join('supermarket_categories','supermarket_categories.id','supermarkets.item_group_id')
            ->where('item','like',$searchTerm)
            ->orderBy('supermarkets.created_at','Desc')
            ->Paginate($this->per_page)
        ]);
    }
}
