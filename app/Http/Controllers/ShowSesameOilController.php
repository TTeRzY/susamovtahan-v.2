<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\SesameOil;

class ShowSesameOilController extends Controller
{
    public function index()
    {
        return response(SesameOil::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
