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
		$password = '11111111111';

		//$result = DB::select('EXEC proc_login ?, ?', array($account, $password));
		//$result = DB::select('select * from zuserlogin');

		$result = DB::select('EXEC proc_farm_analysis_info ?, ?, ?', array(, 201, ''));
		dd($result);
		//get_type();
		//get_year();
	}

	/**
	 * 登录提交
	 */
	public function postUserLogin()
	{

	}

	/**
	 * 退出登录
	 */
	public function userLogout()
	{

	}

}