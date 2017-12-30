<?php

namespace App\Http\Controllers\Backend;

use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('id', 'DESC')->get();
        return view('pages.admin.post.list', compact('post'));
    }

    public function create()
    {
        $categories = Categories::orderBy('id', 'DESC')->get();
        return view('pages.admin.post.add',compact('categories'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Categories::orderBy('id', 'DESC')->get();
        return view('pages.admin.post.edit', compact('post','categories'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->parent_id;

        $image = $request->file('image')->getClientOriginalName();
        $path = 'uploads/post/';
        $post->image = $path . $image;
        $request->file('image')->move($path, $image);

        $image_hot = $request->file('banner')->getClientOriginalName();
        $path_hot = 'uploads/post/';
        $post->banner = $path_hot . $image_hot;
        $request->file('banner')->move($path_hot, $image_hot);

        $post->description = $request->description;
        $post->content = $request->details;
        $post->hot = $request->show;
        $post->slug = $request->url;
        $post->seo_title = $request->seotitle;
        $post->seo_keyword = $request->keywords;
        $post->seo_description = $request->seodecription;

        $post->save();

        return redirect()->route('backend.post.index');
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->details;
        $post->category_id = $request->parent_id;
        if (Input::hasFile('image')) {
            \File::delete($post->image);
            $path = 'uploads/post/';
            $image = $path . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($path, $image);
            $post->image = $image;
        }

        if (Input::hasFile('banner')) {
            \File::delete($post->banner);
            $path = 'uploads/post/';
            $image = $path . time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move($path, $image);
            $post->banner = $image;
        }

        $post->hot = $request->show;
        $post->slug = $request->url;
        $post->seo_title = $request->seotitle;
        $post->seo_description = $request->seodecription;
        $post->seo_keyword = $request->keywords;
        $post->save();
        return redirect()->route('backend.post.index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('backend.post.index');
    }
}
