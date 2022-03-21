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

    }
}
