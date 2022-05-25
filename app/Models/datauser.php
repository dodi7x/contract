<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'civi_id',
        'address',
        'id_number',
        'phone',
        'gender',
     //   'the_age',
    ];
}
