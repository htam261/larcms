<?php

namespace App\Http\Controllers\Backend;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class BannerController extends Controller
{
    public function index()
    {
        $galleries = Image::orderBy('id', 'DESC')->get();
        return view('pages.admin.banner.list', compact('galleries'));
    }

    public function create()
    {
        return view('pages.admin.banner.add');
    }

    public function edit($id)
    {
        $galleries = Image::find($id);
        return view('pages.admin.banner.edit', compact('galleries'));
    }
    public function store(Request $request){
        $galleries = new Image();
        $galleries->name = $request->title;
        $image = $request->file('image')->getClientOriginalName();
        $path = 'uploads/gallery/';
        $galleries->images = $path . $image;
        $request->file('image')->move($path, $image);

        $galleries->link = $request->link;
        $galleries->save();

        return redirect()->route('backend.banner.index');
    }
    public function update(Request $request,$id){
        $galleries = Image::find($id );
        $galleries->name = $request->title;
        if (Input::hasFile('image'))
        {
            \File::delete($food->images);
            $path  = 'uploads/food/details/';
            $image = $path . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($path, $image);
            $galleries->images       =$image;
        }

        $galleries->link = $request->link;

        $galleries->save();

        return redirect()->route('backend.banner.index');
    }

    public function delete($id){
        $slider = Image::find($id);
        $slider -> delete();
        return redirect() -> route('backend.banner.index');
    }
}
