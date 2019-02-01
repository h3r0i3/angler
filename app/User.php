<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function fishingRods()
    {
        return $this->hasMany('App\FishingRod');
    }

    public function reels()
    {
        return $this->hasMany('App\Reel');
    }

    public function lines()
    {
        return $this->hasMany('App\Line');
    }

    public function hooks()
    {
        return $this->hasMany('App\Hook');
    }

    public function leaders()
    {
        return $this->hasMany('App\Leader');
    }

    public function sets()
    {
        return $this->hasMany('App\Set');
    }

}
