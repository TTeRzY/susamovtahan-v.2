<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $table = 'home_sections';

    public function sections()
    {
        return $this->hasMany('App\Models\Sections');
    }
}
