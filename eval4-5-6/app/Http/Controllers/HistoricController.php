<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
Use App\Movement;
Use App\MovementType;
Use App\Direction;

class HistoricController extends Controller
{
    //display historic page
    public function index() 
    {
    	$articles		= 	Article::first();
    	$movements      = 	Movement::first();
    	$movement_types = 	MovementType::first();
    	$directions		=	Direction::first();

    	// $allMethods 	=  [
    	// 	$articles,
    	// 	$movements,
    	// 	$movement_types,
    	// 	$directions
    	// ];

    	// dd($allMethods);
    	return view('historic', compact('articles', 'movements', 'movement_types', 'directions' /*'allMethods'*/));
    }   
}