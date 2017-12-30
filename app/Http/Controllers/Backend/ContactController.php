<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $mail = Contact::all();
        return view('pages.admin.contact.list',compact('mail'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('pages.admin.contact.show',compact('contact'));
    }

    public function delete($id){
        $slider = Contact::find($id);
        $slider -> delete();
        return redirect()->route('backend.contact.index')->with('flash_mesage','delete success');
    }
}
