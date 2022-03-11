<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Subscriber;

class SubscribersTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    public $subscriber_email;

    //using the bootstrap pagination theme
    protected $paginationTheme = 'tailwind'; 
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.subscribers-table',[
            'subscribers' =>Subscriber::orderBy('created_at','Desc')->where('subscriber_email','like',$searchTerm)
            ->Paginate($this->per_page)
        ]);
    }
}
