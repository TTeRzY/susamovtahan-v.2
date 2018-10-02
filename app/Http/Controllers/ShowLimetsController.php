<?php

namespace App\Http\Controllers;

use App\Limets;
use Illuminate\Http\Response;

class ShowLimetsController extends Controller
{
    public function index()
    {
        return response(Limets::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
