<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_contract extends Model
{
    use HasFactory;
    protected $fillable = [
            'plate_number',
            'chassis_number',
           //// 'structure_no',
          //  'amount',
          //  'name'

    ];

    /**
     * Get the  contract associated with the type_contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function  contract()
    {
        return $this->hasOne(contract::class);
    }
}
