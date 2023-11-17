<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    // public function index()
    // {
    //     return view('add-blog-post-form');
    // }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->rooms = $request->rooms;
        $post->preference = $request->preference;
        $post->save();

        $name=$post->name;
        // return redirect('form')->with('status', 'Blog Post Form Data Has Been inserted');
        return view('form',compact('name'));
    }
}
