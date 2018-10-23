<?php

namespace App\Http\Controllers;

use App\ClientsOrders;
use Illuminate\Http\Response;

class ShowClientsOrdersController extends Controller
{
    public function index(){

        return response(ClientsOrders::all()->jsonSerialize(), Response::HTTP_OK);

    }

}
