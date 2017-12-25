<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index']);
	}
	public function index()
	{
		return view('admin/admin');
	}

 	public function create() 
 	{	
 	// dd(request()->all());
 		 $user = User::create([ 
            'name' => request('name'),
            'password' => bcrypt(request('password')),
           	'role' => 1
            ]);
 		 return redirect('/admin');
 	 		 
 	}

 	
   
}
