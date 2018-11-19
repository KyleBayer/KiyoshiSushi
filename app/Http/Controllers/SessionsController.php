<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct()
    {
        //$this->middleware('guest', ['except' => 'destroy']);
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
    	return view('sessions.create');
    }



   	public function store()
    {
    	 // attempt to authenticate the user

    	if (! auth()->attempt(request(['email', 'password']))) 
    	{
    		// if not redirect back
    		return back()->withErrors([

    			'message' => "Please check your credentials and try again."

    		]);
    	}

    	// if so, sign them in and redirect to the homepage

    	return redirect()->home();
    
    } 

    public function destroy()
    {

    	auth()->logout();

    	return redirect()->home(); //->with('message', 'You have been logged out. Please login again if you like.');
    }
}
