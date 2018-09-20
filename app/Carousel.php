<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Carousel extends Model
{
    protected $table = 'carousel_info';

    public function carousels()
    {
        return $this->hasMany('App\Models\User');
    }
}
