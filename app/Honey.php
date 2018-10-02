<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
    protected $table = 'honey';

    public function honey()
    {
        return $this->hasMany('App\Models\Honey');
    }
}
