<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::with('user','category')->paginate(8);

        return view('posts.index', compact('posts'));
    }

}
