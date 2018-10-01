<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Videos;

class ShowVideosController extends Controller
{
    public function index()
    {
        return response(Videos::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
