<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location as Locate;
use Livewire\WithPagination;

class Location extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $location,$transport_amount,$created_by;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.location',[
            'locations' =>Locate::where('location','like',$searchTerm)->Paginate($this->per_page,['locations.*'])
        ]);
    }
    
}
