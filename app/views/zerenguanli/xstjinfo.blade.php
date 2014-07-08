@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--销售统计-->
        <div class="block">
	<div class="search">
		<div class="searchFl">
	 <div class="calendar">
                <em style="padding: 0;float:left;margin-top:5px;">检测时间：</em>
  <span>
    <input name="startDate" type="text" id="control_date" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $startDate }}">至</span>

               <span>
                   <input name="endTime" type="text" id="control_date2" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $endTime }}" /></span> 
      </div> 			
		</div>
		<div class="searchFr">
			<span>农业企业关键字：</span>
			<input name="keyword" type="text" value="{{ $keyword }}" class="searInp" />
			<input name="city" type="hidden" value="{{ $city }}" class="searInp" />
			<input name="type" type="hidden" value="{{ $type }}" class="searInp" />
			<input type="submit" value="查询" class="searBtn" />
		</div>
	</div>            	<div class="cont jdtj jdtj02">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
  <tr class="top">
    <td height="65" align="center" bgcolor="#efefef" >品种</td>
    <td height="65" bgcolor="#efefef">企业名称</td>
    <td height="65" bgcolor="#efefef">时间</td>
    <td height="65" bgcolor="#efefef">产品批次</td>
    <td height="65" bgcolor="#efefef">数量</td>
    <td height="65" bgcolor="#efefef">单价</td>
    <td height="65" bgcolor="#efefef">合计</td>    
    <td height="65" bgcolor="#efefef">采购商</td>
    <td height="65" bgcolor="#efefef">采购商电话</td>
  </tr>
<?php
      $pnames = array();
      foreach ($result as $value) {
      	$pnames[$value->pname][] = $value;
      }
      ?>
      @foreach ($pnames as $k => $v)
     <?php 
      $i = 0;
      $count = count($v);
      $nn = $pp = $tt = 0
     ?>
      @foreach ($v as $value)
      	<tr>
      		@if($i==0)
      	<td align="center" rowspan="{{ $count+1 }}" >{{ $k }}</td>
      		<?php $i=1;
      		$unit = $value->unit;
      		?>
         @endif
      		<td>{{ $value->companyName }}</td>
      		<td height="39" >{{ date('Y-m-d', strtotime($value->ptime)) }}</td>
      		<td height="39" >{{ $value->psalepc }}</td>
      		<td height="39" >{{ $value->pnum }}{{ $value->unit }}</td>
      		<td height="39" >{{ $value->pprice }}</td>
      		<td height="39" >{{ $value->totalPrice }}</td>
      		<td height="39" >{{ $value->pto }}</td>
      		<td height="39" >{{ $value->phone }}</td>
        </tr>
      <?php
      $nn += $value->pnum;
      $pp += $value->pprice;
      $tt += $value->totalPrice;
      ?>  
   	  @endforeach
	   	 <tr>
	    <td height="39" >合计</td>
	    <td height="39" ></td>
	    <td height="39" ></td>
	    <td height="39" >{{$nn}}{{$unit}}</td>
	    <td height="39" >{{$pp/$count}}</td>
	    <td height="39" >{{$tt}}</td>
	    <td height="39" ></td>
	    <td height="39" ></td> 
	    </tr>
      @endforeach
</table>

	</div>
</div>
<!--/end 销售统计-->
@stop