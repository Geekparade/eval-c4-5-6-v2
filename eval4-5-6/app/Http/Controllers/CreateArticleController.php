<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests\ArticlesRequest;

class CreateArticleController extends Controller
{
    // public function index() 
    // {
    // 	return view('article_create');
    // }

    public function getForm()   //display article_create page
    {
    	return view('article_create');
    }

    public function postForm(ArticlesRequest $request)
	{
		// dd($request);

        $article = new Article($request->input());
        $article->save();

        return redirect('confirm');
		
	}
}
