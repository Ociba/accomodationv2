<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable =['discount_price','category_id','user_id','property_size','bedroom','bathroom','garage',
                        'location','description','price','discount','photo','property_status'];
}
