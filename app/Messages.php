<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';

    public function messages()
    {
        return $this->hasMany('App\Models\Messages');
    }
}
