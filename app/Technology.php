<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Technology extends Model
{
    protected $table = 'technologies';

    public function technologies()
    {
        return $this->hasMany('App\Models\Technology');
    }
}