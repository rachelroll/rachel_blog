<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function show(Category $category, Request $request)
    {
        $posts = Post::withOrder($request->order)
            ->where('category_id', $category->id)
            ->paginate(20);
        return view('posts.index', compact('posts', 'category'));
    }
}
