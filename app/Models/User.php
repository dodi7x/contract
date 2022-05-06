<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',





    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The roles that belong to the Contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function  Contract()
    {
        return $this->hasmany(Contract::class);
    }


    public function lawdatas()
    {
        return $this->hasMany(Lawdata::class);
    }

    public function datasuser()
    {
        return $this->hasMany(datauser::class);
    }
    
    public function twouser()
    {
        return $this->hasMany(twouser::class);
    }
    public function Customer()
    {
        return $this->hasMany(Customer::class);
    }
}
