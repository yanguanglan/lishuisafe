@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--基地统计-->
<div class="block">
<form>
    <div class="search">
		<div class="searchFl">
			<select name="year">
                @foreach (get_year() as $v)
				<option value="{{$v}}" @if ($v == $year) selected="selected" @endif>{{$v}}年度</option>
                @endforeach
			</select>
			
		</div>
		<div class="searchFr">
			<span>农业企业关键字：</span>
			<input name="keyword" type="text" value="{{ $keyword }}" class="searInp" />
			<input name="city" type="hidden" value="{{ $city }}" class="searInp" />
			<input name="type" type="hidden" value="{{ $type }}" class="searInp" />
			<input type="submit" value="查询" class="searBtn" />
		</div>
	</div>
</form>
<div class="cont jdtj jdtj02">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
      <tr class="top">
        <td width="91" height="65" bgcolor="#efefef"  class="thHead thHead02">
            <span  class="hy">类别</span>
            <span class="xq">乡镇</span>
        </td>
        <td height="65" bgcolor="#efefef">企业名称</td>
        <td width="30%" height="65" bgcolor="#efefef">地址</td>
        <td width="78" height="65" bgcolor="#efefef">面积</td>
        <td width="98" height="65" bgcolor="#efefef">联系人</td>
        <td width="10%" height="65" bgcolor="#efefef">联系电话</td>
        <td width="98" height="65" bgcolor="#efefef">备案日期</td>
      </tr>
      <?php
      $company = array();
      foreach ($result as $value) {
      	$company[$value->townName][] = $value;
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
      	<td width="91" rowspan="{{ $count }}" >{{ $k }}</td>
      		<?php $i=1;?>
         @endif
      		<td height="39" >{{ $value->pname }}</td>
      		<td height="39" >{{ $value->paddress }}</td>
      		<td height="39" >{{ $value->parea }}{{ $value->unit }}</td>
      		<td height="39" >{{ $value->pfaren }}</td>
      		<td height="39" >{{ $value->pphone }}</td>
      		<td height="39" >{{ date('Y-m-d', strtotime($value->ptime)) }}</td>
        </tr>
   	  @endforeach
      @endforeach
    </table>

	</div>
</div>
<!--/end 基地统计-->
</div>
@stop