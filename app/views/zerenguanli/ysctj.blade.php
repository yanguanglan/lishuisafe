@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--预生产统计-->
<div class="block">
<form>
    <div class="search">
    <div class="searchFl">
      <select name="year">
                @foreach (get_year() as $v)
        <option value="{{$v}}" @if ($v == $year) selected="selected" @endif>{{$v}}年度</option>
                @endforeach
      </select>
       <select name="month">
                @for($i=1; $i<=12; $i++)
                <?php
                $j = $i;
                if ($i<10) {
                    $j = '0'.$i;
                }
                ?>
         <option value="{{$j}}" @if ($j == $month) selected="selected" @endif>{{$i}}月份</option>       
                @endfor
      </select>
    </div>
    <div class="searchFr">
      <span>计量单位（重量）相关农产品：</span>
      <input name="keyword" type="text" value="{{ $keyword }}" class="searInp" />
      <input type="submit" value="查询" class="searBtn" />
    </div>
  </div>
</form>
    <div class="cont jdtj">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td width="91" height="65" align="center" bgcolor="#f7f7f7" class="thHead">
                <span  class="hy">行业</span>
                <span class="xq">县区</span>
            </td>
            @foreach ($type as $typeItem)

            <td height="65" align="center" bgcolor="#f7f7f7"><a href="{{ URL::route('ysctjinfo', array('city'=>0, 'type'=>$typeItem->ID, 'year'=>$year, 'month'=>$month,'keyword'=>$keyword)) }}" target="_blank">{{$typeItem->pname}}</a></td>
           @endforeach
            <td height="65" align="center" bgcolor="#f7f7f7">合计</td>
          </tr>
          <?php 
          $total = array();
          $total_sum = 0;
          ?>
          @foreach ($result as $item)
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>0, 'year'=>$year, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->cityName }}</a></td>
            @foreach (check_type($type, $item->totalInfo) as $key => $val)
            <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>$key, 'year'=>$year, 'month'=>$month,'keyword'=>$keyword)) }}" target="_blank">{{ $val }}</a></td>
            <?php
            if (isset($total[$key])) {
                    $total[$key]+= $val;
            } else {
                $total[$key] = $val;
            }
            ?>
            @endforeach
             <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>$item->cityID, 'type'=>0, 'year'=>$year, 'month'=>$month,'keyword'=>$keyword)) }}" target="_blank">{{ $item->yushouTotal }}</a></td>
          </tr>
          <?php $total_sum += $item->yushouTotal; ?>
          @endforeach
          @if ($total_sum>0)
          <td width="91" height="39" align="center" class="td01">总计</td>
          @endif
           @foreach ($total as $k => $v)
               <td height="39" align="center"><a href="{{ URL::route('ysctjinfo', array('city'=>0, 'type'=>$k, 'year'=>$year, 'month'=>$month, 'keyword'=>$keyword)) }}" target="_blank">{{ $v }}</a></td>
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