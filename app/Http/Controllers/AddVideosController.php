<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use Illuminate\Support\Facades\Auth;

class AddVideosController extends Controller
{
    public function index(){
        $videos = Videos::all();

        return view('admin.videos.index', compact('videos'));
    }

    public function store(Request $request){

        $videos = new Videos;

        $file = $request->file('video_content');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $videos->video_content = $name;
        $request->file('video_content')->move("uploads/videos", $name);
        $videos->video_title = $request->input('video_title');
        $videos->video_info = $request->input('video_info');
        Auth::user()->videos()->save($videos);

        return redirect()->back();
    }

    public function edit($id)
    {
        $videos = Videos::find($id);

        return view('admin.videos.editVideos', compact('videos'));

    }

    public function update($id, Request $request)
    {
        $videos = Videos::find($id);
        if($videos)
        {
            if($request->file('video_content')) {
                $file = $request->file('video_content');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $videos->video_content = $name;
                $request->file('video_content')->move("uploads/videos", $name);
                $videos->video_title = $request->input('video_title');
                $videos->video_info = $request->input('video_info');
            }else{
                $videos->video_title = $request->input('video_title');
                $videos->video_info = $request->input('video_info');
            }
            $videos->save();
        }

        return redirect('/admin/videos/');
    }


    public function delete($id){
        $videos = Videos::find($id);
        $videos->delete();
        return redirect()->back();
    }
}
