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
			<input type="submit" value="统计" class="searBtn"/>
			<input type="submit" value="Excel" class="searBtn" />
			<input type="button" id="jcsjll" class="searBtn" value="检测数据录入" />
			 
		</div>	
	</div>
	</form>
	<div class="cont jdtj white">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e3e3e3">
                    <tr class="top">
                        <td height="65" bgcolor="#efefef">检测机构</td>
                        <td height="65" bgcolor="#efefef">区域</td>
                        <td height="65" bgcolor="#efefef">产业</td>
                        <td height="65" bgcolor="#efefef">检测次数</td>
                        <td height="65" bgcolor="#efefef">合格次数</td>
                        <td height="65" bgcolor="#efefef">不合格次数 </td>
                      
                    </tr>
                    @foreach($result as $value)
                    <tr>
                        <td height="39" >{{$value->testInstitution}}</td>
                        <td height="39" >{{$value->cityName }}</td>
                        <td height="39" >{{$value->secTypeName }}</td>
                        <td height="39" ><a href="{{ URL::route('qysjsh', array('institutionID'=> $value->institutionID, 'res'=>2, 'startDate'=>$startDate, 'endTime'=>$endTime, 'usertype'=>$usertype, 'city'=>$city)) }}">{{$value->totalNum }}</a></td>
                        <td height="39" ><a href="{{ URL::route('qysjsh', array('institutionID'=> $value->institutionID, 'res'=>1, 'startDate'=>$startDate, 'endTime'=>$endTime, 'usertype'=>$usertype, 'city'=>$city)) }}">{{$value->qualifiedNum }}</a></td>
                        <td height="39" ><a href="{{ URL::route('qysjsh', array('institutionID'=> $value->institutionID, 'res'=>0, 'startDate'=>$startDate, 'endTime'=>$endTime, 'usertype'=>$usertype, 'city'=>$city)) }}">{{$value->noQualifiedNum }}</a></td>
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
$(function(){
        $("#jcsjll").on("click", function(){
        	window.location.href="/jcsjll"
        });
})
</script>
@stop