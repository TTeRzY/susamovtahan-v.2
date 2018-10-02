<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limets extends Model
{
    protected $table = 'limets';

    public function limets()
    {
        return $this->hasMany('App\Models\Limets');
    }
}
