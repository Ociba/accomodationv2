<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduceCategory extends Model
{
    use HasFactory;
    protected $fillable =['produce_category','created_by'];
}
