<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class SliderContentController extends Controller
{
    //

    public function index()
    {
        $carousels = Carousel::all();
        dd($carousels);
    }

    public function store(Request $request)
    {


    }


    public function edit($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function delete($id)
    {

    }
}
