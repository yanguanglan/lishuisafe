@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--预生产统计-->
<div class="block">
<form>
    <div class="search">
    <div class="searchFl">
      <div class="calendar">
                <em style="padding: 0;float:left;margin-top:5px;">预收时间：</em>
  <span>
    <input name="startDate" type="text" id="control_date" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $startDate }}">至</span>

               <span>
                   <input name="endTime" type="text" id="control_date2" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $endTime }}" /></span>          
      <input type="submit" value="查询" class="searBtn"/>
      </div> 
    </div>
  </div>
</form>
<div class="cont jdtj jdtj02">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
      <tr class="top">
        <td width="10%" height="65" bgcolor="#efefef">
            品种
        </td>
        <td height="65" bgcolor="#efefef">企业名称</td>
        <td width="10%" height="65" bgcolor="#efefef">预收时间</td>
        <td width="10%" height="65" bgcolor="#efefef">种植面积</td>
        <td width="10%" height="65" bgcolor="#efefef">预收数量</td>
        <td width="8%" height="65" bgcolor="#efefef">预定数量</td>
        <td width="10%" height="65" bgcolor="#efefef">联系电话</td>
      </tr>
      <?php
      $company = array();
      foreach ($result as $value) {
      	$company[$value->secTypeName][] = $value;
      }
      ?>
      @foreach ($company as $k => $v)
     <?php 
      $i = 0;
      $count = count($v);
     ?>
      @foreach ($v as $value)
      	<tr>
      		@if($i==0)
      	<td width="10%" rowspan="{{ $count }}" >{{ $k }}</td>
      		<?php $i=1;?>
         @endif
      		<td height="39" >{{ $value->companyName }}</td>
      		<td height="39" >{{ date('Y-m-d', strtotime($value->ptimeend)) }}</td>
      		<td height="39" >{{ $value->parea }}{{ $value->areaUnit }}</td>
      		<td height="39" >{{ $value->pyushou }}{{ $value->yushouUnit }}</td>
      		<td height="39" >{{ $value->icmy }}{{ $value->yushouUnit }}</td>
      		<td height="39" >{{ $value->pphone }}</td>
        </tr>
   	  @endforeach
      @endforeach
    </table>

	</div>
</div>
<!--/end 预生产统计-->
</div>
@stop