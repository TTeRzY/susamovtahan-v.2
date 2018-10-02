<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SesameOil extends Model
{
    protected $table = 'sesame_oil';

    public function sesame_oil()
    {
        return $this->hasMany('App\Models\SesameOil');
    }
}
