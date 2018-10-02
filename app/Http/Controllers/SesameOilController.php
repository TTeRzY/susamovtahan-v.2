<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SesameOil;
use Illuminate\Support\Facades\Auth;

class SesameOilController extends Controller
{
    public function index(){
        $sesame_oil = SesameOil::all();

        return view('admin.products.sesame_oil.index', compact('sesame_oil'));
    }

    public function store(Request $request){

        $sesame_oil = new SesameOil;

        $file = $request->file('sesame_oil_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $sesame_oil->sesame_oil_image = $name;
        $request->file('sesame_oil_image')->move("uploads", $name);
        $sesame_oil->sesame_oil_title = $request->input('sesame_oil_title');
        $sesame_oil->sesame_oil_price = $request->input('sesame_oil_price');
        $sesame_oil->sesame_oil_info = $request->input('sesame_oil_info');
        $sesame_oil->sesame_oil_more_info = $request->input('sesame_oil_more_info');
        Auth::user()->sesame_oil()->save($sesame_oil);

        return redirect()->back();
    }

    public function edit($id)
    {
        $sesame_oil = SesameOil::find($id);

        return view('admin.products.sesame_oil.edit', compact('sesame_oil'));

    }

    public function update($id, Request $request)
    {
        $sesame_oil = SesameOil::find($id);
        if($sesame_oil)
        {
            if($request->file('$sesame_oil_image')) {
                $file = $request->file('sesame_oil_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $sesame_oil->sesame_oil_image = $name;
                $request->file('sesame_oil_image')->move("uploads", $name);
                $sesame_oil->sesame_oil_title = $request->input('sesame_oil_title');
                $sesame_oil->sesame_oil_price = $request->input('sesame_oil_price');
                $sesame_oil->sesame_oil_info = $request->input('sesame_oil_info');
                $sesame_oil->sesame_oil_more_info = $request->input('sesame_oil_more_info');
            }else{
                $sesame_oil->sesame_oil_title = $request->input('sesame_oil_title');
                $sesame_oil->sesame_oil_price = $request->input('sesame_oil_price');
                $sesame_oil->sesame_oil_info = $request->input('sesame_oil_info');
                $sesame_oil->sesame_oil_more_info = $request->input('sesame_oil_more_info');
            }
            $sesame_oil->save();
        }

        return redirect('/admin/products/sesame_oil');
    }


    public function delete($id){
        $sesame_oil = SesameOil::find($id);
        $sesame_oil->delete();
        return redirect()->back();
    }
}
