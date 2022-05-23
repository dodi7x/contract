<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $fillable = [
      
       'contract_number',
       //'user_id'
       /// 'structure_no',
      //  'amount'
];


/**
 * Get all of the comments for the Contract
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function Mode_contract()
{
    return $this->hasMany('App\Mode_contract');
}


/**
 * Get all of the comments for the Contract
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function User()
{
    return $this->hasMany('App\User');
}
/**
 * Get all of the comments for the Contract
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function type_contract()
{
    return $this->hasMany(type_contract::class);
}
    
} 