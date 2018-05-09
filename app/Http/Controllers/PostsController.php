<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(Request $request)
	{
	    $posts = Post::withOrder($request->order)->paginate(20);
		return view('posts.index', compact('posts'));
	}

    public function show(Post $post, Request $request)
    {
        if( !empty($post->slug) && $post->slug != $request->slug) {
            return redirect($post->link(), 301);
        }
        return view('posts.show', compact('post'));
    }

	public function create(Post $post)
	{
	    $categories = Category::all();
		return view('posts.create_and_edit', compact('post', 'categories'));
	}

	public function store(PostRequest $request)
	{
	    $post = $request->all();

	    $new_post = array_merge($post, ['user_id' => Auth::id()]);

	    $post = Post::create($new_post);
		return redirect()->to($post->link())->with('message', '发布成功.');
	}

	public function edit(Post $post)
	{
        $this->authorize('update', $post);
        $categories = Category::all();
		return view('posts.create_and_edit', compact('post', 'categories'));
	}

	public function update(PostRequest $request, Post $post)
	{
		$this->authorize('update', $post);
		$post->update($request->all());

		return redirect()->to($post->link())->with('message', '更新成功.');
	}

	public function destroy(Post $post)
	{
		$this->authorize('destroy', $post);
		$post->delete();

		return redirect()->route('posts.index')->with('message', '删除成功.');
	}
}