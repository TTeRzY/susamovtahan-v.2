<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Carousel;
use App\Sections;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    //

    public function index()
    {
        $tasks = Task::all();
        $carousels = Carousel::all();
        $sections = Sections::all();



        return view('admin.index', compact('tasks', 'carousels', 'sections'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        $carousel = new Carousel;
        $section = new Sections;
        if($request->get('carousel_form'))
        {
            $file = $request->file('carousel_image');
            $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $carousel->carousel_image = $name;
            $request->file('carousel_image')->move("uploads", $name);
            $carousel->carousel_title = $request->input('carousel_title');
            $carousel->carousel_text = $request->input('carousel_text');
            Auth::user()->carousels()->save($carousel);
        }
        else if($request->get('products_form'))
        {
            if($request->file('product_image')) {
                $file = $request->file('product_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $task->product_image = $name;
                $request->file('product_image')->move("uploads", $name);
                $task->product_title = $request->input('product_title');
                $task->product_info = $request->input('product_info');
                Auth::user()->tasks()->save($task);
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            $file = $request->file('section_image');
            $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $section->section_image = $name;
            $request->file('section_image')->move("uploads", $name);
            $section->section_title = $request->input('section_title');
            $section->section_info = $request->input('section_info');
            Auth::user()->sections()->save($section);
        }
        return redirect()->back();

    }


    public function edit($id)
    {
        $task = Task::find($id);
        $carouselItem = Carousel::find($id);

        if($task)
        {
            dd($task);
            return view('admin.edit', compact('task'));
        }
        else
        {
            dd($carouselItem);
            return view('admin.editCarousel', compact('carouselItem'));
        }

    }

    public function editCarousel($id)
    {
        $task = Task::find($id);
        $carouselItem = Carousel::find($id);

        if($task)
        {
            return view('admin.edit', compact('task'));
        }
        else
        {
            return view('admin.editCarousel', compact('carouselItem'));
        }

    }


    public function update($id, Request $request)
    {
        $task = Task::find($id);
        if($task)
        {
            if($request->file('product_image')->isValid()) {
                $file = $request->file('product_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $task->product_image = $name;
                $request->file('product_image')->move("uploads", $name);
            }
            $task->product_title = $request->input('product_title');
            $task->product_info = $request->input('product_info');
            $task->save();
        }

        return redirect('/admin');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $carousel = Carousel::find($id);
        $section = Sections::find($id);

        if($task)
        {
            $task->delete();

        }
        if($carousel)
        {
            $carousel->delete();
        }
        if($section)
        {
            $section->delete();
        }
        return redirect()->back();
    }
}
