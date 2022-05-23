<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class twouser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'gender',
   //     'the_age'
    ];
}
