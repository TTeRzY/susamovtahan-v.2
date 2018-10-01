<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Auth;

class AddGalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();

        return view('admin.gallery.index', compact('gallery'));
    }

    public function store(Request $request){

        $gallery = new Gallery;

        $file = $request->file('gallery_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $gallery->gallery_image = $name;
        $request->file('gallery_image')->move("uploads", $name);
        $gallery->gallery_info = $request->input('gallery_info');
        Auth::user()->gallery()->save($gallery);

        return redirect()->back();
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('admin.gallery.editGallery', compact('gallery'));

    }

    public function update($id, Request $request)
    {
        $gallery = Gallery::find($id);
        if($gallery)
        {
            if($request->file('gallery_image')) {
                $file = $request->file('gallery_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $gallery->gallery_image = $name;
                $request->file('gallery_image')->move("uploads", $name);
                $gallery->gallery_info = $request->input('gallery_info');
            }else{
                $gallery->gallery_info = $request->input('gallery_info');
            }
            $gallery->save();
        }

        return redirect('/admin/gallery/');
    }


    public function delete($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
}
