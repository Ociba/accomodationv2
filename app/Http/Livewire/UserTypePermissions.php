<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypePermission;
use Livewire\WithPagination;

class UserTypePermissions extends Component
{
    public $per_page="10";

    public $permission,$type_id;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    public function render()
    {
        return view('livewire.user-type-permissions',[

        ]);
    }
}
