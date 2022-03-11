<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{
    use HasFactory;
    protected $fillable=['item_group_id','item','description','price','photo','number','discount','new_price','created_by'];
}
