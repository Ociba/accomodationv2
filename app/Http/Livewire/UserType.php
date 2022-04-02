<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserType extends Component
{
    public $per_page="10";

    public $name,$email,$contact,$type;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 

    public function render()
    {
        return view('livewire.user-type',[
            'get_users' =>User::join('types','types.id','users.type_id')->distinct('types.type')
            ->Paginate($this->per_page,['users.type_id','types.type'])
        ]);
    }
}
