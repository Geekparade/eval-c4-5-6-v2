<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovementController extends Controller
{
    ////display movement page
    public function index() 
    {
    	return view('movement');
    }
}
