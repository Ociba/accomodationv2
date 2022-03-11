<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produce;
use Livewire\WithPagination;

class ProduceAvailableTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $produce_name,$produce_category_id,$quantity,$price,$phone_number,$image;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.produce-available-table',[
            'available_produce' =>Produce::where('produce_name','like',$searchTerm)
            ->where('status','available')
            ->orderBy('created_at','Desc')
            ->Paginate($this->per_page)
        ]);
    }
}
