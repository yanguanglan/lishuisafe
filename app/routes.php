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

#登录
Route::get('/login', array('as'=>'user.login', 'uses'=>'UsersController@getUserLogin'));
Route::post('/login', array('as'=>'user.login.post', 'uses'=>'UsersController@postUserLogin'));
#退出
Route::post('/logout', array('as'=>'user.logout', 'uses'=>'UsersController@userLogout'));

#责任管理
Route::group(array('prefix' => 'zerenguanli'), function(){

	Route::get('/jdtj',  array('as' => 'jdtj', function(){
		//类型品种
		$type = get_type();
		//获得数据

		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');


		$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(1, $year, $keyword));
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		return View::make('zerenguanli.jdtj')->with('type', $type)->with('result', $result)->with('year', $year)->with('keyword', $keyword);


		//return View::make('zerenguanli.jdtjinfo')->with('result', $result);
	}));

	Route::get('/jdtjinfo',  array('as' => 'jdtjinfo', function(){

		$city = Input::get('city');
		$type = Input::get('type');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_farm_type_info ?, ?, ?, ?, ?', array(1, $city, $type, $year, $keyword));

		return View::make('zerenguanli.jdtjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
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
