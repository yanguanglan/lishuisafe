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

Route::get('/shengchanguanli', array('as'=>'shengchanguanli', function()
{
	//dd(Cookie::get('account'));
	return View::make('shengchanguanli.index');
	//$results = DB::select('select * from zunit');
	//dd($results);
}));

Route::get('/xinxifuwu', array('as'=>'xinxifuwu', function()
{
	#区域检测
	$qyjc = DB::select('EXEC proc_origin_test_analysis_info');

	#企业列表
	$syqy = DB::select('EXEC proc_origin_company_info ?', array('1'));
	#企业列表
    $heib = DB::select('EXEC proc_origin_company_info ?', array('-1'));
	#企业列表
    $hongb = DB::select('EXEC proc_origin_company_info ?', array('2'));
		
	return View::make('xinxifuwu.index')->with('qyjc', $qyjc)->with('syqy', $syqy)->with('heib', $heib)->with('hongb', $hongb);
}));

#检测管理登录
Route::get('/login/jianceguanli', array('as'=>'jiance.login', 'uses'=>'UsersController@getJianceUserLogin'));
Route::post('/login/jianceguanli', array('as'=>'jiance.login.post', 'uses'=>'UsersController@postJianceUserLogin'));

#责任管理登录
Route::get('/login/zerenguanli', array('as'=>'zeren.login', 'uses'=>'UsersController@getZerenUserLogin'));
Route::post('/login/zerenguanli', array('as'=>'zeren.login.post', 'uses'=>'UsersController@postZerenUserLogin'));

#登录
Route::get('/login', array('as'=>'user.login', 'uses'=>'UsersController@getUserLogin'));
Route::post('/login', array('as'=>'user.login.post', 'uses'=>'UsersController@postUserLogin'));

#退出
Route::get('/logout', array('as'=>'user.logout', 'uses'=>'UsersController@userLogout'));

#溯源手机
	Route::get('/mobile', array('as' => 'mobile', function(){

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
		$jcjl = DB::select('EXEC proc_sample_test_info ?, ?', array($sn, 0));
		#采集记录
		$cjjl = DB::select('EXEC proc_collection_info ?', array($sn));
		#销售记录
		$xsjl = DB::select('EXEC proc_sale_info ?, ?', array($sn, 0));
		#环境检测
		$hjjc = DB::select('EXEC proc_environmental_test_info ?', array($sn));
		#品牌认证
		$pprz = DB::select('EXEC proc_certificate_info ?', array($sn));
		
		return View::make('mobile')->with('sn', $sn)->with('scsxx', $scsxx)->with('zzxx', $zzxx)->with('sfjl', $sfjl)->with('yyjl', $yyjl)->with('jcjl', $jcjl)->with('cjjl', $cjjl)->with('xsjl', $xsjl)->with('hjjc', $hjjc)->with('pprz', $pprz);
	}));


#溯源
	Route::get('/cx', array('as' => 'cx', function(){

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
		$xsjl = DB::select('EXEC proc_sale_info ?, ?', array($sn, 0));
		#环境检测
		$hjjc = DB::select('EXEC proc_environmental_test_info ?, ?', array($sn, 0));
		#品牌认证
		$pprz = DB::select('EXEC proc_certificate_info ?', array($sn));
		
		return View::make('cx')->with('sn', $sn)->with('scsxx', $scsxx)->with('zzxx', $zzxx)->with('sfjl', $sfjl)->with('yyjl', $yyjl)->with('jcjl', $jcjl)->with('cjjl', $cjjl)->with('xsjl', $xsjl)->with('hjjc', $hjjc)->with('pprz', $pprz);
	}));

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
		$pending = DB::select('EXEC proc_farm_check_num ?', array(Session::get('userid')));

		if(Session::get('type') == 8) {
			return View::make('zerenguanli.jdtj')->with('types', $types)->with('result', $result)->with('year', $year)->with('keyword', $keyword)->with('pending', $pending);
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		} else {
			return View::make('zerenguanli.jdtjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('year', $year)->with('keyword', $keyword);
		}
		//
	}));

	Route::get('/jdtjsh/{status?}',  array('as' => 'jdtjsh', function($status=''){
		
		if($status) {
			$companyID = Input::get('companyID');
			DB::select('EXEC proc_farm_check_modify ?, ?, ?', array(Session::get('userid'), $companyID, $status));
		}

		//基地统计审核
		$result = DB::select('EXEC proc_farm_check_list ?', array(Session::get('userid')));

		return View::make('zerenguanli.jdtjsh')->with('result', $result);
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

		$keyword = Input::get('keyword', '');


		$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $keyword));
	
		//$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(2, $date, $keyword));
		if(Session::get('type') == 8) {
			return View::make('zerenguanli.ysctj')->with('types', $types)->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		}else {
			return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		}
		
	}));

	Route::get('/ysctjinfo',  array('as' => 'ysctjinfo', function(){

		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$city = Input::get('city', '');
		$type = Input::get('type', '');

		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_plan_produce_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $startDate, $endTime, $keyword));

		return View::make('zerenguanli.ysctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);;
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

	#责任网格邮箱
	Route::get('/zrwgmail', array('as' => 'zrwgmail', function(){

		$workerID = Input::get('workerID', '');
		$type = Input::get('type', 2);
		$result = DB::select('EXEC proc_duty_grid_email_list ?, ?', array($workerID, $type));
		return View::make('zerenguanli.zrwgmail')->with('type', $type)->with('workerID', $workerID)->with('result', $result);
	}));

	#责任网格邮箱详细
	Route::get('/zrwgmaildetail', array('as' => 'zrwgmaildetail', function(){

		$emailID= Input::get('emailID', '');
		$workerID = Input::get('workerID', '');
		$type = Input::get('type', '');
		$result = DB::select('EXEC proc_duty_grid_email_detail ?', array($emailID));
		return View::make('zerenguanli.zrwgmaildetail')->with('type', $type)->with('workerID', $workerID)->with('emailID', $emailID)->with('result', $result);
	}));

	#责任网格任务
	Route::get('/zrwgtask', array('as' => 'zrwgtask', function(){

		$workerID = Input::get('workerID', '');
		$type = Input::get('type', 2);
		$result = DB::select('EXEC proc_duty_grid_task_list ?, ?', array($workerID, $type));
		return View::make('zerenguanli.zrwgtask')->with('type', $type)->with('workerID', $workerID)->with('result', $result);
	}));

	#责任网格任务详细
	Route::get('/zrwgtaskdetail', array('as' => 'zrwgtaskdetail', function(){

		$taskID= Input::get('taskID', '');
		$workerID = Input::get('workerID', '');
		$type = Input::get('type', '');
		$result = DB::select('EXEC proc_duty_grid_task_detail ?', array($taskID));
		return View::make('zerenguanli.zrwgtaskdetail')->with('type', $type)->with('workerID', $workerID)->with('taskID', $taskID)->with('result', $result);
	}));

	Route::get('/tlpgl', array('as' => 'tlpgl', function(){
		
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$way = Input::get('way', 1);
		$keyword = Input::get('keyword', '');	
		$pending = DB::select('EXEC proc_inputs_check_num ?', array(Session::get('userid')));

		$result = DB::select('EXEC proc_inputs_analysis_info ?, ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $way, $keyword));

		return View::make('zerenguanli.tlpgl')->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('way', $way)->with('keyword', $keyword)->with('pending', $pending);
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
	//投入品管理审核
	Route::get('/tlpglsh/{status?}',  array('as' => 'tlpglsh', function($status=''){
		
		if($status) {
			$logID = Input::get('logID');
			DB::select('EXEC proc_inputs_check_modify ?, ?, ?', array(Session::get('userid'), $logID, $status));
		}

		//基地统计审核
		$result = DB::select('EXEC proc_inputs_check_list ?', array(Session::get('userid')));

		return View::make('zerenguanli.tlpglsh')->with('result', $result);
	}));

	#投入品使用
	Route::get('/tlpglsyinfo', array('as' => 'tlpglsyinfo', function(){
		
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$way = Input::get('way', '');
		$keyword = Input::get('keyword', '');
		$productID = Input::get('productID', '');
		$result = DB::select('EXEC proc_inputs_used_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $way, $keyword, $productID));

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
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$keyword = Input::get('keyword', '');

		$pending = DB::select('EXEC proc_sample_test_check_num ?', array(Session::get('userid')));
		
		$result = DB::select('EXEC proc_sample_test_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $keyword));
		if(Session::get('type') == 8 || Session::get('type') == 4) {
			return View::make('zerenguanli.jctj')->with('types', $types)->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword)->with('pending', $pending);
		}else{
			return View::make('zerenguanli.jctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		}
	}));

	//检测统计审核
	Route::get('/jctjsh/{status?}',  array('as' => 'jctjsh', function($status=''){
		
		if($status) {
			$testDetailID = Input::get('testDetailID', '');
			$testType = Input::get('testType', '');
			DB::select('EXEC proc_sample_test_check_modify ?, ?, ?, ?', array(Session::get('userid'), $testDetailID, $testType, $status));
		}

		//基地统计审核
		$result = DB::select('EXEC proc_sample_test_check_list ?', array(Session::get('userid')));

		return View::make('zerenguanli.jctjsh')->with('result', $result);
	}));


	Route::get('/jctjinfo', array('as' => 'jctjinfo', function(){

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$keyword = Input::get('keyword', '');

		$result = DB::select('EXEC proc_sample_test_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $startDate, $endTime, $keyword));

		return View::make('zerenguanli.jctjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
	}));


	Route::get('/xstj', array('as' => 'xstj', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_sale_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $keyword));
		if(Session::get('type') == 8 || Session::get('type') == 4) {
			return View::make('zerenguanli.xstj')->with('types', $types)->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		} else {
			return View::make('zerenguanli.xstjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		}
		//
	}));

	Route::get('/xstjinfo', array('as' => 'xstjinfo', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_sale_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $startDate, $endTime, $keyword));
		return View::make('zerenguanli.xstjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
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
		$jcjl = DB::select('EXEC proc_sample_test_info ?, ?', array($sn, 1));
		#采集记录
		$cjjl = DB::select('EXEC proc_collection_info ?', array($sn));
		#销售记录
		$xsjl = DB::select('EXEC proc_sale_info ?, ?', array($sn, 1));
		
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

//检测管理
Route::group(array('prefix' => 'jianceguanli', 'before' => 'auth.zerenguanli'), function(){
	//监测任务
	Route::get('/jcrw',  array('as' => 'jcrw', function(){
		
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$item = Input::get('item', -1);
		$user_citylist = get_user_citylist();
		$user_item = get_user_item();
		$result = DB::select('EXEC proc_monitor_task_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $item));

		return View::make('jianceguanli.jcrw')->with('city', $city)->with('item', $item)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist)->with('user_item', $user_item);
	}));

	//监督检测
	Route::get('/jdjc', array('as' => 'jdjc', function(){

		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$usertype = Input::get('usertype', 1);
		$user_citylist = get_user_citylist();
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_sample_random_test_analysis_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $usertype));

		return View::make('jianceguanli.jdjc')->with('city', $city)->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist)->with('user_type', $user_type);
	}));

	//监督检测审核
	Route::get('/jdjcsh', array('as' => 'jdjcsh', function(){

		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$city = Input::get('city', '');
		$usertype = Input::get('usertype', '');
		$institutionID = Input::get('institutionID', '');
		$res = Input::get('res', '');
		$user_citylist = get_user_citylist();
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_sample_random_test_type_info ?, ?, ?, ?, ?,　?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $usertype, $institutionID, $res));

		return View::make('jianceguanli.jdjcsh')->with('city', $city)->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist)->with('user_type', $user_type);
	}));

	//企业送检
	Route::get('/qysj', array('as' => 'qysj', function(){
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$usertype = Input::get('usertype', 1);
		$user_citylist = get_user_citylist();
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_sample_send_test_analysis_info ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $usertype));

		return View::make('jianceguanli.qysj')->with('city', $city)->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist)->with('user_type', $user_type);
	}));

	//企业送检审核
	Route::get('/qysjsh', array('as' => 'qysjsh', function(){

		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$city = Input::get('city', '');
		$usertype = Input::get('usertype', '');
		$institutionID = Input::get('institutionID', '');
		$res = Input::get('res', '');
		$user_citylist = get_user_citylist();
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_sample_send_test_type_info ?, ?, ?, ?, ?,　?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $usertype, $institutionID, $res));

		return View::make('jianceguanli.qysjsh')->with('city', $city)->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist)->with('user_type', $user_type);
	}));

	//企业自检
	Route::get('/qyzj', array('as' => 'qyzj', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_monitor_sample_test_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $startDate, $endTime, $keyword));
		if(Session::get('type') == 8 || Session::get('type') == 4) {
			return View::make('jianceguanli.qyzj')->with('types', $types)->with('result', $result)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(2, $year, $keyword));
		} else {
			return View::make('jianceguanli.qyzjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
		}
	}));
	

	Route::get('/qyzjinfo', array('as' => 'qyzjinfo', function(){
		//类型品种
		$types = get_type();
		//获得数据

		$city = Input::get('city', '');
		$type = Input::get('type', '');
		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$keyword = Input::get('keyword', '');
		$result = DB::select('EXEC proc_monitor_sample_test_type_info ?, ?, ?, ?, ?, ?', array(Session::get('userid'), $city, $type, $startDate, $endTime, $keyword));
		return View::make('jianceguanli.qyzjinfo')->with('result', $result)->with('city', $city)->with('type', $type)->with('startDate', $startDate)->with('endTime', $endTime)->with('keyword', $keyword);
	}));

	//综合统计
	Route::get('/zhtj', array('as' => 'zhtj', function(){
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$user_citylist = get_user_citylist();
		$result = DB::select('EXEC proc_monitor_comprehensive_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime));

		return View::make('jianceguanli.zhtj')->with('city', $city)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist);
	}));

	//综合统计审核
	Route::get('/zhtjsh', array('as' => 'zhtjsh', function(){

		$startDate = Input::get('startDate', '');
		$endTime = Input::get('endTime', '');
		$city = Input::get('city', '');
		$secTypeID = Input::get('secTypeID', '');
		$res = Input::get('res', '');
		$user_citylist = get_user_citylist();
		$result = DB::select('EXEC proc_monitor_comprehensive_type_info ?, ?, ?, ?, ?,　?, ?', array(Session::get('userid'), $city, $startDate, $endTime, $secTypeID, $res));

		return View::make('jianceguanli.zhtjsh')->with('city', $city)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist);
	}));

	//场所统计
	Route::get('/cstj', array('as' => 'cstj', function(){
	    $startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$user_citylist = get_user_citylist();
		$result = DB::select('EXEC proc_monitor_place_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime));

		return View::make('jianceguanli.cstj')->with('city', $city)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist);
	}));
	
	//区域统计
	Route::get('/qytj', array('as' => 'qytj', function(){
	    $startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$usertype = Input::get('usertype', 1);
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_area_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $usertype, $startDate, $endTime));

		return View::make('jianceguanli.qytj')->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_type', $user_type);
	}));

	//趋势分析
	Route::get('/qsfx', array('as' => 'qsfx', function(){
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$city = Input::get('city', 1);
		$user_citylist = get_user_citylist();
		$result = DB::select('EXEC proc_monitor_month_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $city, $startDate, $endTime));

		return View::make('jianceguanli.qsfx')->with('city', $city)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_citylist', $user_citylist);
	}));
	
	//对比分析
	Route::get('/dbfx', array('as' => 'dbfx', function(){
		$startDate = Input::get('startDate', date('Y-m-01', time()));
		$endTime = Input::get('endTime', date('Y-m-d', time()));
		$usertype = Input::get('usertype', 1);
		$user_type = get_user_type();
		$result = DB::select('EXEC proc_monitor_compare_analysis_info ?, ?, ?, ?', array(Session::get('userid'), $usertype, $startDate, $endTime));

		return View::make('jianceguanli.dbfx')->with('usertype', $usertype)->with('startDate', $startDate)->with('endTime', $endTime)->with('result', $result)->with('user_type', $user_type);
	}));

});
