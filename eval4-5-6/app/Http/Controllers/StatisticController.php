<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticController extends Controller
{
    //display statistic page
    public function index() 
    {
    	return view('statistic');
    }
}
