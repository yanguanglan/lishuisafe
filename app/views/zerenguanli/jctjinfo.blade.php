@extends('zerenguanli._layouts.default')
@section('main')

  <div class="wrap w85">
        <!--检测统计-->
        <div class="block">
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
	</div>            <div class="cont jdtj jdtj02">
                <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
                    <tr class="top">
                        <td height="65" bgcolor="#efefef">企业名称</td>
                        <td height="65" bgcolor="#efefef">作物名称</td>
                        <td height="65" bgcolor="#efefef">作物批次</td>
                        <td height="65" bgcolor="#efefef">检测时间</td>
                        <td height="65" bgcolor="#efefef">样品数</td>
                        <td height="65" bgcolor="#efefef">结论 </td>
                        <td height="65" bgcolor="#efefef">检测方式</td>
                        <td height="65" bgcolor="#efefef">地点</td>
                        <td height="65" bgcolor="#efefef">上传方式</td>
                    </tr>

                    @foreach ($result as $value)
                    <tr>
                        <td height="39" >{{$value->companyName}}</td>
                        <td height="39" >{{$value->secTypeName}}</td>
                        <td height="39" >{{$value->pzzpc}}</td>
                        <td height="39" >{{ date('Y-m-d', strtotime($value->ptime)) }}</td>
                        <td height="39" >{{$value->pcshi}}</td>
                        <td height="39" >{{$value->pafter}}</td>
                        <td height="39" >@if($value->testType==0)自检@elseif($value->testType==1)送检@else抽检@endif</td>
                        <td height="39" >{{$value->pstate}}</td>
                        <td height="39" >@if($value->ptype==0)检测设备自动上传@else手动输入@endif</td>          
                    </tr>
          			@endforeach
                </table>

            </div>
        </div>
<!--/end 检测统计-->
@stop