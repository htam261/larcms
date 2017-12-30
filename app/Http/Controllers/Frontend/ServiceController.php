<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('id', 'DESC')->get();

        return view('pages.services',compact('services'));
    }
    public function show($slug, $id){
        $services = Service::find($id);
        $seo_title=$services->seo_title;
        $seo_description = $services->seo_description;
        $seo_keyword = $services->seo_keyword;
        $seo_image = $services->image;
        return view('pages.detail',compact('services','seo_image','seo_title','seo_description','seo_keyword'));
    }
}
