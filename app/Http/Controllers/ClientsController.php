<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientsOrders;


class ClientsController extends Controller
{
    public function store(Request $request)
    {
        $clients_orders = new ClientsOrders();
        $json_products = json_encode($request->products);
        $clients_orders->products = $json_products;
        $clients_orders->name = $request->name;
        $clients_orders->phone = $request->phone;
        $clients_orders->email = $request->email;
        $clients_orders->city = $request->city;
        $clients_orders->address = $request->address;
        $clients_orders->message = $request->message;
        $clients_orders->totalPrice = $request->totalPrice;

        $clients_orders->save();

        return redirect()->back();
    }
}
