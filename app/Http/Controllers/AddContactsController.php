<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contacts;

class AddContactsController extends Controller
{
    public function index(){
        $contacts = Contacts::all();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function store(Request $request){

        $contacts = new Contacts;

        $file = $request->file('contacts_image');
        $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $contacts->contacts_image = $name;
        $request->file('contacts_image')->move("uploads", $name);
        $contacts->contacts_title = $request->input('contacts_title');
        $contacts->contacts_paragraph = $request->input('contacts_paragraph');
        $contacts->contacts_info = $request->input('contacts_info');
        Auth::user()->contacts()->save($contacts);

        return redirect()->back();
    }

    public function edit($id)
    {
        $contacts = Contacts::find($id);

        return view('admin.contacts.editContacts', compact('contacts'));

    }

    public function update($id, Request $request)
    {
        $contacts = Contacts::find($id);
        if($contacts)
        {
            if($request->file('contacts_image')) {
                $file = $request->file('contacts_image');
                $name =rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $contacts->contacts_image = $name;
                $request->file('contacts_image')->move("uploads", $name);
                $contacts->contacts_title = $request->input('contacts_title');
                $contacts->contacts_paragraph = $request->input('contacts_paragraph');
                $contacts->contacts_info = $request->input('contacts_info');
            }else{
                $contacts->contacts_title = $request->input('contacts_title');
                $contacts->contacts_paragraph = $request->input('contacts_paragraph');
                $contacts->contacts_info = $request->input('contacts_info');
            }
            $contacts->save();
        }

        return redirect('/admin/contacts/');
    }


    public function delete($id){
        $contacts = Contacts::find($id);
        $image_path = public_path().'/uploads/'.$contacts->contacts_image;
        unlink($image_path);
        $contacts->delete();
        return redirect()->back();
    }
}
