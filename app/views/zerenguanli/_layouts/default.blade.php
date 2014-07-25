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
	<title>责任管理系统
		{{ Request::is('zerenguanli/zrwg*') ? '|责任网格' : '' }}
		{{ Request::is('zerenguanli/jdtj*') ? '|基地统计' : '' }}
		{{ Request::is('zerenguanli/ysctj*') ? '|预生产统计' : '' }}
		{{ Request::is('zerenguanli/tlpgl*') ? '|投入品管理' : '' }}
		{{ Request::is('zerenguanli/jctj*') ? '|检测统计' : '' }}
		{{ Request::is('zerenguanli/xstj*') ? '|销售统计' : '' }}
		{{ Request::is('zerenguanli/cpsy*') ? '|产品溯源' : '' }}
		{{ Request::is('zerenguanli/sjfx*') ? '|数据分析' : '' }}
		{{ Request::is('zerenguanli/xtsz*') ? '|系统设置' : '' }}
		{{ Request::is('zerenguanli/tzgg*') ? '|通知公告' : '' }}
	</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
@include('zerenguanli._layouts.assets')
</head>

<body>
@include('zerenguanli._layouts.header')
@include('zerenguanli._layouts.navigation')
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