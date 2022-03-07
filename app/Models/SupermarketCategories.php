<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupermarketCategories extends Model
{
    use HasFactory;
    protected $fillable =['item_category','created_by'];
}
