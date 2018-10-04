<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function carousels()
    {
        return $this->hasMany(Carousel::class);
    }

    public function sections()
    {
        return $this->hasMany(Sections::class);
    }

    public function technologies()
    {
        return $this->hasMany(Technology::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    public function about()
    {
        return $this->hasMany(About::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contacts::class);
    }


    public function tahan()
    {
        return $this->hasMany(Tahan::class);
    }

    public function sesame_oil()
    {
        return $this->hasMany(SesameOil::class);
    }

    public function limets()
    {
        return $this->hasMany(Limets::class);
    }

    public function honey()
    {
        return $this->hasMany(Honey::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
