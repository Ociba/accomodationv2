<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Moels\Supermarket as Items;
use Livewire\WithPagination;

class Supermarket extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

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
            ->orwhere('item_category','like',$searchTerm)
            ->orderBy('created_at','Desc')
            ->Paginate($this->per_page)
        ]);
    }
}
