<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\WithPagination;

class PlotsAndLand extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $category_name,$discount_price,$location,$description,$price,
    $discount,$photo,$property_status,$contact,$bedroom;

    //using the tailwind pagination theme
    protected $paginationTheme = 'tailwind';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.plots-and-land',[
            'plots_and_land'=>Property::join('users','users.id','properties.user_id')
            ->join('categories','categories.id','properties.category_id')
            ->where('location','like',$searchTerm)
            ->where('properties.category_id',6)
            ->orwhere('properties.category_id',7)
            ->where('properties.status','pending')
            ->orderBy('properties.created_at','DESC')
            ->Paginate($this->per_page,['properties.*','users.contact','categories.category_name'])
        ]);
    }
}
