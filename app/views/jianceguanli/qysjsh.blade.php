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
	 
			<em>样品产业：</em>
				<div class="seBox check">
	                 <select name="usertype">
				                @foreach ($user_type as $v)
				        <option value="{{$v->ID}}" @if ($v->ID == $usertype) selected="selected" @endif>{{$v->pname}}</option>
				                @endforeach
				      </select>
               </div>			
			<input type="submit" value="Excel" class="searBtn" />
			 
		</div>	
	</div>
	</form>

	<div class="cont jdtj white">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
                      <tr class="top">

                      	<td height="65" bgcolor="#efefef">检测日期</td>
                        <td height="65" bgcolor="#efefef">区域</td>
                        <td height="65" bgcolor="#efefef">检测机构</td>
                       <td height="65" bgcolor="#efefef">被检单位</td>
                        <td height="65" bgcolor="#efefef">送检人</td>
                        <td height="65" bgcolor="#efefef">样品产业</td>
                      
                        <td height="65" bgcolor="#efefef">样品名称</td>
                        <td height="65" bgcolor="#efefef">检测项目 </td>
                         <td height="65" bgcolor="#efefef">检测值 </td>
                        <td height="65" bgcolor="#efefef">检测结论</td>
                    </tr>                    @foreach($result as $value)
                    <tr>
                        <td height="39" >{{date('Y-m-d', strtotime($value->testTime))}}</td>
                        <td height="39" >{{$value->cityName }}</td>
                        <td height="39" >{{$value->testInstitution }}</td>
                         <td height="39" >{{$value->companyName }}</td>
                        <td height="39" >{{$value->psongjian }}</td>
                        <td height="39" >{{$value->secTypeName }}</td>
                         <td height="39" >{{$value->productName }}</td>
                        <td height="39" >{{$value->pxiangmu }}</td>
                         <td height="39" >@if($value->pend==1) 合格 @else 不合格 @endif</td>
                        <td height="39" >{{$value->pafter }}</td>
                    </tr>
                    @endforeach
                </table>
	</div>
</div>
<!--/end 防治统计-->

<div class="model">
	<div class="cont w85">
		<div class="close"><img src="images/xx.png"/></div>
		<div class="articel">
			<h1>根据安排对丽水整个区域的茶叶制品进</h1>
			<div class="des">
				<p>检测性质：例行监测</p>
			</div>
			<div class="articleInfo">
				<p>根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进</p>
				<p>根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进</p>
				<p>根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进根据安排对丽水整个区域的茶叶制品进</p>
			</div>
		</div>
	</div>
</div>
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