<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use HasSubscription;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'device_id',
        'device_type',
        'country_code',
        'phone_number',
        'api_token',
        'api_token_expire_at',
        'account_type',
        'is_blocked'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}