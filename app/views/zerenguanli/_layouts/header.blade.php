<div class="header">
	<div class="cont w85">
		<div class="welcome">欢迎您，<span class="name">{{Session::get('username')}}</span>！   <a href="{{URL::to('/logout')}}">退出</a></div>
		<div class="address">区域：{{Session::get('belongArea')}}</div>
	</div>
</div>
<!--/end header-->