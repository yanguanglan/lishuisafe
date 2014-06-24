<?php
/**
 * 用户相关
 */
class Userscontroller extends \BaseController {

	/**
	 * 登录页面
	 */
	public function getUserLogin()
	{
		$account = '11111111111';
		$password = '1111111111';
		//$result = DB::select('EXEC proc_login ?, ?', array($account, $password));
		//$result = DB::select('select * from zuserlogin');
		//$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array('1', '2014', ''));
		$result = DB::select('EXEC proc_plan_produce_analysis_info ?, ?, ?', array(1, '2014-06-01', '2014-06-24'));
		dd($result);
		//get_type();
		//get_year();

	}

	/**
	 * 登录提交
	 */
	public function postUserLogin()
	{
		$account = Input::get('account');
		$password = Input::get('password');
		$remember = Input::get('remember');
		$state = Input::get('state');

		#检查登录次数
		if(!Session::has('logintime')) {
			Session::put('logintime', 1);
		} else {
			/*if(Session::get('logintime') > 5){
				return Response::json(array(
			        'errno' => 1003,
			        'errmsg'=> '登录次数过多请稍后再试'
				));	
			}*/
		}

		$result = DB::select('EXEC proc_login ?, ?', array($account, $password));

		#登录成功
		if($result) {
			#去掉登录次数
			Session::forget('logintime');

			Session::put('userid', $result[0]->userid);
			Session::put('username', $result[0]->username);
			Session::put('type', $result[0]->type);
			Session::put('belongArea', $result[0]->belongArea);
			Session::put('pstate', $result[0]->pstate);
			#判断权限
			if($state != $result[0]->pstate && $result[0]->pstate!=3)
			{
				return Response::json(array(
	        		'errno' => 1001,
	        		'errmsg'=> '对不起您的账号没有权限登录系统'
				));	
			}	

			#记住密码
			if($remember == 1) {
				$cremember = Cookie::forever('remember', 1);
				$caccount = Cookie::forever('account', $account);
				$cpassword = Cookie::forever('password', $password);
			} else {
			#去掉记住密码
					$cremember = Cookie::make('remember', '', -1);
					$caccount = Cookie::make('account', '', -1);
					$cpassword = Cookie::make('password', '', -1);
			}

			return Response::json(array(
	        	'errno' => 0,
	        	'errmsg'=> '登录成功'
			))->withCookie($cremember)->withCookie($caccount)->withCookie($cpassword);

		}

		#错误登录次数
		Session::put('logintime', Session::get('logintime') + 1);
		return Response::json(array(
	        'errno' => 1002,
	        'errmsg'=> '登录账号或密码错误'
		));	
	}

	/**
	 * 退出登录
	 */
	public function userLogout()
	{
		Session::flush();
		return Redirect::to('/');
	}

}