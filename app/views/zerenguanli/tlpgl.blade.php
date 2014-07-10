@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--投入品管理-->
<div class="block">
  <form>
	<div class="search">
		<div class="searchFl">
<div class="calendar">
  <span>
    <input name="startDate" type="text" id="control_date" size="10"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $startDate }}">至</span>

               <span>
                   <input name="endTime" type="text" id="control_date2" size="10"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $endTime }}" /></span>
                
			<em>行业：</em>
			<select name="way">
				<option value="1" @if ($way == 1) selected="selected" @endif>肥料</option>
				<option value="2" @if ($way == 2) selected="selected" @endif>饲料</option>
				<option value="3" @if ($way == 3) selected="selected" @endif>农药</option>
				<option value="4" @if ($way == 4) selected="selected" @endif>兽药</option>
				<option value="5" @if ($way == 5) selected="selected" @endif>管制类药品</option>
				<option value="6" @if ($way == 6) selected="selected" @endif>管制类肥料饲料</option>
				<option value="7" @if ($way == 7) selected="selected" @endif>物品批次</option>
			</select>
			<input type="text" name="keyword" value="{{ $keyword }}" class="inp02" />
			<input type="submit" value="查询" class="searBtn"/>
      <span class="searBtn review">待审核<em>{{ $pending[0]->totalNum | 0 }}</em></span>
</div>             
		</div>
		
	</div>
  <form>
	<div class="cont jdtj">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td width="91" height="65" align="center" bgcolor="#f7f7f7">类别</td>
            <td height="65" align="center" bgcolor="#f7f7f7">名称</td>
            <td height="65" align="center" bgcolor="#f7f7f7">型号规格</td>
            <td height="65" align="center" bgcolor="#f7f7f7">采购量</td>
            <td height="65" align="center" bgcolor="#f7f7f7">已使用量</td>
            <td height="65" align="center" bgcolor="#f7f7f7">备注</td>
          </tr>
      <?php
      $types = array();
      $ssUnit = '';
      $uuUnit = '';
      $s = $u = $ss = $uu = 0;
      foreach ($result as $value) {
        $types[$value->typeName][] = $value;
      }
      ?>
      @foreach ($types as $k => $v)
     <?php 
      $i = 0;
      $count = count($v);
      $s = $u = 0;
     ?>
      @foreach ($v as $value)
      <?php 
      $s += $value->saleNum;
      $u += $value->useNum;
      ?>
          <tr>
            @if($i==0)
            <td width="91" height="39" align="center" class="td01" rowspan="{{ $count }}" >{{ $k }}</td>
            <?php 
            $i=1;
            $ssUnit = $value->saleUnit;
            $uuUnit = $value->useUnit
            ?>
            @endif
            <td height="39" align="center">{{$value->productName}}</td>
            <td height="39" align="center">{{$value->spec}}{{$value->specUnit}}</td>
            <td height="39" align="center"><a target="_blank" href="{{ URL::route('tlpglcginfo', array('startDate'=>$startDate, 'endTime'=>$endTime, 'way'=>$way, 'keyword'=>$keyword, 'productID'=>$value->productID)) }}">{{$value->saleNum}}{{$value->saleUnit}}</a></td>
            <td height="39" align="center"><a target="_blank" href="{{ URL::route('tlpglsyinfo', array('startDate'=>$startDate, 'endTime'=>$endTime, 'way'=>$way, 'keyword'=>$keyword,'productID'=>$value->productID)) }}">{{$value->useNum}}{{$value->useUnit}}</a></td>
            <td height="39" align="left">@if($value->pstate == 0)正常@elseif($value->pstate == 1)限制用@else禁用@endif</td>
          </tr>
           @endforeach
           <tr>
            <td height="39" align="center">合计</td>
            <td height="39" align="center"></td>
             <td height="39" align="center"></td>
            <td height="39" align="center">{{ $s }}{{$value->saleUnit}}</td>
            <td height="39" align="center">{{ $u }}{{$value->useUnit}}</td>
            <td height="39" align="left"></td>
          </tr>
          <?php
           $ss += $s;
           $uu += $u;
          ?>
          @endforeach
            <td height="39" align="center">总计</td>
            <td height="39" align="center"></td>
            <td height="39" align="center"></td>
            <td height="39" align="center">{{$ss}}{{$ssUnit}}</td>
            <td height="39" align="center">{{$uu}}{{$uuUnit}}</td>
            <td height="39" align="left"></td>
          </tr>
        </table>

	</div>
</div>
<!--/end 投入品管理-->
<script>
$(document).ready(function(){
    $(".selVa").click(function(){
        $(".seWp").show();
        })
    $(".seWp li").click(function(){
        $(".seWp").hide();
        $(".selVa").val(($(this).text()));     
        })   
    })
$(".review").click(function(){
    window.location.href="{{ URL::route('tlpglsh') }}";
})
</script>
@stop