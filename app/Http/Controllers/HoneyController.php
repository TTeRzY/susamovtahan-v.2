<?php

namespace App\Http\Controllers;

use App\Honey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoneyController extends Controller
{
    public function index(){
        $honey = Honey::all();

        return view('admin.products.honey.index', compact('honey'));
    }

    public function store(Request $request){

        $honey = new Honey;

        $file = $request->file('honey_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $honey->honey_image = $name;
        $request->file('honey_image')->move("uploads", $name);
        $honey->honey_title = $request->input('honey_title');
        $honey->honey_price = $request->input('honey_price');
        $honey->honey_info = $request->input('honey_info');
        $honey->honey_more_info = $request->input('honey_more_info');
        Auth::user()->honey()->save($honey);

        return redirect()->back();
    }

    public function edit($id)
    {
        $honey = Honey::find($id);

        return view('admin.products.honey.edit', compact('honey'));

    }

    public function update($id, Request $request)
    {
        $honey = Honey::find($id);
        if($honey)
        {
            if($request->file('honey_image')) {
                $file = $request->file('honey_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $honey->honey_image = $name;
                $request->file('honey_image')->move("uploads", $name);
                $honey->honey_title = $request->input('honey_title');
                $honey->honey_price = $request->input('honey_price');
                $honey->honey_info = $request->input('honey_info');
                $honey->honey_more_info = $request->input('honey_more_info');
            }else{
                $honey->honey_title = $request->input('honey_title');
                $honey->honey_price = $request->input('honey_price');
                $honey->honey_info = $request->input('honey_info');
                $honey->honey_more_info = $request->input('honey_more_info');
            }
            $honey->save();
        }

        return redirect('/admin/products/honey');
    }


    public function delete($id){
        $honey = Honey::find($id);
        $image_path = public_path().'/uploads/'.$honey->honey_image;
        unlink($image_path);
        $honey->delete();
        return redirect()->back();
    }
}
