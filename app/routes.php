<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
	//$results = DB::select('select * from zunit');
	//dd($results);
});

Route::group(array('prefix' => 'zerenguanli'), function(){

	Route::get('/',  array('as' => 'jdtj', function(){
		return View::make('zerenguanli.jdtj');
	}));

	Route::get('/ysctj', array('as' => 'ysctj', function(){
		return View::make('zerenguanli.ysctj');
	}));

	Route::get('/fsltj', array('as' => 'fsltj', function(){
		return View::make('zerenguanli.fsltj');
	}));

	Route::get('/fztj', array('as' => 'fztj', function(){
		return View::make('zerenguanli.fztj');
	}));

	Route::get('/jctj', array('as' => 'jctj', function(){
		return View::make('zerenguanli.jctj');
	}));

	Route::get('/xstj', array('as' => 'xstj', function(){
		return View::make('zerenguanli.xstj');
	}));


	Route::get('/cpsy', array('as' => 'cpsy', function(){
		return View::make('zerenguanli.cpsy');
	}));

	Route::get('/sjfx', array('as' => 'sjfx', function(){
		return View::make('zerenguanli.sjfx');
	}));

	Route::get('/xtsz', array('as' => 'xtsz', function(){
		return View::make('zerenguanli.xtsz');
	}));

	Route::get('/tzgg', array('as' => 'tzgg', function(){
		return View::make('zerenguanli.tzgg');
	}));

});
