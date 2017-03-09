<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller

{

		public function __construct()
		{
				// only allow non-logged in users (guests) to access the login actions
				$this->middleware('guest')->except('destroy');
		}

		public function create()
		{
				return view('sessions.create');
		}

		public function store()
		{
				if (! auth()->attempt(request(['email', 'password']))) {
						return back()->withErrors([
								'message' => 'Please check your credentials and try again.'
						]);
				}

				return redirect()->home();			
		}

		public function destroy()
		{
				auth()->logout();

				return redirect()->home();
		}
}