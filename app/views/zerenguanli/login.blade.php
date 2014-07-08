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
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-1.7.2.min.js') }}"></script>

</head>

<body>
<div class="wrap">
<!--header-->	
<div class="header">
	<div class="logo">
		<a href="/"><img src="{{ URL::asset('images/logo.jpg') }}" /></a>
	</div>
	<ul class="loR">
		<li><a href=""><img src="{{ URL::asset('images/dl1.jpg') }}"></a></li>
		<li><a href=""><img src="{{ URL::asset('images/dl2.jpg') }}"></a></li>
		<li><a href=""><img src="{{ URL::asset('images/dl3.jpg') }}"></a></li>
		<li><a href=""><img src="{{ URL::asset('images/dl4.jpg') }}"></a></li>
	</ul>
</div>
<!--header end-->
<!--info-->
<form name="login" method="POST">
<div class="info">
	<div class="infoL">
		<ul>
			<li class="title"><img src="{{ URL::asset('images/lgtitle.jpg') }}"></li>
			<li><span>用户名:</span><input name="account" type="text" placeholder=""></li>
			<li><span>密码:</span><input name="password" type="password" placeholder=""></li>
			<li><span>验证码:</span><input name="captcha" type="text" placeholder="" class="code">{{ HTML::image(Captcha::img(), 'Captcha image', array('class'=>'codeImg'))}}<a href="javascript:" id="RefreshCode">看不清，换一张</a></li>
			@if ($errors->has('login'))
				<div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
			@endif
			@if ($errors->has('captcha'))
				<div class="alert alert-error">{{ $errors->first('captcha', ':message') }}</div>
			@endif
			<li class="btnWp">
				<input name="state" type="hidden" value="1" class="login">
				<input type="submit" value="登录" class="login">
				<input type="reset" value="重置" class="reset">
			</li>
		</ul>
	</div>
	<div class="infoR">
		<img src="{{ URL::asset('images/side1.jpg') }}">
	</div>
</div>
</form>
<!--info end-->
</div>
<script type="text/javascript">
	$(function(){
		$("#RefreshCode").click(function(event){
			$(".codeImg").attr("src", "{{URL::to('captcha')}}?"+Math.random());
		})
	})
</script>	
</body>
</html>