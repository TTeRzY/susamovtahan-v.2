<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technology;
use Illuminate\Support\Facades\Auth;

class AddTechnologiesController extends Controller
{
    //
    public function index() {
        $technologies = Technology::all();
        return view('admin.tehnologia', compact('technologies'));
    }

    public function store(Request $request){

        $technology = new Technology;

        $technology->technology_title = $request->input('technology_title');
        $technology->technology_info = $request->input('technology_info');
        Auth::user()->technologies()->save($technology);

        return redirect()->back();
    }
}
