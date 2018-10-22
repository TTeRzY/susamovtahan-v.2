<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsOrders extends Model
{
    protected $table = 'clients_orders';

    public function carousels()
    {
        return $this->hasMany('App\Models\ClientsOrders');
    }
}
