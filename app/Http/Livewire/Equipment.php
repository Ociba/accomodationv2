<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Equipment as Equipments;
use Livewire\WithPagination;

class Equipment extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="9";
    public $created_by,$quantity,$photo,$price,$equipment,$description,$discount_amount,$equipment_discount;

     //using the tailwind pagination theme
     protected $paginationTheme = 'tailwind';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.equipment',[
            'equipments' =>Equipments::where('equipment','like',$searchTerm)
            ->where('status','active')
            ->orderBy('created_at','Desc')
            ->Paginate($this->per_page)
        ]);
    }
}
