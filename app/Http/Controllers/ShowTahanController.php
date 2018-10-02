<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Tahan;

class ShowTahanController extends Controller
{
    public function index()
    {
        return response(Tahan::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
