<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civi extends Model
{
    use HasFactory;

protected $fillable=['name','date_of_birth','id_number','address','Profession',];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
