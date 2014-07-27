@extends('jianceguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--防治统计-->
<div class="block">
	<form>
	<div class="search">
		<div class="searchFl searchFl01">
			<em>区域：</em>
				<div class="seBox address">
	               <select name="city">
				                @foreach ($user_citylist as $v)
				        <option value="{{$v->ID}}" @if ($v->ID == $city) selected="selected" @endif>{{$v->pname}}</option>
				                @endforeach
				      </select>
               </div>
   <div class="calendar" style="display:inline;">
                <em style="padding: 0;float:left;margin-top:5px;">检查时间：</em>
  <span>
    <input name="startDate" type="text" id="control_date" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $startDate }}">至</span>

               <span>
                   <input name="endTime" type="text" id="control_date2" size="15"
                       maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value="{{ $endTime }}" /></span> 
      </div> 		
			<input type="submit" value="统计" class="searBtn"/>
			<input type="submit" value="Excel" class="searBtn" />
			 
		</div>	
	</div>
	</form>
		<div class="cont jdtj white">
		<div class="chart">
			<img src="{{ URL::asset('images/chart02.jpg') }}" />
		</div>

	</div>
</div>
<!--/end 防治统计-->
</div>
<!--/end wrap-->
<script type="text/javascript">
	$(function(){
		//基本统计 隔行换色
		$(".jdtj table tr:even").css("backgroundColor","#fbfbfb");
		$(".jdtj table tr:odd").css("backgroundColor","#ffffff"); 
		//模态框
			
		$(".cont table tr td a").click(function(){
			$(".model").fadeIn();
			var modelHeight=parseInt($(".model .cont").outerHeight());
			var	winHeight=parseInt($(window).height());
			var marTop=(winHeight - modelHeight) / 2;
			$(".model .cont").css({
				marginTop:marTop + "px"
			})
		})
		$(".model .cont .close").click(function(){
			$(".model").fadeOut();
		})
	})
/*$(function(){
        var d = new Date(),
        vYear = d.getFullYear(),
        vMon = d.getMonth() + 1,
        vDay = d.getDate();
        end=vYear+"-"+(vMon<10 ? "0" + vMon : vMon)+"-"+(vDay<10 ? "0"+ vDay : vDay);
        star=vYear+"-"+(vMon<10 ? "0" + vMon : vMon)+"-"+1;
        $("#control_date2").val(end);
        $("#control_date").val(star);	
})	*/
</script>
@stop