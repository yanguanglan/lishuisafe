@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--采购统计-->
<div class="block">
	<div class="search">
		<div class="searchFl">
<div class="calendar">
  {{$startDate}}
    至
    {{$endTime}}
</div> 			
	  </div>
	</div>
	<div class="cont jdtj jdtj02">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
      <tr class="top">
      	<td height="65" bgcolor="#efefef">名称 </td>
        <td height="65" bgcolor="#efefef">单位 </td>
        <td height="65" bgcolor="#efefef">使用时间</td>
        <td height="65" bgcolor="#efefef">作物名称</td>
        <td height="65" bgcolor="#efefef">作物批次</td>
        <td height="65" bgcolor="#efefef">用途</td>
        <td height="65" bgcolor="#efefef">用量与方法</td>
        <td height="65" bgcolor="#efefef">备注</td>
      </tr>
       <?php
      	$count = count($result);
      	$u = $i = 0;
        $uUnit = '';
      ?>   
      @foreach ($result as $value)
      <?php
      $u += $value->useNum;
      $uUnit = $value->useUnit;
      ?>
      <tr>
      	@if($i==0)
        <td rowspan="{{ $count }}" >{{ $value->typeName }}</td>
         <?php 
            $i=1;
         ?>
          @endif
        <td height="39" >{{$value->companyName}}</td>
        <td height="39" >{{ date('Y-m-d', strtotime($value->useTime)) }}</td>
        <td height="39" >{{$value->pname}}</td>
        <td height="39" >{{$value->pzzpc}}</td>
        <td height="39" >{{$value->puser}}</td>
        <td height="39" >{{$value->useNum}}{{$value->useUnit}}</td>
        <td height="39" >{{$value->pbeizhu}}</td>
      </tr>
       @endforeach
      <tr>
        <td height="39" >合计</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >{{$u}}{{$uUnit}}</td>
        <td height="39" >&nbsp;</td>
        </tr>
    </table>

	</div>
</div>
<!--/end 采购统计-->
@stop