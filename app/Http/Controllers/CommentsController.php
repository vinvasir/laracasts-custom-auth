<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
    		$this->middleware('auth');
    }

		public function store()
		{
				$this->validate(request(), [
						'body' => 'required'
				]);

				auth()->user()->publish(
						new Comment(request('post_id', 'body'))
				);

				return back();
		}
}