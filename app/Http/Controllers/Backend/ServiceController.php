<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('type',1)->orderBy('id', 'DESC')->get();
        $title = 'Tin tức';
        return view('pages.admin.service.list', compact('services','title'));
    }
    public function promotion()
    {
        $services = Service::where('type',2)->orderBy('id', 'DESC')->get();
        $title = 'Tin khuyến mãi';
        return view('pages.admin.service.list', compact('services','title'));
    }
    public function star()
    {
        $services = Service::where('type',3)->orderBy('id', 'DESC')->get();
        $title = 'tin sao trải nghiệm';
        return view('pages.admin.service.list', compact('services','title'));
    }
    public function create()
    {
        return view('pages.admin.service.add');
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('pages.admin.service.edit', compact('services'));
    }

    public function store(Request $request)
    {
        $services = new Service();
        $services->title = $request->title;
        $services->type = $request->type;

        $image = $request->file('image')->getClientOriginalName();
        $path = 'uploads/services/';
        $services->image = $path . $image;
        $request->file('image')->move($path, $image);

        $image_hot = $request->file('imagehot')->getClientOriginalName();
        $path_hot = 'uploads/services/';
        $services->image_hot = $path_hot . $image_hot;
        $request->file('imagehot')->move($path_hot, $image_hot);

        $services->description = $request->description;
        $services->content = $request->details;
        $services->hot = $request->show;
        $services->slug = $request->url;
        $services->seo_title = $request->seotitle;
        $services->seo_keyword = $request->keywords;
        $services->seo_description = $request->seodecription;

        $services->save();

        return redirect()->route('backend.service.index');
    }

    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $services->title = $request->title;
        $services->type = $request->type;

        $services->description = $request->description;
        $services->content = $request->details;

        if (Input::hasFile('image')) {
            \File::delete($services->image);
            $path = 'uploads/services/';
            $image = $path . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($path, $image);
            $services->image = $image;
        }

        if (Input::hasFile('imagehot')) {
            \File::delete($services->image_hot);
            $path = 'uploads/services/';
            $image = $path . time() . '_' . $request->file('imagehot')->getClientOriginalName();
            $request->file('imagehot')->move($path, $image);
            $services->image_hot = $image;
        }

        $services->hot = $request->show;
        $services->slug = $request->url;
        $services->seo_title = $request->seotitle;
        $services->seo_description = $request->seodecription;
        $services->seo_keyword = $request->keywords;
        $services->save();
        return redirect()->route('backend.service.index');
    }

    public function delete($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('backend.service.index');
    }
}
