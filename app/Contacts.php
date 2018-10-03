<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';

    public function contacts()
    {
        return $this->hasMany('App\Models\Contacts');
    }
}
