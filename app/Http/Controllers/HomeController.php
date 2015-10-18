<?php

namespace Tuita\Http\Controllers;

use Tuita\Models\Post;
use Tuita\Models\User;
use Auth;

class HomeController extends Controller {

	public function index()
	{
		$numTuits = Post::where('user_id','=',Auth::user()->id)->count();

		$posts = Post::join('users','users.id','=','posts.user_id')->select()->get();

		return view('index')->with(compact('numTuits','posts'));
	}
}