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

        $file = $request->file('technology_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $technology->technology_image = $name;
        $request->file('technology_image')->move("uploads", $name);
        $technology->technology_title = $request->input('technology_title');
        $technology->technology_info = $request->input('technology_info');
        Auth::user()->technologies()->save($technology);

        return redirect()->back();
    }

    public function edit($id)
    {
        $technology = Technology::find($id);

        return view('admin.editTechnologies', compact('technology'));

    }

    public function update($id, Request $request)
    {
        $technology = Technology::find($id);
        if($technology)
        {
            if($request->file('technology_image')) {
                $file = $request->file('technology_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $technology->technology_image = $name;
                $request->file('technology_image')->move("uploads", $name);
                $technology->technology_title = $request->input('technology_title');
                $technology->technology_info = $request->input('technology_info');
            }else{
                $technology->technology_title = $request->input('technology_title');
                $technology->technology_info = $request->input('technology_info');
            }
            $technology->save();
        }

        return redirect('/admin/tehnologia');
    }


    public function delete($id){
        $technologies = Technology::find($id);
        $technologies->delete();
        return redirect()->back();
    }
}
