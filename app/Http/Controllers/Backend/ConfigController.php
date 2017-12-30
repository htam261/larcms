<?php

namespace App\Http\Controllers\Backend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConfigController extends Controller
{
    public function index(){
        $config = Config::first();
        return view('pages.admin.config.list',compact('config'));
    }
    public function show(){
        $config = Config::first();
        return view('pages.admin.config.list',compact('config'));
    }
    public function update(Request $request,$id){
        $config = Config::find($id);
        $config->title = $request->title;
        $config->description = $request->description;
        $config->keywords = $request->keywords;
        $config->address = $request->address;
        $config->phone = $request->phone;
        $config->fax = $request->fax;
        $config->email = $request->email;
        $config->facebook = $request->facebook;
        $config->youtube = $request->youtube;


        if (Input::hasFile('logo')) {
            \File::delete($config->logo);
            $path = 'uploads/config/';
            $image = $path . time() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move($path, $image);
            $config->logo = $image;
        }
        if (Input::hasFile('favicon')) {
            \File::delete($config->favicon);
            $path = 'uploads/config/';
            $image_favicon = $path . time() . '_' . $request->file('favicon')->getClientOriginalName();
            $request->file('favicon')->move($path, $image_favicon);
            $config->favicon = $image_favicon;
        }
//        return $request->logo;
        $config->save();
        return redirect()->route('backend.config.index');
    }
}
