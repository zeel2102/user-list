<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
	public function index() //Default method to call index file(view)
	{
		//variable passing syntax 
		
		// return view('custom.index')->with('name', 'Zeel Rajput'); //(1)
		
		/* 
		$name = 'Zeel Rajput';  //(2)
		return view('custom.index')->withName($name);
		*/

		return view('custom.index')->with('name', 'Zeel Rajput')
								   ->with('date', date('Y-m-d'));
	}    
}
