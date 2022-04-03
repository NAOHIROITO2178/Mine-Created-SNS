<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class ShowPostsController extends Controller
{
    public function ShowPostsPage(){
        return view("showposts");
    }

    public function postContents()
    {
        $request->validate([
            'post' => 'required|max:500',
        ]);

            post::create([
            'user_id' => Auth::user()->id,
            'name'    => Auth::user()->name,
            'post'   => $request->post,
        ]);

        return back();
    }
}
