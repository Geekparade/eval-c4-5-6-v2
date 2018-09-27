<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	//display welcome page
    public function index() 
    {
    	return view('welcome');
    }
}
