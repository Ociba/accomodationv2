<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\WithPagination;

class PropertyTaken extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $category_name,$discount_price,$location,$description,$price,$discount,$photo,$property_status;

     //using the tailwind pagination theme
     protected $paginationTheme = 'tailwind';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.property-taken',[
            'property_taken'=>Property::join('users','users.id','properties.user_id')
            ->join('categories','categories.id','properties.category_id')
            ->where('category_name','like',$searchTerm)
            ->where('properties.status','taken')
            ->orderBy('properties.created_at','DESC')
            ->Paginate($this->per_page,['properties.*','users.contact','categories.category_name'])
        ]);
    }
}
