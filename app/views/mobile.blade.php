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
	<title>丽水市农产品溯源</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

</head>

<body>
<div class="wrap">
  <h2>基本信息</h2>
    @if ($scsxx)
    <table>
   <tr>
    <td width="30%"  align="right"  valign="middle">作物名称：</td>
    <td width="70%" valign="middle"  >{{ $scsxx[0]->seedName }}</td>
  </tr> 
  <tr>
    <td width="30%"align="right"  valign="middle">基地名称：</td>
    <td width="70%" valign="middle">{{ $scsxx[0]->companyName }}</td>
  </tr> <tr>
    <td width="30%" align="right" valign="middle">负责人：</td>
    <td width="70%" valign="middle">{{ $scsxx[0]->pfaren }}</td>
  </tr>
  <tr>
    <td width="30%" align="right" valign="middle">联系电话：</td>
    <td width="70%" valign="middle">{{ $scsxx[0]->pphone }}</td>
  </tr>
<tr>
    <td width="30%" align="right" valign="middle">联系地址：</td>
    <td width="70%" valign="middle">{{ $scsxx[0]->paddress }}</td>
  </tr>
 @else 

  <tr>
    <td width="30%"  align="right"  valign="middle">作物名称：</td>
    <td width="70%" valign="middle"  >&nbsp;</td>
  </tr> 
  <tr>
    <td width="30%"align="right"  valign="middle">基地名称：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr> <tr>
    <td width="30%" align="right" valign="middle">负责人：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td width="30%" align="right" valign="middle">联系电话：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
<tr>
    <td width="30%" align="right" valign="middle">联系地址：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
 @endif
</table>
<h2>环境监测：</h2>
<table>
  <tr>
    <td align="center" valign="middle">检测日期</td>
   
    <td align="center" valign="middle">检测项目</td>
    <td align="center" valign="middle">检测结论</td>
  </tr>
   @if ($hjjc)
   @foreach($hjjc as $v)
   <tr>
    <td align="center" valign="middle">{{ date('Y-m-d', strtotime($v->ptime)) }}</td>
   
    <td align="center" valign="middle">{{ $v->pxiangmu }}</td>
    <td align="center" valign="middle">{{ $v->pafter }}</td>
  </tr>
  @endforeach
  @else 
 <tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  @endif
</table>    
 
  <h2>作物信息</h2>
    <table>
    @if ($zzxx)
   <tr>
    <td width="30%"  align="right"  valign="middle">作物名称：</td>
    <td width="70%" valign="middle"  >{{ $zzxx[0]->seedName }}</td>
  </tr> 
  <tr>
    <td width="30%"align="right"  valign="middle">种子名称：</td>
    <td width="70%" valign="middle">{{ $zzxx[0]->typeName }}</td>
  </tr> <tr>
    <td width="30%" align="right" valign="middle">种植日期：</td>
    <td width="70%" valign="middle">@if($zzxx[0]->ptime) {{ date('Y-m-d', strtotime($zzxx[0]->ptime)) }}@endif</td>
  </tr>
  <tr>
    <td width="30%" align="right" valign="middle">种子批次：</td>
    <td width="70%" valign="middle">{{ $zzxx[0]->pseekpc }}</td>
  </tr>
<tr>
    <td width="30%" align="right" valign="middle">种植面积：</td>
    <td width="70%" valign="middle">{{ $zzxx[0]->parea }}{{ $zzxx[0]->plantUnit}}</td>
  </tr>

  <tr>
    <td width="30%" align="right" valign="middle">采收日期：</td>
    <td width="70%" valign="middle">@if($zzxx[0]->purchaseDate){{ date('Y-m-d', strtotime($zzxx[0]->purchaseDate)) }}@endif</td>
  </tr>
  @else
<tr>
    <td width="30%"  align="right"  valign="middle">作物名称：</td>
    <td width="70%" valign="middle"  >&nbsp;</td>
  </tr> 
  <tr>
    <td width="30%"align="right"  valign="middle">种子名称：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr> <tr>
    <td width="30%" align="right" valign="middle">种植日期：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td width="30%" align="right" valign="middle">种子批次：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
<tr>
    <td width="30%" align="right" valign="middle">种植面积：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>

  <tr>
    <td width="30%" align="right" valign="middle">采收日期：</td>
    <td width="70%" valign="middle">&nbsp;</td>
  </tr>
  @endif
</table>

<h2>品牌信息：</h2>
<table>
  <tr>
    <td align="center" valign="middle">品牌名称</td>
   
    <td align="center" valign="middle">认证时间</td>
    <td align="center" valign="middle">有效期</td>
  </tr>
   @if($pprz)
   @foreach($pprz as $v)
  <tr>
    <td align="center" valign="middle">{{ $v->pname }}</td>
   
    <td align="center" valign="middle">{{ date('Y-m-d', strtotime($v->ptimest)) }}</td>
    <td align="center" valign="middle">{{ date('Y-m-d', strtotime($v->ptimeend)) }}</td>
  </tr>
  @endforeach
  @else
	<tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  @endif
</table>    
 <h2>施肥操作：</h2>
<table>
  <tr>
    <td align="center" valign="middle">施肥时间</td>
   
    <td align="center" valign="middle">肥料名称</td>
    <td align="center" valign="middle">用量</td>
  </tr>
   @if($sfjl)
              @foreach ($sfjl as $v)
  <tr>
    <td align="center" valign="middle">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
   
    <td align="center" valign="middle">{{ $v->pnamefei }}</td>
    <td align="center" valign="middle">{{ $v->pmun }}{{ $v->unit }}</td>
  </tr>
  @endforeach
  @else
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  @endif
</table>  
 <h2>施药操作：</h2>
<table>
  <tr>
    <td align="center" valign="middle">施药时间</td>
   
    <td align="center" valign="middle">药品名称</td>
    <td align="center" valign="middle">用量</td>
  </tr>
  @if ($yyjl)
              @foreach($yyjl as $v)
  <tr>
    <td align="center" valign="middle">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
   
    <td align="center" valign="middle">{{ $v->pnameper }}</td>
    <td align="center" valign="middle">{{ $v->pmun }}{{ $v->unit }}</td>
  </tr>
@endforeach
              @else
     <tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>          

@endif

</table> 
 <h2>检测信息：</h2>
<table>
  <tr>
    <td align="center" valign="middle">检测时间</td>
   
    <td align="center" valign="middle">检测项目</td>
    <td align="center" valign="middle">结论</td>
  </tr>
     @if($jcjl)
              @foreach($jcjl as $v)
  <tr>
    <td align="center" valign="middle">{{ date('Y-m-d', strtotime($v->ptime)) }}</td>
   
    <td align="center" valign="middle">{{ $v->pxiangmu }}</td>
    <td align="center" valign="middle">{{ $v->pafter }}</td>
  </tr>
  @endforeach
  @else
   <tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  @endif
</table> 
 <h2>销售情况：</h2>
<table>
  <tr>
    <td align="center" valign="middle">销售时间</td>
   
    <td align="center" valign="middle">采购商</td>
    <td align="center" valign="middle">采购量</td>
  </tr>
  @if($xsjl)
              @foreach($xsjl as $v)

  <tr>
    <td align="center" valign="middle">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
   
    <td align="center" valign="middle">{{ $v->pto }}</td>
    <td align="center" valign="middle">{{ $v->pnum }}{{ $v->unit }}</td>
  </tr>
  @endforeach
  @else
   <tr>
    <td align="center" valign="middle">&nbsp;</td>
   
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  @endif

</table> 
<p class="btnWp"><input type="button" value="企业DIY" class="btn"></p>
</div>
<script type="text/javascript">
	$(function(){
		$(".btn").click(function(){
			window.location.href="http://www.51lianying.cn/index.php/microWeb/index?pageid=745";
		})
	})
</script>
</body>
</html>