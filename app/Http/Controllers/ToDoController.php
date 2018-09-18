<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    //

    public function index()
    {
        $tasks = Task::all();

        return view('admin.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = new Task;

        if ($request->hasFile('product_image')) {
            if($request->file('product_image')->isValid()) {
                try {
                    $file = $request->file('product_image');
                    $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $task->product_image = $name;
                    $request->file('product_image')->move("uploads", $name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }


        $task->product_title = $request->input('product_title');
        $task->product_info = $request->input('product_info');
        Auth::user()->tasks()->save($task);

        return redirect()->back();

    }


    public function edit($id)
    {
        $task = Task::find($id);

        return view('admin.edit', compact('task'));
    }

    public function update($id, Request $request)
    {
        if($request->input('task'))
        {
            $task = Task::find($id);
            $task->product_info = $request->input('task');
            $task->save();
        }

        return redirect('/admin');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }
}
