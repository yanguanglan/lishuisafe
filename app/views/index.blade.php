<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie ie6 lt-ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]>  <html lang="en" class="no-js ie">     <![endif]-->
<!--[if !IE]><!--><html class="no-js">  <!--<![endif]-->
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>html</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-1.7.2.min.js') }}"></script>
</head>

<body class="bootPage">
<div class="top">
	<div class="w85">
		<div class="topLf">丽水市农产品质量安全溯源监管平台</div>
		<div class="topRg">
			<ul>
				<li><a href="">生产管理系统</a></li>
				<li><a href="{{ URL::route('jdtj') }}">责任管理系统</a></li>
				<li><a href="">检测管理系统</a></li>
				<li><a href="">信息服务系统</a></li>
			</ul>
		</div>
	</div>
</div>
<!--/end top-->
<div class="bootCont w85">
	<div class="cont">
		<div class="box">
			<div class="info icon01">
				<a href="">
					<span>生产管理系统</span>
				</a>
			</div>
		</div>
		<div class="box">
			<div class="info icon02">
				<a href="{{ URL::route('jdtj') }}">
					<span>责任管理系统</span>
				</a>
			</div>
		</div>
		<div class="box">
			<div class="info icon03">
				<a>
					<span>检测管理系统</span>
				</a>
			</div>
		</div>
		<div class="box">
			<div class="info icon04">
				<a>
					<span>信息服务系统</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<p>版权所有：丽水市农业投资发展有限公司   技术支持：某某科技有限公司   联系电话：400-888-8888</p>
</div>
<form name="loginForm" id="loginForm">
<div class="loginBg"></div>
<div class="login">
	<div class="cont">
		<div class="close"><img src="{{URL::asset('images/xx.png')}}"></div>
		<div class="info">
			<h2>用户登录</h2>
			<div class="warning">用户名错误！</div>
			<div class="inpBox"><input type="text" placeholder="用户名" class="inp01"/></div>
			<div class="inpBox"><input type="text" placeholder="密码" class="inp01"/></div>
			<div class="labelBox">
			<label><input type="checkbox" />记住用户名</label>
			<label><input type="checkbox" />记住密码</label>
			</div>
			<div class="inpBox"><input type="submit" value="登录"  class="btn"/></div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
	$(function(){
		var infoNum=$(".box .info");
		infoNum.click(function(){
			$(".loginBg").show();
			$(".login").show();
			return false;
		})
		$(".login .close").click(function(){
			$(".loginBg").hide();
			$(".login").hide();
		})
	})
</script>
</body>
</html>