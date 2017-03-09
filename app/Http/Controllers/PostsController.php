<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
    		$posts = Post::all();
    		return view('posts.index', compact('posts'));
    }

    public function new()
    {
    		return view('posts.new');
    }

    public function store()
    {
    		$this->validate(request(), [
    				'title' => 'required',
    				'body' => 'required'
    		]);

            // calling a publish method defined in the user model
            auth()->user()->publish(
                new Post(request(['title', 'body']))
            );

    		return redirect('/posts');
    }

    public function show(Post $post)
    {
    		return view('posts.show', compact('post'));
    }
}
