<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['category_name','created_by'];

    public function scopeSearch($query, $val){
        return $query
        ->where('category_name','like','%'.$val.'%');
        // ->Orwhere('comment','like','%'.$val.'%')
        // ->Orwhere('first_name','like','%'.$val.'%')
        // ->Orwhere('last_name','like','%'.$val.'%');
    }
}
