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
      </div> 
    </div>
    <span>作物关键字：</span>
    <input name="keyword" type="text" value="{{ $keyword }}" class="searInp" />
    <input type="submit" value="查询" class="searBtn" />
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

            <td height="65" align="center" bgcolor="#f7f7f7"><a href="{{ URL::route('ysctjinfo', array('city'=>0, 'type'=>$typeItem->ID, 'startDate'=>$startDate, 'endTime'=>$endTime)) }}" target="_blank">{{$typeItem->pname}}</a></td>
           @endforeach
            <td height="65" align="center" bgcolor="#f7f7f7">合计</td>
          </tr>
          <?php 
          $total = array();
          $total_sum = 0;
          ?>
          @foreach ($result as $item)
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>0, 'startDate'=>$startDate, 'endTime'=>$endTime)) }}" target="_blank">{{ $item->cityName }}</a></td>
            @foreach (check_type($types, $item->totalInfo) as $key => $val)
            <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>$key, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $val }}</a></td>
            <?php
            if (isset($total[$key])) {
                    $total[$key]+= $val;
            } else {
                $total[$key] = $val;
            }
            ?>
            @endforeach
             <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>0, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->yushouTotal }}</a></td>
          </tr>
          <?php $total_sum += $item->yushouTotal; ?>
          @endforeach
          @if ($total_sum>0)
          <td width="91" height="39" align="center" class="td01">总计</td>
          @endif
           @foreach ($total as $k => $v)
               <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>0, 'type'=>$k, 'startDate'=>$startDate, 'endTime'=>$endTime, 'keyword'=>$keyword)) }}" target="_blank">{{ $v }}</a></td>
           @endforeach
           @if ($total_sum>0)
           <td height="39" align="center">{{ $total_sum }}</td>
           @endif
        </table>
    </div>
</div>
<!--/end 预生产统计-->
</div>
@stop