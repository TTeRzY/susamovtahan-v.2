<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    public function about()
    {
        return $this->hasMany('App\Models\About');
    }
}
