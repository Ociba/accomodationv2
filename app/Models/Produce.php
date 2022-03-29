<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    use HasFactory;
    protected $fillable =['created_by','produce_category_id','quantity','phone_number','produce_name','image','price','new_amount',
                         'discount_percentage','description'];
    public function scopeSearch($query, $val){
    return $query
    ->where('produce_name','like','%'.$val.'%');
}
}
