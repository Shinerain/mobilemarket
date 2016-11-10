<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 *
 * @author xrs
 * @SWG\Model(id="User")
 * @SWG\Property(name="id", type="integer", description="pk")
 * @SWG\Property(name="name", type="string", description="name")
 * @SWG\Property(name="email", type="string", description="email")
 * @SWG\Property(name="password", type="string", description="password")
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
