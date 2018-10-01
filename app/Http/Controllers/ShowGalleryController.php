<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Gallery;

class ShowGalleryController extends Controller
{

    public function index()
    {
        return response(Gallery::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
