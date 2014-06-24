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
        <td height="65" bgcolor="#efefef">采购单位</td>
        <td height="65" bgcolor="#efefef">采购时间</td>
        <td height="65" bgcolor="#efefef">已用量</td>
        <td height="65" bgcolor="#efefef">规格</td>
        <td height="65" bgcolor="#efefef">批号</td>
        <td height="65" bgcolor="#efefef">生产日期</td>
        <td  height="65" bgcolor="#efefef">供应商</td>
        <td height="65" bgcolor="#efefef">供应商电话</td>
      </tr>
       <?php
      	$count = count($result);
      	$u = $i = 0;
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
        <td height="39" >{{ date('Y-m-d', strtotime($value->saleTime)) }}</td>
        <td height="39" >{{$value->useNum}}{{$value->useUnit}}</td>
        <td height="39" >{{$value->spec}}{{$value->specUnit}}</td>
        <td height="39" >{{$value->ppeckpc}}</td>
        <td height="39" >{{ date('Y-m-d', strtotime($value->saleTime)) }}</td>
        <td height="39" >{{$value->pname}}</td>
        <td height="39" >{{$value->pphone}}</td>
      </tr>
       @endforeach
      <tr>
        <td height="39" >合计</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >{{$u}}{{$uUnit}}</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        <td height="39" >&nbsp;</td>
        </tr>
    </table>

	</div>
</div>
<!--/end 采购统计-->
@stop