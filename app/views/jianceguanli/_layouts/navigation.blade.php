<div class="bread w85">
	<ul>
		<li class="{{ Request::is('jianceguanli/jcrw*') ? 'active' : null }}"><a href="{{ URL::route('jcrw') }}">检测任务</a></li>
		<li class="{{ Request::is('jianceguanli/jdjc*') ? 'active' : null }}"><a href="{{ URL::route('jdjc') }}">监督检测</a></li>
		<li class="{{ Request::is('jianceguanli/qysj*') ? 'active' : null }}"><a href="{{ URL::route('qysj') }}">企业送检</a></li>
		<li class="{{ Request::is('jianceguanli/qyzj*') ? 'active' : null }}"><a href="{{ URL::route('qyzj') }}">企业自检</a></li>
		<li class="{{ Request::is('jianceguanli/zhtj*') ? 'active' : null }}"><a href="{{ URL::route('zhtj') }}">综合统计</a></li>
		<li class="{{ Request::is('jianceguanli/cstj*') ? 'active' : null }}"><a href="{{ URL::route('cstj') }}">按场所统计</a></li>
		<li class="{{ Request::is('jianceguanli/qytj*') ? 'active' : null }}"><a href="{{ URL::route('qytj') }}">按区域统计</a></li>
		<li class="{{ Request::is('jianceguanli/qsfx*') ? 'active' : null }}"><a href="{{ URL::route('qsfx') }}">趋势分析</a></li>
		<li class="{{ Request::is('jianceguanli/dbfx*') ? 'active' : null }}"><a href="{{ URL::route('dbfx') }}">对比分析</a></li>
	</ul>
</div>
<!--/end bread-->