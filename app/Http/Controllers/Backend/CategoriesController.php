<?php

namespace App\Http\Controllers\Backend;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('id', 'DESC')->get();
        return view('pages.admin.Category.list', compact('categories'));
    }

    public function create()
    {
        $categories = Categories::orderBy('id', 'DESC')->get();
        return view('pages.admin.Category.add', compact('categories'));
    }

    public function edit($id)
    {

        $category = Categories::find($id);
        $categories = Categories::orderBy('id', 'DESC')->get();
        return view('pages.admin.Category.edit', compact('category','categories'));
    }

    public function store(Request $request)
    {
        $services = new Categories();
        $services->name = $request->title;
        $services->parent_id = $request->parent_id;

        $services->slug = $request->slug;
        $services->seo_title = $request->seotitle;
        $services->seo_keyword = $request->keywords;
        $services->seo_description = $request->seodescription;

        $services->save();

        return redirect()->route('backend.category.index');
    }

    public function update(Request $request, $id)
    {
        $services = Categories::find($id);
        $services->name = $request->title;
        $services->parent_id = $request->parent_id;


        $services->slug = $request->slug;
        $services->seo_title = $request->seotitle;
        $services->seo_description = $request->seodecription;
        $services->seo_keyword = $request->keywords;
        $services->save();
        return redirect()->route('backend.category.index');
    }

    public function delete($id)
    {
        $services = Categories::find($id);
        $services->delete();
        return redirect()->route('backend.category.index');
    }
}
