<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListArticleController extends Controller
{
    //display article_list page
    public function index() 
    {
    	$articles = DB::table('articles')->get();
    	return view('article_list', ['articles'=>$articles]);
    }
}
