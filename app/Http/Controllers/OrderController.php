<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $order = Order::all();

        return view('admin.order.index', compact('order'));
    }

    public function store(Request $request){

        $order = new Order;

        $file = $request->file('image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $order->image = $name;
        $request->file('image')->move("uploads", $name);
        $order->name = $request->input('name');
        $order->price = $request->input('price');
        $order->unique_name = $request->input('unique_name');
        Auth::user()->order()->save($order);

        return redirect()->back();
    }

    public function edit($id)
    {
        $order = Order::find($id);

        return view('admin.order.edit', compact('order'));

    }

    public function update($id, Request $request)
    {
        $order = Order::find($id);
        if($order)
        {
            if($request->file('image')) {
                $file = $request->file('image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $order->image = $name;
                $request->file('image')->move("uploads", $name);
                $order->name = $request->input('name');
                $order->price = $request->input('price');
            }else{
                $order->name = $request->input('name');
                $order->price = $request->input('price');
            }
            $order->save();
        }

        return redirect('/admin/order');
    }


    public function delete($id){
        $order = Order::find($id);
        $image_path = public_path().'/uploads/'.$order->image;
        unlink($image_path);
        $order->delete();
        return redirect()->back();
    }
}
