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

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
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

