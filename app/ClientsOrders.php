<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsOrders extends Model
{
    protected $table = 'clients_orders';

    public function clients_orders()
    {
        return $this->hasMany('App\Models\ClientsOrders');
    }
}
