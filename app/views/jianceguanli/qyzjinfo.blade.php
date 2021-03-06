@extends('jianceguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--销售统计-->
        <div class="block">
        	<form>
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
	</div>
	</form>            	<div class="cont jdtj jdtj02">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
  <tr class="top">
                        <td height="65" bgcolor="#efefef">企业名称</td>
                        <td height="65" bgcolor="#efefef">作物名称</td>
                        <td height="65" bgcolor="#efefef">作物批次</td>
                        <td height="65" bgcolor="#efefef">检测时间</td>
                        <td height="65" bgcolor="#efefef">样品数</td>
                        <td height="65" bgcolor="#efefef">检测值 </td>
                        <td height="65" bgcolor="#efefef">检测结论</td>
                        <td height="65" bgcolor="#efefef">上传方式</td>
                    </tr>
                    @foreach($result as $value)
                    <tr>
                    	 <td height="39" >{{$value->companyName}}</td>
                        <td height="39" >{{$value->secTypeName}}</td>
                        <td height="39" >{{$value->pzzpc}}</td>
                        <td height="39" >{{date('Y-m-d', strtotime($value->ptime))}}</td>
                        <td height="39" >{{$value->pcshi}}{{$value->unitName}}</td>
                        <td height="39" >@if($value->pend==1) 合格 @else 不合格 @endif</td>
                        <td height="39" >{{$value->pafter}}</td>
                        <td height="39" >@if($value->ptype==0) 手动 @else 自动 @endif</td>
                    </tr>
                    @endforeach
</table>

	</div>
</div>
<!--/end 销售统计-->
@stop