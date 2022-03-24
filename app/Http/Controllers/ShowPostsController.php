<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPostsController extends Controller
{
    public function ShowPostsPage(){
        return view("showposts");
    }

    public function postContents()
    {
        $request->validate([
            'post' => 'required|max:500',
            'post' => 'required|min:1',
        ]);
    }
}
