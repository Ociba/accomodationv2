<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Cat;

class CategoryForm extends Component
{
    public function render()
    {
        return view('livewire.category-form');
    }
}
