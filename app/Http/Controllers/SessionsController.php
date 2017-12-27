<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class SessionsController extends Controller
{
    public function create()
    {
    	  return view('/login/login');
    }

    public function store()
    {
    	

    	if(! auth()->attempt(request(['name','email', 'password']))) 

    	{
       		return back()->withErrors(['message' => 'Check your credentials and try again.']);
    	}


		if(Auth::user()->role == '0')
    	{
    		return redirect('/admin');
    	}
   
    	return redirect('/gallery');

    }

     public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }


}
