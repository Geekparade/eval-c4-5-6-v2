<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Créer deux redirections pour la page création et modification d'article
// exemple: 
// 			return redirect('facture');
// ou
// 			return redirect()->route('facture');

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);// names home the route to the index method of the WelcomeController controller for the base URL.
Route::get('/statistic', 'StatisticController@index');
Route::get('/historic', 'HistoricController@index');
Route::get('/movement', 'MovementController@index');
Route::get('/list', 'ListArticleController@index');

Route::get('/modification', 'ModificationArticleController@index');

Route::get('/create', 'CreateArticleController@getForm');
Route::post('/create','CreateArticleController@postForm');