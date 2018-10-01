<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    protected $table = 'gallery';

    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery');
    }
}