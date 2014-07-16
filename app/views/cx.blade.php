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
  <link rel="stylesheet" type="text/css" href="css/login.css">  
	<link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/skitter.css">
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.skitter.min.js"></script>

</head>

<body>
<div class="content">
    <div class="box_skitter box_skitter_large">
    <ul>
      <li><img src="images/b1.jpg"></li>
      <li><img src="images/b2.jpg"></li>
      <li><img src="images/b3.jpg"></li>
      <li><img src="images/b4.jpg"></li>
      <li><img src="images/b5.jpg"></li>
      <li><img src="images/b6.jpg"></li>  
      <li><img src="images/b7.jpg"></li>    
    </ul>
  </div>
  <div class="navAd">
    <ul>
      <li class="spe"><img src="images/sy1.jpg"></li>
      <li><img src="images/sy2.jpg"></li>
      <li><img src="images/sy3.jpg"></li>
      <li><img src="images/sy4.jpg"></li>
      <li><img src="images/sy5.jpg"></li>
    </ul>
  </div>
</div>  
<div class="wrap" style="margin-top:0;width:1000px;">
<!--产品溯源-->
<div class="block" >
	<form>
	<div class="search">
		<div class="searchFr">
			<span>溯源码查找：</span>
			<input name="sn" type="text" placeholder="" value="{{$sn}}" class="searInp" />
			<input type="submit" value="查询" class="searBtn" />
		</div>
	</div>
</form>
	<div class="cont cpsy">
		<div class="table">
			<h2 class="til">生产商信息</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="25%" height="39" bgcolor="#f8f8f8">生产企业</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">负责人</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">联系电话</td>
                <td width="19%" height="39" bgcolor="#f8f8f8">地址</td>
                <td width="11%" height="39" bgcolor="#f8f8f8">采购商</td>
              </tr>
              @if ($scsxx)
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->seedName }}</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->companyName }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->pfaren }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->pphone }}</td>
                <td width="19%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->paddress }}</td>
                <td width="11%" height="39" bgcolor="#FFFFFF">{{ $scsxx[0]->salerName }}</td>
              </tr>
              @else
               <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="19%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="11%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
	  </div>
<div class="table">
      <h2 class="til">农企环境监测</h2>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">企业地址</td>
                <td width="25%" height="39" bgcolor="#f8f8f8">环境监测项目</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">地块类型</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">检测时间</td>
                <td width="19%" height="39" bgcolor="#f8f8f8">检测值</td>
                <td width="11%" height="39" bgcolor="#f8f8f8">结论</td>
              </tr>
               @if ($hjjc)
                <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ $hjjc[0]->paddress }}</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">{{ $hjjc[0]->pxiangmu }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($hjjc[0]->pitype==0) 耕地 @elseif($hjjc[0]->pitype==1) 水田 @elseif($hjjc[0]->pitype==2) 山地 @else 养殖舍 @endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ date('Y-m-d', strtotime($hjjc[0]->ptime)) }}</td>
                <td width="19%" height="39" bgcolor="#FFFFFF">@if($hjjc[0]->pend==0) 不合格 @else 合格 @endif</td>
                <td width="11%" height="39" bgcolor="#FFFFFF">{{ $hjjc[0]->pafter }}</td>
              </tr>
               @else
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="19%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="11%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
    </div> 

    <div class="table">
		<h2 class="til">种子信息</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="25%" height="39" bgcolor="#f8f8f8">种子品种</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">种植日期</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">种子批次</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">种植面积</td>
                <td width="10%" bgcolor="#f8f8f8">采购日期</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">采购量</td>
              </tr>
              @if ($zzxx)
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ $zzxx[0]->seedName }}</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">{{ $zzxx[0]->typeName }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($zzxx[0]->ptime) {{ date('Y-m-d', strtotime($zzxx[0]->ptime)) }}@endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $zzxx[0]->pseekpc }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ $zzxx[0]->parea }}{{ $zzxx[0]->plantUnit}}</td>
                <td width="10%" bgcolor="#FFFFFF">@if($zzxx[0]->purchaseDate){{ date('Y-m-d', strtotime($zzxx[0]->purchaseDate)) }}@endif</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ $zzxx[0]->pnum }}</td>
              </tr>
              @else
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="25%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
	  </div>
	  <div class="table">
		<h2 class="til">品牌认证</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="20%" height="39" bgcolor="#f8f8f8">获得时间</td>
                <td width="20%" height="39" bgcolor="#f8f8f8">品牌认证</td>
                <td width="20%" height="39" bgcolor="#f8f8f8">有效时间</td>
                
                <td width="40%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              @if($pprz)
               <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ date('Y-m-d', strtotime($pprz[0]->ptimest)) }}</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ $pprz[0]->pname }}</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ date('Y-m-d', $pprz[0]->ptimeend) }}</td>
                <td width="40%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @else
              <tr>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="40%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
	  </div>
      <div class="table">
		<h2 class="til">施肥记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">肥料名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用法</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用量</td>
                <td width="45%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              @if($sfjl)
              @foreach ($sfjl as $v)
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pnamefei }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pper }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pmun }}{{ $v->unit }}</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">{{ $v->pbeizhu }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
               @endif
            </table>
	  </div>
      <div class="table">
		<h2 class="til">用药记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">药品名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">防治目的</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用法</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">用量</td>
                <td width="30%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              @if ($yyjl)
              @foreach($yyjl as $v)
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pnameper }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pper }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pfrightto }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pmun }}{{ $v->unit }}</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">{{ $v->pbeizhu }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="30%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
	  </div>
      <div class="table">
		<h2 class="til">检测记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">作物名称</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">检测项目</td>
                <td width="9%" bgcolor="#f8f8f8">检测值</td>
                <td width="8%" bgcolor="#f8f8f8">结论</td>
                <td width="14%" height="39" bgcolor="#f8f8f8">检测方式</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">样品数</td>
                <td width="14%" height="39" bgcolor="#f8f8f8">取样地点</td>
                <td width="20%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>            
              @if($jcjl)
              @foreach($jcjl as $v)
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ date('Y-m-d', strtotime($v->ptime)) }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pxiangmu }}</td>
                <td width="9%" bgcolor="#FFFFFF">{{ $v->pend }}</td>
                <td width="8%" bgcolor="#FFFFFF">{{ $v->pafter }}</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">{{ $v->testType }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ $v->pcshi }}{{ $v->unit }}</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">{{ $v->pstate }}</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">{{ $v->pbeizhu }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="9%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="8%" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="14%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="20%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
            </table>
	  </div>
      <div class="table">
		<h2 class="til">采集记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">地块</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">批次</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">数量</td>
                <td width="45%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              @if($cjjl)
              @foreach($cjjl as $v)
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($v->ptime) {{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pname }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pcspc }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pcshi }}{{ $v->unit }}</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">{{ $v->pbeizhu }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="45%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
        </table>
	  </div>
      <div class="table">
		<h2 class="til">销售记录</h2>
		  	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
              <tr class="top">
                <td width="10%" height="39" bgcolor="#f8f8f8">时间</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">批次</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">销售商</td>
                <td width="15%" height="39" bgcolor="#f8f8f8">数量</td>
                <td width="10%" height="39" bgcolor="#f8f8f8">规格</td>
                <td width="35%" height="39" bgcolor="#f8f8f8">备注</td>
              </tr>
              @if($xsjl)
              @foreach($xsjl as $v)
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">@if($v->ptime){{ date('Y-m-d', strtotime($v->ptime)) }}@endif</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->psalepc }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pto }}</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">{{ $v->pnum }}{{ $v->unit }}</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">{{ $v->pclass }}</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">{{ $v->pbeizhu }}</td>
              </tr>
              @endforeach
              @else
              <tr>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="15%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="10%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="35%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              @endif
        </table>
	  </div>
	</div>
</div>
<!--/end 产品溯源-->
</div>
<!--/end wrap-->
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
<script type="text/javascript">
//banner滚动
    $(document).ready(function() {
      $('.box_skitter_large').skitter({
        theme: 'clean',
        numbers_align: 'center',
        progressbar: true, 
        dots: true, 
        preview: true
      });
    });
</script>
</body>
</html>