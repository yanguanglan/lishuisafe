@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--责任网格-->
<div class="block">
<form>
<div class="search">
		<div class="searchFl spe">
        <em class="label">县区</em>
			<select name="cityID">
                @foreach ($area as $v)
        <option value="{{$v->ID}}" @if ($v->ID == $cityID) selected="selected" @endif>{{$v->pname}}</option>
                @endforeach
      </select>
			<input type="submit" value="查询" class="searBtn">
		</div>
	</div>
</form>
	<div class="cont jdtj">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
          <tr class="top">
            <td height="65" width="105" align="center" bgcolor="#f7f7f7">市</td>
            <td height="65" align="center" bgcolor="#f7f7f7">部门</td>
            <td height="65" align="center" bgcolor="#f7f7f7">负责人</td>
            <td height="65" align="center" bgcolor="#f7f7f7">电话</td>
            <td height="65" align="center" bgcolor="#f7f7f7">操作</td>
          </tr>
          <?php
          $cityCount = count($city);
          $i = 0;
          ?>
          @foreach ($city as $value)
          <tr>
            <?php 
            if($i == 0) {
            ?>
            <td height="39" align="center" rowspan="{{$cityCount}}">丽水市</td>
            <?php
            $i = 1;
            }
            ?>
            <td height="39" align="center">{{$value->departName}}</td>
            <td height="39" align="center">{{$value->userName}}</td>
            <td height="39" align="center">{{$value->pphone}}</td>
            <td height="39" align="center"><span class="power"><a class="msg" href="{{URL::route('zrwgmail', array('workerID'=>$value->ID))}}"></a>@if($value->noReadNum)<i>{{$value->noReadNum}}</i>@endif</span>@if($value->isLook == 1)<img src="{{URL::asset('images/jg.png')}}" class="jg"/>@endif</td>
          </tr>
          @endforeach
        </table>
        <p>&nbsp;</p><p>&nbsp;</p>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
        <thead class="towns">
        	<tr>
            	<th width="125" height="85" align="center" bgcolor="#f7f7f7"><span>@if($cityID == 0){{$county[0]->cityName}} @else {{ $area[$cityID-1]->pname }} @endif</span></th>
            	<th height="85" align="right" bgcolor="#f7f7f7" colspan="6" class="fri">
                <?php
                $i = 0;
                 ?>
                @foreach ($county as $value)
                <?php
                if($i == 1) {
                ?>
                 <span class="line">|</span>
                <?php
                $i = 1;
                }
                ?>
                <span class="power">@if($value->pneedjg ==1)局长@else质管科@endif：{{$value->userName}}  电话：{{ $value->pmobile }}<a class="msg" href="{{URL::route('zrwgmail', array('workerID'=>$value->ID))}}"></a>@if($value->noReadNum)<i>{{$value->noReadNum}}</i>@endif</span>@if($value->isLook == 1)<img src="{{URL::asset('images/jg.png')}}" class="jg"/>@endif
                @endforeach
              </th>
            </tr>
        </thead>
          <tr class="top">            
            <td height="65" align="center" bgcolor="#f7f7f7">乡镇</td>
            <td height="65" align="center" bgcolor="#f7f7f7">科室</td>
            <td height="65" align="center" bgcolor="#f7f7f7">负责人</td>
            <td height="65" align="center" bgcolor="#f7f7f7">电话</td>
            <td height="65" align="center" bgcolor="#f7f7f7">手机</td>
            <td height="65" align="center" bgcolor="#f7f7f7">已处理</td>
            <td height="65" align="center" bgcolor="#f7f7f7">未处理</td>
          </tr>  
          <?php
            $towns = array();
            foreach ($town as $value) {
              $towns[$value->pname][] = $value;
            }
          ?>
          @foreach ($towns as $k => $v)
          <?php
          $i = 0;
          $count = count($v);
          ?>
           @foreach ($v as $value)
          <tr>  
           @if($i==0)         
            <td height="39" align="center" rowspan="{{$count}}">{{$k}}</td>
            <?php 
            $i=1;
            ?>
           @endif
            <td height="39" align="center">{{$value->departName}}</td>
            <td height="39" align="center">{{$value->userName}}</td>
            <td height="39" align="center">{{$value->pphone}}</td>
            <td height="39" align="center">{{$value->pmobile}}</td>
            <td height="39" align="center">@if($value->deal){{$value->deal}}@endif @if($value->isLook == 1)<img src="{{URL::asset('images/jg.png')}}" class="jgs"/> @endif</td>
            <td height="39" align="center">@if($value->nodeal){{$value->nodeal}} @endif @if($value->isLook == 1)<img src="{{URL::asset('images/jg.png')}}" class="jgs"/> @endif</td>
          </tr>
          @endforeach
          @endforeach                         
        </table>
	</div>
</div>
<!--/end 责任网格-->
@stop