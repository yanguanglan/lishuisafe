@extends('jianceguanli._layouts.default')
@section('main')
<div class="wrap w85">
<div class="wrap">
<!--基地统计-->
<div class="block">
	<form>
		<div class="examine clearfix">
		    <h2  class="title">送检数据录入</h2>
		    <div class="batch"><span>产品批次</span><input class="input-normal" type="text" name="" /><input class="btn-normal" type="button" name="" value="确定" /></div>
		</div>
		<div class="cont">
	    <table class="table-normal table-noborder">
	    	<tbody>
	        <tr>
	            <th>生产厂家：</th>
	            <td><input class="input-text2" type="text" name="" /></td>
	            <th>厂家电话：</th>
	            <td><input class="input-text2" type="text" name="" /></td>
	        </tr>
	 
	        <tr>
	            <th>产品名称：</th>
	            <td><input class="input-text2" type="text" name="" /></td>
	            <th>种子品种：</th>
	            <td><input class="input-text2" type="text" name="" /></td>            
	        </tr>
	        <tr>
	            <th>种植时间：</th>
	            <td><input class="input-text2" type="text" name="" /></td>
	            <th>采收时间：</th>
	            <td><input class="input-text2" type="text" name="" /></td>            
	        </tr>
	        </tbody>
	      </table>
	      
	      <table class="table-normal">
	      	<caption>施肥施药过程</caption>
	      	<tbody>
	      		<tr>
	      			<th>时间</th>
	      			<th>名称</th>
	      			<th>用量</th>
	      			<th>安全间隔时间</th>
	      		</tr>
	      		<tr>
	      			<td></td>
	      			<td></td>
	      			<td></td>
	      			<td></td>
	      		</tr>
	      		<tr>
	      			<td></td>
	      			<td></td>
	      			<td></td>
	      			<td></td>
	      		</tr>
	      		</tbody>
	      	</table>
	      	<table class="table-normal table-noborder">
	      		<tbody>
	      			<tr>
	      				<th>送检人</th>
	      				<td><input class="input-text2" type="text" name="" value="" /></td>
	      				<th>检测时间</th>
	      				<td><input class="input-text2" name="control_date" type="text" id="control_date" size="10"
                           maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" value=""></span></td>
	      				<th>检测用量</th>
	      				<td>
	      					<input class="input-text2" type="text" name="" value="" style="width:100px;" />
	      					<select class="select">
	      						<option>请选择单位</option>
	      					</select>
	      				</td>
	      			</tr>
	      			<tr>
	      				<th>检测人</th>
	      				<td><input class="input-text2" type="text" name="" value="" /></td>
	      				<th>检测地点</th>
	      				<td><input class="input-text2" type="text" name="" value="" /></td>
	      				<th>检测地类型</th>
	      				<td>
	      					<select class="select">
	      						<option>请选择</option>
	      					</select>
	      				</td>
	      			</tr>
	      		</tbody>
	      	</table>
	      			
  			<table class="table-normal item-detail">
  				<caption>检测项目明细</caption>
  				<thead>
  					<tr>
  						<th>项目名称</th>
  						<th>检测值</th>
  						<th>结论</th>
  					</tr>
  				</thead>
  				<tbody></tbody>
  			</table>
  			<table class="table-normal table-noborder add-item-detail">
  				<tbody>
  					<th>检测项目</th>
  					<td><select class="select">
  						<option>农药残留检测</option>
  						<option>甲醛检测</option>
  						<option>吊白块检测</option>
  						<option>过氧化氢检测</option>
  						<option>盐酸克伦特罗与莱克多巴胺检测</option>
  						<option>硼砂检测</option>
  						<option>合成色素检测</option>
  						<option>二氧化硫检测</option>
  						<option>亚硝酸盐检测</option>
  						<option>肉类水分含量检测</option>
  					</select>
  					<input class="input-text2" type="text" value="定性" disabled="disabled" style="width:3em;" />
  					</td>
  					<th>检测值</th>
  					<td><input class="input-text2" type="text" name="" value="" /></td>
  					<th>结论</th>
  					<td>
      					<select class="select">
      						<option>合格</option>
      						<option>不合格</option>
      					</select>
  					</td>
  					<td><input class="btn-normal" id="add_item_detail" type="button" value="增加" /></td>
  				</tbody>
  			</table>
	      	<input class="input-btn2" type="submit" value="提交" />

	</div>
	</form>
</div>
<!--/end 基地统计-->
</div>
<!--/end wrap-->
</div>

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.skitter.min.js"></script>
<script type="text/javascript" src="js/Calendar.js"></script>
<script src="js/select.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	//banner滚动
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: false, 
				dots: true, 
				preview: true,
				animation: 'random'
			});
			
			//时间控件
			var d = new Date(),
	        vYear = d.getFullYear(),
	        vMon = d.getMonth() + 1,
	        vDay = d.getDate();
	        star=vYear+"-"+(vMon<10 ? "0" + vMon : vMon)+"-"+1;
	        $("#control_date").val(star);
	        
	        //检测项目明细增加
	        $("#add_item_detail").click(function(){
	        	var input = $(".add-item-detail").find("input").eq(1);
	        	var select = $(".add-item-detail").find("select");
	        	var name = select.eq(0);
	        	var result = select.eq(1);
	        	if(!name.val()) return;
	        	var html = '<tr>'
  						+'<td>'+name.val()+'</td>'
  						+'<td>'+input.val()+'</td>'
  						+'<td>'+result.val()+'</td>'
  					+'</tr>';
	        	$(".item-detail tbody").append(html);
	        	input.val("");
	        });
		});
</script>
<script type="text/javascript">
	window.onload = setup;
	var s=["s1","s2","s3"];
	var opt0=["选择省份","选择市","选择地区"];
	function setup()
	{
		for(i=0;i<s.length-1;i++)
		{
			document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
		}
		change(0);
		document.getElementById("s1").selectedIndex = 6;
		change(1);
	}
	
</script>
@stop