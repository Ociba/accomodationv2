<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produce;
use App\Models\ProduceCategory;
use Livewire\WithPagination;

class MyProduce extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $produce_name;

     //using the tailwind pagination theme
     protected $paginationTheme = 'tailwind';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.my-produce',[
            'my_produce'=>Produce::where('created_by',auth()->user()->id)
            ->where('produce_name','like',$searchTerm)
            ->Paginate($this->per_page,['produces.*'])
        ]);
    }
}
