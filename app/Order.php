<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function limets()
    {
        return $this->hasMany('App\Models\Order');
    }
}
