<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth.zerenguanli', function()
{
	//if (Auth::guest()) return Redirect::guest('login');
	if(!Session::has('userid') || Session::get('pstate')==2) return Redirect::to('/');
});

Route::filter('auth.jianceguanli', function()
{
	//if (Auth::guest()) return Redirect::guest('login');
	if(!Session::has('userid') || Session::get('pstate')==1) return Redirect::to('/');
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/**
 * 获得种植品类
 */
function get_type()
{
	$result = DB::select('EXEC proc_second_type');
	return $result;
}

/**
 * 获得当前用户所在区县
 */
function get_user_citylist()
{
	$result = DB::select('EXEC proc_duty_grid_city_list ?', array(Session::get('userid')));
	return $result;
}

/**
 * 获得当前用户二级分类
 */
function get_user_type()
{
	$result = DB::select('EXEC proc_user_second_type ?', array(Session::get('userid')));
	return $result;
}

/**
 * 解析统计
 */
function check_type($types, $countInfo)
{
	$typesToArray = array();
	if (is_array($types)) {
		foreach ($types as $value) {
			$typesToArray[$value->ID] = 0;
		}
	}

	if($countInfo) {
		$countInfoArray = explode(',', $countInfo);
		foreach ($countInfoArray as $value) {
			list($key, $val) = explode('-', $value);
			$typesToArray[$key] = $val;
		}
	}
	
	return $typesToArray;
}

/**
 * 年份
 */
function get_year()
{
	$current_year = (int) date('Y', time());
	$i = 5;
	while($i>0){
		$year[] = $current_year--;
		$i--;
	}
	return $year;
}

/**
 * 抽样
 */
function get_pwhere($pwhere)
{
	switch ($pwhere) {
		case 1:
			return "超市";
			break;
		case 2:
			return "批发市场";
			break;
		case 3:
			return "农贸市场";
			break;
		case 4:
			return "检测机构";
			break;
		case 5:
			return "基地";
			break;
		default:
			# code...
			break;
	}
}

/**
 * 检测性质
 */
function get_user_item()
{
	return array(
		'-1'=>'全部',
		'0'=>'例行检查',
		'1'=>'监督抽检',
		'2'=>'专项检测'
	);
}