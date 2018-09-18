<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Crud;

class ShowProductController extends Controller
{
    public function index()
    {
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
