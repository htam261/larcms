<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('pages.admin.about.list',compact('about'));
    }
    public function show(){
        $about = About::first();
        return view('pages.admin.about.list',compact('about'));
    }
    public function update(Request $request,$id){
      $about = About::find($id);
        $about->description = $request->description;
        $about->content = $request->details;
        $about->seo_title = $request->seotitle;
        $about->seo_description = $request->seodecription;
        $about->seo_keyword = $request->keywords;
        $about->save();
        return redirect()->route('backend.about.index');
    }
}
