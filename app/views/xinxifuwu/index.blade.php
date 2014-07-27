<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie ie6 lt-ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]>  <html lang="en" class="no-js ie">     <![endif]-->
<!--[if !IE]><!--><html class="no-js">  <!--<![endif]-->
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>信息服务系统</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/skitter.css') }}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-1.7.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.skitter.min.js') }}"></script>
</head>

<body>
<div class="content">
	<div class="box_skitter box_skitter_large">
		<ul>
			<li><img src="{{ URL::asset('images/b1.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/b2.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/b3.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/b4.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/b5.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/b6.jpg') }}"></li>	
			<li><img src="{{ URL::asset('images/b7.jpg') }}"></li>		
		</ul>
	</div>
	<div class="navAd">
		<ul>
			<li class="spe"><img src="{{ URL::asset('images/sy1.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/sy2.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/sy3.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/sy4.jpg') }}"></li>
			<li><img src="{{ URL::asset('images/sy5.jpg') }}"></li>
		</ul>
	</div>
	<div class="proInfo">
		<div class="proL">
			<h2>绿色食品质量安全追溯查询</h2>
			<form name="syform" method="get" action="{{URL::route('cx')}}">
			<div class="searchBig">
					<textarea  class="text" style="resize:none" id="total" name="sn"></textarea>
				<input type="submit" value="立即查询" class="btn" id="chaxun"></div>
			</form>
			<div class="phoneId">
				<ul>
					<li class="phone1"><button value="1" class="calc_int">1</button></li>
					<li class="phone2"><button value="2" class="calc_int">2</button></li>
					<li class="phone3"><button value="3" class="calc_int">3</button></li>
					<li class="phone4"><button value="4" class="calc_int">4</button></li>
					<li class="phone5"><button value="5" class="calc_int">5</button></li>
					<li class="phone6"><button value="6" class="calc_int">6</button></li>
					<li class="phone7"><button value="7" class="calc_int">7</button></li>
					<li class="phone8"><button value="8" class="calc_int">8</button></li>
					<li class="phone9"><button value="9" class="calc_int">9</button></li>
					<li class="phone0"><button value="0" class="calc_int">0</button></li>
					<li class="delete"><button id="calc_clear"></button></li>
					<li class="back"><button id="calc_back"></button></li>
				</ul>
				<div class="down">
				<!--
					<h3>点击链接下载手机查询客户端</h3>
					<p><img src="{{ URL::asset('images/andriod.jpg') }}">Android应用软件下载</p>
					<p><img src="{{ URL::asset('images/apple.jpg') }}">Apple应用软件下载</p>
					<p class="number">手机编辑21位数字追溯码发送至10628654查询</p>
					  -->
					<p class="searchSm">企业编码：<input type="text" placeholder="" class="text"><input type="button" value="查询" class="btn"></p>
				</div>
			</div>
		</div>
		<div class="proR">
			<ul>
				<li><a href="/suggestions"><img src="{{ URL::asset('images/button1.jpg') }}"></a></li>
				<li><a href="/qiyeapply"><img src="{{ URL::asset('images/button2.jpg') }}"></a></li>
				<li><a href="{{ URL::route('jiance.login') }}"><img src="{{ URL::asset('images/button3.jpg') }}"></a></li>
				<li><a href="{{ URL::route('zeren.login') }}"><img src="{{ URL::asset('images/button4.jpg') }}"></a></li>
			</ul>
		</div>
	</div>
<div class="total">
	<h2>区域检测统计</h2>
	<table>
		<thead>
			<tr>
				<th>所属区县市</th>
				<th>检测单位数</th>
				<th>检测累计批次</th>
				<th>累计合格批次</th>
				<th>合格率</th>
			</tr>
		</thead>
		<tbody>
			@foreach($qyjc as $value)
			<tr>
				<td>{{$value->cityName}}</td>
				<td>{{$value->companyNum}}</td>
				<td>{{$value->totalNum}}</td>
				<td>{{$value->qualifiedNum}}</td>
				<td>{{100*($value->qualifiedNum/$value->totalNum)}}%</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>	
<div class="total">
	<h2>溯源企业</h2>
<div class="list">	
	<ul id="company">
		@foreach($syqy as $value)
		<li><a href=""><img src="{{ URL::asset('images/t1.jpg') }}">
			<p>{{$value->pname}}</p>
		</a></li>
		@endforeach
	</ul>
</div>
</div>
<div class="total">
	<h2 class="warm">红名单</h2>
<div class="list">	
	<ul id="warm">
		@foreach($hongb as $value)
		<li><a href=""><img src="{{ URL::asset('images/t1.jpg') }}">
			<p>{{$value->pname}}</p>
		</a></li>
		@endforeach
	</ul>
</div>
</div>
<div class="total">
	<h2>黑名单</h2>
<div class="list">	
	<ul id="black">
		@foreach($heib as $value)
		<li><a href=""><img src="{{ URL::asset('images/t1.jpg') }}">
			<p>{{$value->pname}}</p>
		</a></li>
		@endforeach
	</ul>
</div>
</div>
</div>	
</div>
<div class="footer">
	<p>版权所有：丽水市农业投资发展有限公司   技术支持：某某科技有限公司   联系电话：400-888-8888</p>
</div>
<script type="text/javascript">
//连续滚动
	$.fn.imgscroll = function(o){
	var defaults = {
		speed: 40,
		amount: 0,
		width: 1,
		dir: "left"
	};
	o = $.extend(defaults, o);
	
	return this.each(function(){
		var _li = $("li", this);
		_li.parent().parent().css({overflow: "hidden", position: "relative"}); //div
		_li.parent().css({margin: "0", padding: "0", overflow: "hidden", position: "relative", "list-style": "none"}); //ul
		_li.css({position: "relative", overflow: "hidden"}); //li
		if(o.dir == "left") _li.css({float: "left"});
		
		//初始大小
		var _li_size = 0;
		for(var i=0; i<_li.size(); i++)
			_li_size += o.dir == "left" ? _li.eq(i).outerWidth(true) : _li.eq(i).outerHeight(true);
		
		//循环所需要的元素
		if(o.dir == "left") _li.parent().css({width: (_li_size*3)+"px"});
		_li.parent().empty().append(_li.clone()).append(_li.clone()).append(_li.clone());
		_li = $("li", this);

		//滚动
		var _li_scroll = 0;
		function goto(){
			_li_scroll += o.width;
			if(_li_scroll > _li_size)
			{
				_li_scroll = 0;
				_li.parent().css(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll });
				_li_scroll += o.width;
			}
				_li.parent().animate(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll }, o.amount);
		}
		
		//开始
		var move = setInterval(function(){ goto(); }, o.speed);
		_li.parent().hover(function(){
			clearInterval(move);
		},function(){
			clearInterval(move);
			move = setInterval(function(){ goto(); }, o.speed);
		});
	});
};

$(document).ready(function(){
var oCompany = $("#company li").length,
	oWarm = $("#warm li").length,
	oBlack = $("#black li").length;
	if(oCompany > 5){
		$("#company").imgscroll({
			speed: 40,    //图片滚动速度
			amount: 0,    //图片滚动过渡时间
			width: 1,     //图片滚动步数
			dir: "left"   // "left" 或 "up" 向左或向上滚动
		});
	}
	if(oWarm > 5){
		$("#warm").imgscroll({
			speed: 40,    //图片滚动速度
			amount: 0,    //图片滚动过渡时间
			width: 1,     //图片滚动步数
			dir: "left"   // "left" 或 "up" 向左或向上滚动
		});		
	}
	if(oBlack > 5){
		$("#black").imgscroll({
			speed: 40,    //图片滚动速度
			amount: 0,    //图片滚动过渡时间
			width: 1,     //图片滚动步数
			dir: "left"   // "left" 或 "up" 向左或向上滚动
		});		
	}	
});
</script>
<script type="text/javascript">
//banner滚动
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
</script>
<script type="text/javascript">
//计算器
var a = 0,
  b = 0,
  is_a = true,
  is_b = false,
  o = 'nil',
  answer = 0,
  first_a = true,
  first_b = true,
  is_submission = false,
  soft_sub = false,
  display = jQuery('#total');
function write(x) {
  console.log(x);
}
// add int to current display value
function changeDisplayVal(i) {
  display.text(display.text() + i);
}
// make * into ×
function  visOps(x) {
  if ( x === '*' ) {
    // return 'u00D7';
    return '×';
  } else if ( x === '/' ) {
    // return 'u00F7';
    return '÷';
  } else {
    return x;
  }
}
// set display value
function setDisplayVal(x) {
  display.text( visOps(x));
}

// setting a
function set_a(i) {
  if ( is_a ) {
    // nothing if a duplicate decimal
    if ( i === '.' && a.toString().indexOf('.') !== -1 ) {
      write('Duplicate Decimal');
      i = '';
    } else if ( i === '.' && first_a ) {
      i = '0.';
    }
    // first_a time, we need to clear the display
    if ( first_a === true ) {
      if ( i === '0' ) {
        i = '';
      } else {
        // set display value
        setDisplayVal(i);
        // no longer first_a
        first_a = false;
      }
    } else {
      // add int to current display value
      changeDisplayVal(i);
    }

    a = display.text();

    write('Set "a" to ' + a);
  }
}
// resetting calculator
function reset_calc() {
  a = 0;
  b = 0;
  o = 'nil';
  answer = 0;
  is_a = true;
  is_b = false;
  first_a = true;
  first_b = true;
  is_submission = false;
  soft_sub = false;
  display.text("");

  // reset display value
  setDisplayVal();

  write('Calculator Reset');
}

// backspacing value
function backspace() {
  if ( display.text() !== '' && display.text() !== '0' ) {
    display.text( display.text().substring(0, display.text().length - 1) );
    if ( is_a === true ) {
        a = parseFloat(a.toString().substring(0, a.toString().length - 1 ));
    } else {
        b = parseFloat(b.toString().substring(0, b.toString().length - 1 ));
    }
  } else {
    write('Nothing Left to Backspace');
  }
}
// click integers
jQuery('.calc_int').each(function() {
  jQuery(this).click(function() {
    var value = jQuery(this).val();
    if ( is_submission === false ) {
      if ( is_a === true ) {
        set_a(value);
      } else {
        set_b(value);
      }
    } else {
      reset_calc();
      set_a(value);
    }
  });
});
// click clear
jQuery('#calc_clear').click(function() {
  reset_calc();
});

// click backspace
jQuery('#calc_back').click(function() {
  backspace();
});

// keydown for backspace and return
jQuery(document).keydown(function (e) {

  // the character code
  var charCode = e.which;

  // backspace
  if ( charCode === 8 ) {
    backspace();
    animateButton(jQuery('#calc_back'));
    return false;
  }

  // clear
  if ( charCode === 12 ) {
    reset_calc();
    animateButton(jQuery('#calc_clear'));
    return false;
  }
});
$("#chaxun").click(function(){
	window.location.href="cx.html";
})

</script>
</body>
</html>