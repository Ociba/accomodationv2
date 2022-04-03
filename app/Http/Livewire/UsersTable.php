<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $name,$email,$contact;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.users-table',[
            'users' =>User::join('types','types.id','users.type_id')->where('name','like',$searchTerm)
            ->orderBy('created_at','Desc')
            ->Paginate($this->per_page,['users.*','types.type'])
        ]);
    }
}
