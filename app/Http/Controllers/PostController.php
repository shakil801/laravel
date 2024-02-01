<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //show all posts
    public function index(){
        $posts = Post::orderby('created_at','desc')->get();
        return view('posts.index',['posts'=>$posts]);
    }
    //create posts
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        //validations
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $post = new Post;
        // $file_name = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('images',$file_name));
        $file_name = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $file_name);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $file_name;
        $post->save();
        return redirect()->route('posts.index')->with('success','Post Created Successfully.');
    }
}
