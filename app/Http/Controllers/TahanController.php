<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tahan;
use Illuminate\Support\Facades\Auth;

class TahanController extends Controller
{
    public function index(){
        $tahan = Tahan::all();

        return view('admin.products.tahan.index', compact('tahan'));
    }

    public function store(Request $request){

        $tahan = new Tahan;

        $file = $request->file('tahan_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $tahan->tahan_image = $name;
        $request->file('tahan_image')->move("uploads", $name);
        $tahan->tahan_title = $request->input('tahan_title');
        $tahan->tahan_price = $request->input('tahan_price');
        $tahan->tahan_info = $request->input('tahan_info');
        $tahan->tahan_more_info = $request->input('tahan_more_info');
        Auth::user()->tahan()->save($tahan);

        return redirect()->back();
    }

    public function edit($id)
    {
        $tahan = Tahan::find($id);

        return view('admin.products.tahan.edit', compact('tahan'));

    }

    public function update($id, Request $request)
    {
        $tahan = Tahan::find($id);
        if($tahan)
        {
            if($request->file('tahan_image')) {
                $file = $request->file('tahan_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $tahan->tahan_image = $name;
                $request->file('tahan_image')->move("uploads", $name);
                $tahan->tahan_title = $request->input('tahan_title');
                $tahan->tahan_price = $request->input('tahan_price');
                $tahan->tahan_info = $request->input('tahan_info');
                $tahan->tahan_more_info = $request->input('tahan_more_info');
            }else{
                $tahan->tahan_title = $request->input('tahan_title');
                $tahan->tahan_price = $request->input('tahan_price');
                $tahan->tahan_info = $request->input('tahan_info');
                $tahan->tahan_more_info = $request->input('tahan_more_info');
            }
            $tahan->save();
        }

        return redirect('/admin/products/tahan');
    }


    public function delete($id){
        $tahan = Tahan::find($id);
        $tahan->delete();
        return redirect()->back();
    }
}
