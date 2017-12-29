<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth; 

class OrderController extends Controller
{
    public function create()
    {
    	$order = new Order();
    	$order->user_id=Auth::user()->id;
    	$order->images=request('ids');
    	$order->save();
    	return redirect('/gallery')->withSuccess('Your order is done!');
    	 
    }
}
