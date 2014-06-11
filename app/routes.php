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
	//dd(Cookie::get('account'));
	return View::make('index');
	//$results = DB::select('select * from zunit');
	//dd($results);
});

#登录
Route::get('/login', array('as'=>'user.login', 'uses'=>'UsersController@getUserLogin'));
Route::post('/login', array('as'=>'user.login.post', 'uses'=>'UsersController@postUserLogin'));
#退出
Route::get('/logout', array('as'=>'user.logout', 'uses'=>'UsersController@userLogout'));

#责任管理
Route::group(array('prefix' => 'zerenguanli', 'before' => 'auth.zerenguanli'), function(){

	Route::get('/jdtj',  array('as' => 'jdtj', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(Session::get('userid'), $year, $keyword));
		if(Session::get('type') == 8) {
			return View::make('zerenguanli.jdtj')->with('types', $types)->with('result', $result)->with('year', $year)->with('keyword', $keyword);
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		} else {
			return View::make('zerenguanli.jdtjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
		}
		//
	}));

	Route::get('/jdtjinfo',  array('as' => 'jdtjinfo', function(){

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_farm_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $year, $keyword));

		return View::make('zerenguanli.jdtjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
	}));

	Route::get('/ysctj', array('as' => 'ysctj', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$year = Input::get('year', date('Y', time()));
		$month = Input::get('month', '01');
		$city = Input::get('city', '');
		$type = Input::get('type', '');

		$date = $year.'-'.$month."-01 00:00:00";

		$keyword = Input::get('keyword', '');


		$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(Session::get('userid'), $date, $keyword));
		//$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(2, $date, $keyword));
		if(Session::get('type') == 8) {
			return View::make('zerenguanli.ysctj')->with('types', $types)->with('result', $result)->with('year', $year)->with('month', $month)->with('keyword', $keyword);;
		}else {
			return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('month', $month)->with('keyword', $keyword);
		}
		
	}));

	Route::get('/ysctjinfo',  array('as' => 'ysctjinfo', function(){

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$month = Input::get('month', '01');

		$date = $year.'-'.$month."-01 00:00:00";
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_plan_produce_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $date, $keyword));

		return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('month', $month)->with('keyword', $keyword);
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

		$sn = Input::get('sn', '');
		#生产商信息
		$scsxx = DB::select('EXEC proc_farm_product_sale_info ?', array($sn));
		#种子信息
		$zzxx = DB::select('EXEC proc_seed_info ?', array($sn));
		#施肥记录
		$sfjl = DB::select('EXEC proc_fertilizer_apply_info ?', array($sn));
		#用药记录
		$yyjl = DB::select('EXEC proc_pesticide_apply_info ?', array($sn));
		#检测记录
		$jcjl = DB::select('EXEC proc_sample_test_info ?', array($sn));
		#采集记录
		$cjjl = DB::select('EXEC proc_collection_info ?', array($sn));
		#销售记录
		$xsjl = DB::select('EXEC proc_sale_info ?', array($sn));
		
		return View::make('zerenguanli.cpsy')->with('sn', $sn)->with('scsxx', $scsxx)->with('zzxx', $zzxx)->with('sfjl', $sfjl)->with('yyjl', $yyjl)->with('jcjl', $jcjl)->with('cjjl', $cjjl)->with('xsjl', $xsjl);
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
