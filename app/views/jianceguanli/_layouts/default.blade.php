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
	<title>检测管理系统
		{{ Request::is('jianceguanli/jcrw*') ? '|检测任务' : '' }}
		{{ Request::is('jianceguanli/jdjc*') ? '|监督检测' : '' }}
		{{ Request::is('jianceguanli/qysj*') ? '|企业送检' : '' }}
		{{ Request::is('jianceguanli/qyzj*') ? '|企业自检' : '' }}
		{{ Request::is('jianceguanli/zhtj*') ? '|综合统计' : '' }}
		{{ Request::is('jianceguanli/cstj*') ? '|按场所统计' : '' }}
		{{ Request::is('jianceguanli/qytj*') ? '|按区域统计' : '' }}
		{{ Request::is('jianceguanli/qsfx*') ? '|趋势分析' : '' }}
		{{ Request::is('jianceguanli/dbfx*') ? '|对比分析' : '' }}
	</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
@include('jianceguanli._layouts.assets')
</head>

<body>
@include('jianceguanli._layouts.header')
@include('jianceguanli._layouts.navigation')
@yield('main')
<div class="footer">
	<p>版权所有：丽水市农业投资发展有限公司   技术支持：某某科技有限公司   联系电话：400-888-8888</p>
</div>
<script type="text/javascript">
	$(function(){
		//基本统计 隔行换色
		$(".jdtj table tr:even").css("backgroundColor","#fbfbfb");
		$(".jdtj table tr:odd").css("backgroundColor","#ffffff"); 
	})
</script>
</body>
</html>