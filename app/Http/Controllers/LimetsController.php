<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Limets;
use Illuminate\Support\Facades\Auth;

class LimetsController extends Controller
{
    public function index(){
        $limets = Limets::all();

        return view('admin.products.limets.index', compact('limets'));
    }

    public function store(Request $request){

        $limets = new Limets;

        $file = $request->file('limets_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $limets->limets_image = $name;
        $request->file('limets_image')->move("uploads", $name);
        $limets->limets_title = $request->input('limets_title');
        $limets->limets_price = $request->input('limets_price');
        $limets->limets_info = $request->input('limets_info');
        $limets->limets_more_info = $request->input('limets_more_info');
        Auth::user()->limets()->save($limets);

        return redirect()->back();
    }

    public function edit($id)
    {
        $limets = Limets::find($id);

        return view('admin.products.limets.edit', compact('limets'));

    }

    public function update($id, Request $request)
    {
        $limets = Limets::find($id);
        if($limets)
        {
            if($request->file('limets_image')) {
                $file = $request->file('limets_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $limets->limets_image = $name;
                $request->file('limets_image')->move("uploads", $name);
                $limets->limets_title = $request->input('limets_title');
                $limets->limets_price = $request->input('limets_price');
                $limets->limets_info = $request->input('limets_info');
                $limets->limets_more_info = $request->input('limets_more_info');
            }else{
                $limets->limets_title = $request->input('limets_title');
                $limets->limets_price = $request->input('limets_price');
                $limets->limets_info = $request->input('limets_info');
                $limets->limets_more_info = $request->input('limets_more_info');
            }
            $limets->save();
        }

        return redirect('/admin/products/limets');
    }


    public function delete($id){
        $limets = Limets::find($id);
        $image_path = public_path().'/uploads/'.$limets->limets_image;
        unlink($image_path);
        $limets->delete();
        return redirect()->back();
    }
}
