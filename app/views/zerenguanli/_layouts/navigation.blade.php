<div class="bread w85">
	<ul>
		<li class="{{ Request::is('zerenguanli/zrwg*') ? 'active' : null }}"><a href="{{ URL::route('zrwg') }}">责任网格</a></li>
		<li class="{{ Request::is('zerenguanli/jdtj*') ? 'active' : null }}"><a href="{{ URL::route('jdtj') }}">基地统计</a></li>
		<li class="{{ Request::is('zerenguanli/ysctj*') ? 'active' : null }}"><a href="{{ URL::route('ysctj') }}">预生产统计</a></li>
		<li class="{{ Request::is('zerenguanli/tlpgl*') ? 'active' : null }}"><a href="{{ URL::route('tlpgl') }}">投入品管理</a></li>
		<li class="{{ Request::is('zerenguanli/jctj*') ? 'active' : null }}"><a href="{{ URL::route('jctj') }}">检测统计</a></li>
		<li class="{{ Request::is('zerenguanli/xstj*') ? 'active' : null }}"><a href="{{ URL::route('xstj') }}">销售统计</a></li>
		<li class="{{ Request::is('zerenguanli/cpsy*') ? 'active' : null }}"><a href="{{ URL::route('cpsy') }}">产品溯源</a></li>
		<li class="{{ Request::is('zerenguanli/sjfx*') ? 'active' : null }}"><a href="{{ URL::route('sjfx') }}">数据分析</a></li>
		<li class="{{ Request::is('zerenguanli/xtsz*') ? 'active' : null }}"><a href="{{ URL::route('xtsz') }}">系统设置</a></li>
		<li class="{{ Request::is('zerenguanli/tzgg*') ? 'active' : null }}"><a href="{{ URL::route('tzgg') }}">通知公告</a></li>
	</ul>
</div>
<!--/end bread-->