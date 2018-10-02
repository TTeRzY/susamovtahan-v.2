<?php

namespace App\Http\Controllers;

use App\Honey;
use Illuminate\Http\Response;

class ShowHoneyController extends Controller
{
    public function index()
    {
        return response(Honey::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
