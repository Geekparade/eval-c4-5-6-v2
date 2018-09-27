<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ModificationArticleController extends Controller
{
	//display article_modification page to dynamic
    public function index() 
    {

    	return view('article_modification');
    }
}