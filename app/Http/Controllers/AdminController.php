<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use Illuminate\Support\Facades\Auth; 

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index']);
	}
	public function index()
	{
		if(Auth::user() && Auth::user()->role!=0)
			return redirect('/login');
		$images=Image::all();
    	return view('admin/admin', compact('images'));
	
	}

 	public function create() 
 	{	
 		
 	// dd(request()->all());
 		 $user = User::create([ 
            'name' => request('name'),
            'email' =>request('email'),
            'password' => bcrypt(request('password')),
           	'role' => 1 //admin is role 0
            ]);
 		 return redirect('/admin');
 	 		 
 	}

 	
   
}
