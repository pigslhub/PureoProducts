<?php

namespace App\Models;
use App\Models\General\Order;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [ 'name', 'email', 'password' ];

//    public function orders()
//    {
//        return $this->hasMany(Order::class);
//    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
