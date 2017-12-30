<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        return view('pages.admin.gallery.list', compact('galleries'));
    }

    public function create()
    {
        return view('pages.admin.gallery.add');
    }
    public function show($id)
    {
        $galleries = Gallery::find($id);
        return view('pages.admin.gallery.detail');
    }

    public function edit($id)
    {
        $galleries = Gallery::find($id);
        return view('pages.admin.gallery.edit', compact('galleries'));
    }
    public function store(Request $request){
        $galleries = new Gallery();
        $galleries->title = $request->title;
        $image = $request->file('image')->getClientOriginalName();
        $path = 'uploads/gallery/';
        $galleries->image = $path . $image;
        $request->file('image')->move($path, $image);

        $galleries->hot = $request->show;
        $galleries->link = $request->video;
        $galleries->save();

        return redirect()->route('backend.gallery.index');
    }
    public function update(Request $request,$id){
        $galleries = Gallery::find($id );
        $galleries->title = $request->title;
        if (Input::hasFile('image'))
        {
            \File::delete($food->image);
            $path  = 'uploads/food/details/';
            $image = $path . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($path, $image);
            $galleries->image       =$image;
        }

        $galleries->hot = $request->show;
        $galleries->link = $request->video;

        $galleries->save();

        return redirect()->route('backend.gallery.index');
    }

    public function delete($id){
        $slider = Gallery::find($id);
        $slider -> delete();
        return redirect() -> route('backend.gallery.index');
    }
}
