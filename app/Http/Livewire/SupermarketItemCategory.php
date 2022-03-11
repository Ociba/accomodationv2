<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SupermarketCategories;
use Livewire\WithPagination;

class SupermarketItemCategory extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $item_category;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.supermarket-item-category',[
            'supermarket_category' =>SupermarketCategories::where('item_category','like',$searchTerm)
            ->Paginate($this->per_page)
        ]);
    }
}
