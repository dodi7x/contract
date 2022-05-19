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
        return $this->hasMany(Contract::class);
    }
    public function Civi()
    {
        return $this->belongsTo(Civi::class , 'civi_id');
    }
}
