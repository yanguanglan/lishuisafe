@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--数据分析-->
<div class="block">
	<div class="search">
		<ul>
			<li>基地统计</li>
			<li>生成成本分析</li>
			<li>销售分析</li>
			<li>测数据分析</li>
		</ul>
	</div>
	<div class="cont sjfx">
		<div class="box">
			<div class="btn"><a href="dataInfo.html">基地数量变化分析</a></div>
			<div class="btn"><a href="dataInfo.html">基地面积变化分析</a></div>
			<div class="btn"><a href="dataInfo.html">基地负责人年龄变化</a></div>
		</div>
		<div class="box">
			<div class="btn"><a href="dataInfo.html">劳动力成本分析</a></div>
			<div class="btn"><a href="dataInfo.html">化肥价格分析</a></div>
			<div class="btn"><a href="dataInfo.html">农药价格分析</a></div>
			<div class="btn"><a href="dataInfo.html">劳动陈本和产量分析</a></div>
			<div class="btn"><a href="dataInfo.html">化肥量和产量分析</a></div>
			<div class="btn"><a href="dataInfo.html">农药量和产量分析</a></div>
			<div class="btn"><a href="dataInfo.html">肥料价格分析</a></div>
			
		</div>
		<div class="box">
			<div class="btn"><a href="dataInfo.html">销售均价分析</a></div>
			<div class="btn"><a href="dataInfo.html">采购商数量分析</a></div>
			<div class="btn"><a href="dataInfo.html">单次采购量分析</a></div>
			<div class="btn"><a href="dataInfo.html">成交量和价变化分析</a></div>
			
		</div>
		<div class="box">
			<div class="btn"><a href="dataInfo.html">机构检测分析</a></div>
			<div class="btn"><a href="dataInfo.html">企业上传数据分析</a></div>
		</div>
	</div>
</div>

<!--/end 数据分析-->
</div>
@stop