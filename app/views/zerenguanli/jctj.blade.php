@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--检测统计-->
<div class="block">
	<form name="jctj">
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
			<input type="submit" value="查询" class="searBtn" />
      <span class="searBtn review">待审核<em>{{ $pending[0]->totalNum | 0 }}</em></span>
		</div>
	</div>
</form>
	<div class="cont jdtj">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td width="91" height="65" align="center" bgcolor="#f7f7f7" class="thHead">
                <span  class="hy">产业</span>
                <span class="xq">县区</span>
            </td>
            @foreach ($types as $typeItem)

            <td height="65" align="center" bgcolor="#f7f7f7"><a href="{{ URL::route('jctjinfo', array('city'=>0, 'type'=>$typeItem->ID, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{$typeItem->pname}}</a></td>
           @endforeach
            <td height="65" align="center" bgcolor="#f7f7f7">合计</td>
          </tr>
          @foreach ($result as $item)
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="{{ URL::route('jctjinfo', array('city'=>$item->cityID, 'type'=>0, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->cityName }}</a></td>
            @foreach (check_type($types, $item->numInfo) as $key => $val)
            <td height="39" align="center"><a href="{{ URL::route('jctjinfo', array('city'=>$item->cityID, 'type'=>$key, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $val }}</a></td>
            @endforeach
             <td height="39" align="center"><a href="{{ URL::route('jctjinfo', array('city'=>$item->cityID, 'type'=>0, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->totalNum }}</a></td>
          </tr>
          @endforeach
        </table>

	</div>
</div>
<!--/end 检测统计-->
</div>
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
    window.location.href="{{ URL::route('jctjsh') }}";
})
</script>
@stop