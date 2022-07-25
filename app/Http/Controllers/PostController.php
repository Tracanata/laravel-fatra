<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('posts',[
            "title" => "Posts",
            "posts" => \App\Models\Post::all()
        ]);
    }

    public function show($slug){
        return view('post',[
            "title" => "single post",
            "post" => \App\Models\Post::find($slug)
        ]);
    }
    // public function __invoke(Request $request)
    // {
    //     //
    // }
}
