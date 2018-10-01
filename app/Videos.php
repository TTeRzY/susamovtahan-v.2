<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';

    public function videos()
    {
        return $this->hasMany('App\Models\Videos');
    }
}
