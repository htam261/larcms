<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        return view('pages.gallery', compact('galleries'));
    }
    public function show($slug, $id){
        $galleries = Gallery::with('images')->orderBy('id', 'DESC')->find($id);
        return view('pages.gallery-detail', compact('galleries'));
    }
}
