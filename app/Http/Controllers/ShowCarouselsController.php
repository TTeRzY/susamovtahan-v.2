<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Carousel;

class ShowCarouselsController extends Controller
{
    public function index()
    {
        return response(Carousel::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
