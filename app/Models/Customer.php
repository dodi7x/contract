<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable =[
//'civi_id'
    ];
    public function Contract()
    {
        return $this->hasone(Contract::class);
    }

    public function civi()
    {
        return $this->hasOne(Civi::class,'user_id');
    }
}
