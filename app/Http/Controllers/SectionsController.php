<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Sections;

class SectionsController extends Controller
{
    public function index()
    {
        return response(Sections::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
