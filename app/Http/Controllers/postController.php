<?php

namespace App\Http\Controllers;
use App\Models\PostsModel;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index()
    {
        //
        $posts = PostsModel::latest()->simplePaginate();
        return view('index' , compact('posts'));
    }
    public function show($id) {
        $posts = PostsModel::find($id);
        return view('post' , compact('posts'));
    }
}
