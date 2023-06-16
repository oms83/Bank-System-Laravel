<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        // azalarak basliklara gore sirala  || get daynamic method 
        return view('blog.index')->with('posts', Post::orderBy('title', "DESC")->get());


        // Take this data with you || all static method cannot allow change
        // return view('blog.index')->with('posts', Post::all());
    }


    public function create()
    {
        return view('/blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);   

        $slug = Str::slug($request->title, '-');

        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();

        // نقل الصور المضافة الى ملف الصور 
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => '/images/'.$newImageName,
            'user_id' => auth()->user()->id
        ]);
        
        return redirect('/blog');
    }


    public function show($slug)
    {
        return view('blog.show')
        ->with('post', Post::where('slug', $slug)->first());
    }


    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());
    }


    public function update(Request $request, $slug)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);   

        $slug = Str::slug($request->title, '-');

        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::where('slug', $slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => '/images/'.$newImageName,
            'user_id' => auth()->user()->id
        ]);


        return redirect('/blog/'.$slug)
        ->with('message', 'Post Updated :-)');
    }

    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();

        return  redirect('/blog')
        ->with('message', 'Post Deleted :-(');

    }
}
