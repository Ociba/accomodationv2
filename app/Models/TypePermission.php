<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePermission extends Model
{
    use HasFactory;
    protected $fillable =['type_id','permission_id','user_id'];
}
