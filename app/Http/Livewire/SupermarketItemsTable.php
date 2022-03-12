<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supermarket;
use Livewire\WithPagination;

class SupermarketItemsTable extends Component
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
        return view('livewire.supermarket-items-table',[
            'supermarket_items' =>Supermarket::join('supermarket_categories','supermarket_categories.id','supermarkets.item_group_id')
            ->where('item','like',$searchTerm)
            ->orwhere('item_category','like',$searchTerm)
            ->orderBy('supermarkets.created_at','Desc')
            ->Paginate($this->per_page,['supermarkets.*','supermarket_categories.item_category'])
        ]);
    }
}
