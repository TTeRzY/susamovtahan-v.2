<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Response;

class ShowOrderController extends Controller
{
    public function index()
    {
        return response(Order::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
