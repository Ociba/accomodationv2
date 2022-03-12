<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Equipment;
use Livewire\WithPagination;

class AvailableEquipmentTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $equipment,$price,$photo,$description,$discount_amount,$equipment_discount;

     //using the tailwind pagination theme
     protected $paginationTheme = 'tailwind';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.available-equipment-table',[
            'all_equipment'=>Equipment::join('users','users.id','equipment.created_by')
            ->where('equipment.status','active')
            ->where('equipment','like',$searchTerm)
            ->orderBy('equipment.created_at','DESC')
            ->Paginate($this->per_page,['equipment.*'])
        ]);
    }
}
