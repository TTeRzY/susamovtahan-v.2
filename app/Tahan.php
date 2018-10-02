<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahan extends Model
{
    protected $table = 'tahan';

    public function tahan()
    {
        return $this->hasMany('App\Models\Tahan');
    }
}
