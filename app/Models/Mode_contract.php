<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode_contract extends Model
{
    use HasFactory;

    
    /**
     * The roles that belong to the Contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function  Contract()
    {
        return $this->belongsToMany( 'mode_contracts_id');
    }

    /**
     * Get all of the comments for the Mode_contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Mode_contract()
    {
        return $this->hasMany('App\Document');
    }
}
