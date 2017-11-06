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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
	$Dominios = App\Dominios::all();

	//$comments =  App\Dominios::where('id', 10)->get();

	$comments = App\Dominios::find(10)->paginas;
	foreach ($comments as $comment) {
	echo $comment->nombre.'<br>';	
    echo $comment->contenido.'<br>';
	}
	//return $Dominios;
});

Auth::routes();
Route::resource('paginas', 'PaginasController');
Route::resource('dominios', 'DominiosController');
Route::get('/home', 'HomeController@index')->name('home');
