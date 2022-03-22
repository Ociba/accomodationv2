<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produce;
use Livewire\WithPagination;

class StemTuber extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $produce_name,$quantity,$phone_number,$price,$image,$discount_percentage,$new_amount,$address,$produce_category;

     //using the tailwind pagination theme
     protected $paginationTheme = 'tailwind';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.stem-tuber',[
            'stem_tuber'=>Produce::join('users','users.id','produces.created_by')
            ->join('produce_categories','produce_categories.id','produces.produce_category_id')
            ->where('produce_name','like',$searchTerm)
            ->where('produces.produce_category_id',8)
            ->where('produces.status','available')
            ->orderBy('produces.created_at','DESC')
            ->Paginate($this->per_page,['produces.*','users.address','produce_categories.produce_category'])
        ]);
    }
}
