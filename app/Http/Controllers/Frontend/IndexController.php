<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $sliders = Image::all();
        $galleries = Gallery::where('hot',1)->get();
        $services = Post::where('hot',1)->take(10)->get();

        return view('pages.index',compact('sliders','galleries','services'));
    }
}
