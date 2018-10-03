<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\About;

class ShowAboutController extends Controller
{
    public function index()
    {
        return response(About::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
