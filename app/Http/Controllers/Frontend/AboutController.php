<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        $services = Service::get();
        $seo_title=$about->seo_title;
        $seo_description = $about->seo_description;
        $seo_keyword = $about->seo_keyword;
        return view('pages.about',compact('about','services','seo_title','seo_description','seo_keyword'));
    }
    public function show(){
        $about = About::first();
        return view('pages.about-us',compact('about'));
    }
}
