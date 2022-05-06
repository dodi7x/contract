<?php

namespace App\Models;

use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawdata extends Model
{
    use HasFactory;
    use LaratrustUserTrait;

    protected $table = 'lawdatas';



    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'gender',
        'the_age'
     

    ];
    /*  public function User()
    {
        return $this->hasMany('App\User');
    }
    */
    /**
     * Get the user associated with the Lawdata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

 //   public function Contract()
 //   {
 //       return $this->belongsTo(Contract::class);
 //   }

    /**
     * Get all of the contract fwdata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
}
