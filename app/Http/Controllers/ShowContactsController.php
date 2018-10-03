<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Contacts;

class ShowContactsController extends Controller
{
    public function index()
    {
        return response(Contacts::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
