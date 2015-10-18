<?php

namespace Tuita\Http\Controllers;

use Tuita\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Tuita\Models\User;
use Auth;

class AuthController extends Controller {

	public function getSignup()
	{
		return view('auth.signup');
	}

	public function postSignup(Request $request)
	{
		//Validar los campos que recibimos del formulario
		$this->validate($request,[
			'name' => 'required|alpha|max:255',
			'email' => 'required|unique:users|email|max:255',
			'username' => 'required|unique:users|alpha_dash|max:25',
			'password' => 'required|min:4'
		]);

		User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			'imagen'  => 'http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y'
		]);

		return redirect()->route('home');
	}

	public function getSignin()
	{
		return view('auth.signin');
	}

	public function postSignin(Request $request)
	{
		$this->validate($request,[
			'email'    =>'required',
			'password' => 'required'
		]);

		if(!Auth::attempt($request->only(['email','password'],$request->has('remember'))))
		{
			return redirect()->back();
		}

		return redirect()->route('home');
	}

	public function getSignout()
	{
		Auth::logout();

		return redirect()->route('home');
	}
}