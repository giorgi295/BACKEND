<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\tag;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

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
        $post=new Post($request->all());
        $post->save();
        $post->tags()->attach($request->tags);
        return redirect()->back();
    }

    public function delete($id){

        $post=Post::find($id);
        $post->delete();
        return redirect()->back();

    }

    public function update($id){
        $tags=Tag::with('posts')->get();
        $post=Post::find($id);
        return view('update', compact('post', 'tags'));
    }

    public function edit(Request $request, $id){

        $post=Post::find($id);
        $post->title=$request->title;
        $post->text=$request->text;
        $post->update();
        if ( $post->tags()->detach($request->tags)==true){
            $post->tags()->detach($request->tags);
        }else{
            $post->tags()->attach($request->tags);
        }
        return redirect()->back();

    }

    public function postlists(){
        $posts = Post::paginate(2);
        return view("lists", compact('posts'));
    }


}

