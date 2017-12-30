<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contacts');
    }
    public function postcontact(Request $request){
        $product = new Contact();
        $product->name = $request->fullname;
        $product->phone = $request->phone;
        $product->mail = $request->email;
        $product->address = $request->address;
        $product->content = $request->mess;

        $product->save();
        return redirect()->route('frontend.contact.index');
    }
}
