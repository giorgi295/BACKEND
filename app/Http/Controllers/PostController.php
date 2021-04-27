<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('posts', compact('posts'));
    }

    public function post($id){
     $post=Post::find($id);
     return view("post", compact("post"));
    }

    public function create(){

        return view('create');

    }

    public function save(Request $request){
        $test=Post::all();
        $post=new Post($request->all());
        $post->save();
        return redirect()->back();
    }

    public function delete($id){

        $post=Post::find($id);
        $post->delete();
        return redirect()->back();

    }

    public function update($id){
        $post=Post::find($id);
        return view('update', compact('post'));
    }

    public function edit(Request $request, $id){

        $post=Post::find($id);
        $post->title=$request->title;
        $post->text=$request->text;
        $post->update();
        return redirect()->back();

    }

    public function postlists(){
        $posts = Post::paginate(2);
        return view("lists", compact('posts'));
    }


}

