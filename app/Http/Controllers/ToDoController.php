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
        if($request->input('task'))
        {
            $task = new Task;
            $task->product_info = $request->input('task');
            Auth::user()->tasks()->save($task);
        }

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
