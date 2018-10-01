<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Technology;

class ShowTechnologiesController extends Controller
{

    public function index()
    {
        return response(Technology::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
