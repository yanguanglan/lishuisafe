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

		#当前月

		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', '');
		$type = Input::get('type', '');

		//$keyword = Input::get('keyword', '');


		$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(Session::get('userid'), $startDate, $endTime));
		//$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(2, $date, $keyword));
		if(Session::get('type') == 8) {
			return View::make('zerenguanli.ysctj')->with('types', $types)->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime);
		}else {
			return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime);
		}
		
	}));

	Route::get('/ysctjinfo',  array('as' => 'ysctjinfo', function(){

		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$city = Input::get('city', '');
		$type = Input::get('type', '');

		//$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_plan_produce_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $startDate, $endTime));

		return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime);
	}));
	#责任网格
	Route::get('/zrwg', array('as' => 'zrwg', function(){

		$cityID = Input::get('cityID', 0);

		$area = DB::select('EXEC proc_duty_grid_city_list ?', array(Session::get('userid')));
		$city = DB::select('EXEC proc_duty_grid_bigcity_detail_list ?', array(Session::get('userid')));
		$county = DB::select('EXEC proc_duty_grid_city_detail_list ?, ?', array(Session::get('userid'), $cityID));
		$town = DB::select('EXEC proc_duty_grid_town_detail_list ?, ?', array(Session::get('userid'), $cityID));
		return View::make('zerenguanli.zrwg')->with('city', $city)->with('county', $county)->with('town', $town)->with('area', $area)->with('cityID', $cityID);
	}));

	Route::get('/tlpgl', array('as' => 'tlpgl', function(){
		
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$way = Input::get('way', '');
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_inputs_analysis_info ?, ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $way, $keyword));

		return View::make('zerenguanli.tlpgl')->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('way', $way)->with('keyword', $keyword);
	}));
	#投入品采购
	Route::get('/tlpglcginfo', array('as' => 'tlpglcginfo', function(){
		
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$way = Input::get('way', '');
		$keyword = Input::get('keyword', '');
		$productID = Input::get('productID', '');

		$result = DB::select('EXEC proc_inputs_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $way, $keyword, $productID));

		return View::make('zerenguanli.cginfo')->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('way', $way)->with('keyword', $keyword);
	}));

	#投入品使用
	Route::get('/tlpglsyinfo', array('as' => 'tlpglsyinfo', function(){
		
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$way = Input::get('way', '');
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_inputs_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $way, $keyword));

		return View::make('zerenguanli.syinfo')->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('way', $way)->with('keyword', $keyword);
	}));


	Route::get('/fsltj', array('as' => 'fsltj', function(){
		return View::make('zerenguanli.fsltj');
	}));

	Route::get('/fztj', array('as' => 'fztj', function(){
		return View::make('zerenguanli.fztj');
	}));

	Route::get('/jctj', array('as' => 'jctj', function(){

		//类型品种
		$types = get_type();
		//获得数据
		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_sample_test_analysis_info ?, ?, ?', array(Session::get('userid'), $year, $keyword));

		return View::make('zerenguanli.jctj')->with('types', $types)->with('result', $result)->with('year', $year)->with('keyword', $keyword);
	}));

	Route::get('/jctjinfo', array('as' => 'jctjinfo', function(){

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_sample_test_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $year, $keyword));

		return View::make('zerenguanli.jctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
	}));


	Route::get('/xstj', array('as' => 'xstj', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_sale_analysis_info ?, ?, ?', array(Session::get('userid'), $year, $keyword));
		if(Session::get('type') == 8) {
			return View::make('zerenguanli.xstj')->with('types', $types)->with('result', $result)->with('year', $year)->with('keyword', $keyword);
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		} else {
			return View::make('zerenguanli.xstjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
		}
		//
	}));

	Route::get('/xstjinfo', array('as' => 'xstjinfo', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$year = Input::get('year', date('Y', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_sale_type_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $year, $keyword));
		return View::make('zerenguanli.xstjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
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
