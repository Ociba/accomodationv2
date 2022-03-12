<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class EquipmentRequestTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $user_id,$name;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
         $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.equipment-request-table',[
            'get_all_orders_summary'=>Order::join('users','users.id','orders.user_id')
            ->where('name','like',$searchTerm)
            ->orderBy('orders.created_at','DESC')
            ->distinct('name')->where('orders.status','active')
            ->where('orders.item_id',null)
            ->Paginate($this->per_page,['users.*','orders.created_at','orders.user_id'])
        ]);
    }
}
