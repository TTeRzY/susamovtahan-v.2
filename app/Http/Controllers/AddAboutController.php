<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Auth;

class AddAboutController extends Controller
{
    public function index(){
        $about = About::all();

        return view('admin.about.index', compact('about'));
    }

    public function store(Request $request){

        $about = new About;

        $file = $request->file('about_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $about->about_image = $name;
        $request->file('about_image')->move("uploads", $name);
        $about->about_title = $request->input('about_title');
        $about->about_info = $request->input('about_info');
        Auth::user()->about()->save($about);

        return redirect()->back();
    }

    public function edit($id)
    {
        $about = About::find($id);

        return view('admin.about.editAbout', compact('about'));

    }

    public function update($id, Request $request)
    {
        $about = About::find($id);
        if($about)
        {
            if($request->file('about_image')) {
                $file = $request->file('about_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $about->about_image = $name;
                $request->file('about_image')->move("uploads", $name);
                $about->about_title = $request->input('about_title');
                $about->about_info = $request->input('about_info');
            }else{
                $about->about_title = $request->input('about_title');
                $about->about_info = $request->input('about_info');
            }
            $about->save();
        }

        return redirect('/admin/about/');
    }


    public function delete($id){
        $about = About::findOrFail($id);
        //Delete File from public folder
        $image_path = public_path().'/uploads/'.$about->about_image;
        unlink($image_path);
        $about->delete();
        return redirect()->back();
    }
}
