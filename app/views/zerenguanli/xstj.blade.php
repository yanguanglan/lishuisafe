@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--销售统计-->
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
            <input type="submit" value="查询" class="searBtn" />
        </div>
    </div>
    <div class="cont jdtj">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td width="91" height="65" align="center" bgcolor="#f7f7f7" class="thHead">
                <span  class="hy">行业</span>
                <span class="xq">县区</span>
            </td>
            @foreach ($types as $typeItem)

            <td height="65" align="center" bgcolor="#f7f7f7"><a href="{{ URL::route('xstjinfo', array('city'=>0, 'type'=>$typeItem->ID, 'year'=>$year, 'keyword'=>$keyword)) }}" target="_blank">{{$typeItem->pname}}</a></td>
           @endforeach
            <td height="65" align="center" bgcolor="#f7f7f7">合计</td>
          </tr>
          @foreach ($result as $item)
          <tr>
            <td width="91" height="39" align="center" class="td01"><a href="{{ URL::route('xstjinfo', array('city'=>$item->cityID, 'type'=>0, 'year'=>$year, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->cityName }}</a></td>
            @foreach (check_type($types, $item->numInfo) as $key => $val)
            <td height="39" align="center"><a href="{{ URL::route('xstjinfo', array('city'=>$item->cityID, 'type'=>$key, 'year'=>$year, 'keyword'=>$keyword)) }}" target="_blank">{{ $val }}</a></td>
            @endforeach
             <td height="39" align="center"><a href="{{ URL::route('xstjinfo', array('city'=>$item->cityID, 'type'=>0, 'year'=>$year, 'keyword'=>$keyword)) }}" target="_blank">{{ $item->num }}</a></td>
          </tr>
          @endforeach
        </table>

    </div>
</div>
<!--/end 销售统计-->
</div>
@stop