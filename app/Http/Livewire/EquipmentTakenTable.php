<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class EquipmentTakenTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $user_id,$equipment;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.equipment-taken-table',[
            'taken_equipments'=>Order::join('users','users.id','orders.user_id')
            ->join('equipment','equipment.id','orders.equipment_id')
            ->where('equipment.equipment','like',$searchTerm)
            ->orderBy('orders.created_at','DESC')
            ->where('orders.status','delivered')
            ->where('orders.item_id',null)
            ->Paginate($this->per_page,['orders.*','equipment.description','equipment.photo'])
        ]);
    }
}
