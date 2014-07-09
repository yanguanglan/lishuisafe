@extends('zerenguanli._layouts.default')
@section('main')
 <div class="w85">
        <div class="notice">
            <ul class="otherU">
                <li><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID))}}" class="{{ Request::is('zerenguanli/zrwgmail*') && ($type!=1) ? 'active' : null }}">我的信箱</a>
                    <p><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID, 'type'=>1))}}" class="{{ (Request::is('zerenguanli/zrwgmail*') && ($type==1)) ? 'active' : null }}">星标信件</a></p>
                </li>
                <li><a href="{{URL::route('zrwgtask', array('workerID'=>$workerID))}}" class="{{ Request::is('zerenguanli/zrwgtask*') && ($type!=1) ? 'active' : null }}">任务跟踪</a>
                    <p><a href="{{URL::route('zrwgtask', array('workerID'=>$workerID, 'type'=>1))}}" class="{{ Request::is('zerenguanli/zrwgtaskdetail*') && ($type==1) ? 'active' : null }}">星标任务</a></p>
                </li>
                <li><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID, 'type'=>1))}}">发送信息</a>
                    <p><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID, 'type'=>1))}}">下达任务</a></p>
                </li>
            </ul>
        </div>
          <div class="platWp platO">
            <div class="platInfo addInfo">
                <h2 class="newsT">福建漳州芗城区农业局开展水产品质量安全宣传活动<a href="javascript:;" id="add">邀请加入任务组</a></h2>
                <p>发起人：农业局    审核人：张晓芳</p>
                <div class="infoWp">
                    <p>你的印象笔记帐户已准备就绪！ <br>想更充分利用印象笔记吗？那就把它安装在家里和办公室的电脑上，自己的手机和平板上，随时随地轻松访问吧！</p>
                <p>在电脑、手机或平板上打开这封电子邮件，并点击以下链接。我们将会根据你所使用的设备为你提供相应的印象笔记版本。</p>
                <p>你的印象笔记帐户已准备就绪！<br>
想更充分利用印象笔记吗？那就把它安装在家里和办公室的电脑上，自己的手机和平板上，随时随地轻松访问吧！</p>
                    <p>你的印象笔记帐户已准备就绪！ <br>想更充分利用印象笔记吗？那就把它安装在家里和办公室的电脑上，自己的手机和平板上，随时随地轻松访问吧！</p>
                <p>在电脑、手机或平板上打开这封电子邮件，并点击以下链接。我们将会根据你所使用的设备为你提供相应的印象笔记版本。</p>
                <p>你的印象笔记帐户已准备就绪！<br>
想更充分利用印象笔记吗？那就把它安装在家里和办公室的电脑上，自己的手机和平板上，随时随地轻松访问吧！</p>
                <ul class="tag">
                    <li><a href="">最新工作安排表</a></li>
                    <li><a href="">二期工程施工图纸</a></li>
                </ul>
                <div class="starWp">
                    <ul>
                        <li>来自：王局长</li>
                        <li>回复时间：2014-6-25</li>
                        <li onmouseover="rate(this,event)"><span>评分：</span>  <img src="images/star.gif" title="很差" />
                                    <img src="images/star.gif" title="一般" />
                                    <img src="images/star.gif" title="不错" />
                                    <img src="images/star.gif" title="好评" />
                                    <img src="images/star.gif" title="赞一个" />
                        </li>
                    </ul> 
                    <p class="newR">看完天安门城楼大概沿着长安街往东走一站路就是王府井大街，一条商务步行街，类似于上海南京路，成都春熙路。百货大楼林立，老字号商铺一应俱全。</p>                   
                    <ul class="tag">
                        <li><a href="">最新工作安排表</a></li>
                        <li><a href="">二期工程施工图纸</a><span>1楼</span></li>
                    </ul>                        
                </div> 
                <div class="starWp">
                    <ul>
                        <li>来自：王局长</li>
                        <li>回复时间：2014-6-25</li>
                        <li onmouseover="rate(this,event)"><span>评分：</span>  <img src="images/star.gif" title="很差" />
                                    <img src="images/star.gif" title="一般" />
                                    <img src="images/star.gif" title="不错" />
                                    <img src="images/star.gif" title="好评" />
                                    <img src="images/star.gif" title="赞一个" />
                        </li>
                    </ul> 
                    <p class="newR">看完天安门城楼大概沿着长安街往东走一站路就是王府井大街，一条商务步行街，类似于上海南京路，成都春熙路。百货大楼林立，老字号商铺一应俱全。</p>                   
                    <ul class="tag">
                        <li><a href="">最新工作安排表</a></li>
                        <li><a href="">二期工程施工图纸</a><span>2楼</span></li>
                    </ul>                        
                </div> 
              <div class="starWp">
                    <ul>
                        <li><input type="radio" name="" />完结</li>
                        <li><input type="radio" name="" />进行中</li>
                        <li onmouseover="rate(this,event)"><span>评分：</span>  <img src="images/star.gif" title="很差" />
                                    <img src="images/star.gif" title="一般" />
                                    <img src="images/star.gif" title="不错" />
                                    <img src="images/star.gif" title="好评" />
                                    <img src="images/star.gif" title="赞一个" />
                        </li>
                    </ul>
                    <p>回复</p>
                    <textarea class="text"></textarea>
                    <a href="" class="upload">上传附件</a>
                    <input type="submit" value="提交" class="btn">
                </div>                                               
                </div>
            </div>
        </div>
        <div class="shadow" style="display:none;"></div> 
<div class="alertWp" style="display:none;">
    <h2>选择联系人<i class="icoClose"></i></h2>
    <div class="listBox">
        <div class="listL">
            <input type="text" placeholder="">
            <ul>
                <li><span><i>▶</i>我的好友</span>
                    <div class="sub" style="display:none;">
                        <p>一君</p>
                        <p>二君</p>
                        <p>三君</p>
                        <p>四君</p>
                        <p>五君</p>
                    </div>
                </li>
                <li><span><i>▶</i>小学同学</span>
                    <div class="sub" style="display:none;">
                        <p>一君2</p>
                        <p>二君3</p>
                        <p>三君4</p>
                        <p>四君3</p>
                        <p>五君5</p>
                    </div>
                </li>
                <li><span><i>▶</i>初中同学</span>
                    <div class="sub" style="display:none;">
                        <p>一君e</p>
                        <p>二君a</p>
                        <p>三君e</p>
                        <p>四君a</p>
                        <p>五君b</p>
                    </div>
                </li>
                <li><span><i>▶</i>高中同学</span>
                    <div class="sub" style="display:none;">
                        <p>一君4</p>
                        <p>二君1</p>
                        <p>三君5</p>
                        <p>四君5</p>
                        <p>五君2</p>
                    </div>
                </li>
                <li><span><i>▶</i>大学同学</span>
                    <div class="sub" style="display:none;">
                        <p>一君fd</p>
                        <p>二君a</p>
                        <p>三君f</p>
                        <p>四君z</p>
                        <p>五君4</p>
                    </div>
                </li>
                <li><span><i>▶</i>同事</span>
                    <div class="sub" style="display:none;">
                        <p>一君2</p>
                        <p>二君4</p>
                        <p>三君yt</p>
                        <p>四君8</p>
                        <p>五君e</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="listR">
            <p>已选联系人：7/60</p>
            <ul>
                <li>小张</li>
                <li>小刘</li>
                <li>张三</li>
                <li>李四</li>
                <li>王二</li>
                <li>赵五</li>
                <li>孙六</li>
                <li>吴七</li>
            </ul>
        </div>
    </div>
    </div>
@stop
<script type="text/javascript"> 
function rate(obj,oEvent){ 

    var imgSrc = '{{URL::asset('images/star.gif')}}'; 
    var imgSrc_2 = '{{URL::asset('images/star-hover.gif')}}'; 

    if(obj.rateFlag) return; 
    var e = oEvent || window.event; 
    var target = e.target || e.srcElement;  
    var imgArray = obj.getElementsByTagName("img"); 
    for(var i=0;i<imgArray.length;i++){ 
        imgArray[i]._num = i; 
        imgArray[i].onclick=function(){ 
            if(obj.rateFlag)
            return; 
            obj.rateFlag=true; 
            //alert(this._num+1); 
        }; 
    } 
    
    if(target.tagName=="IMG"){ 
        for(var j=0;j<imgArray.length;j++){ 
            if(j<=target._num){ 
                imgArray[j].src=imgSrc_2; 
            }else{ 
                imgArray[j].src=imgSrc; 
            } 
        } 
    }else{ 
        for(var k=0;k<imgArray.length;k++){ 
            imgArray[k].src=imgSrc; 
        } 
    } 
    
} 
$(function(){
    $("#add").click(function(){
        $(".shadow").show();
        $(".alertWp").show();
    })
    $(".icoClose").click(function(){
        $(".shadow").hide();
        $(".alertWp").hide();       
    })    
})
function popup(popupName){
var _scrollHeight =  $(document).scrollTop(),//获取当前窗口距离页面顶部高度
    _windowHeight = $(window).height(),//获取当前窗口高度
    _windowWidth = $(window).width(),//获取当前窗口宽度
    _popupHeight = popupName.height(),//获取弹出层高度
    _popupWeight =  popupName.width();//获取弹出层宽度
    _posiTop =(_windowHeight - _popupHeight)/2+ _scrollHeight; _posiLeft =(_windowWidth -  _popupWeight)/2; popupName.css({"left": _posiLeft +"px","top":_posiTop +"px","display":"block"});//设置
      position}
      $(function(){ 
        $("#add").click(function(){ 
            popup($(".alertWp"));
        });
});
$(function(){
     getTab();
})
function getTab(){
    $(".listL ul li span").click(function(){
        if($(this).next().css("display")=="none")
        {
            $(".sub").slideUp();
            $(this).parent().find(".sub").slideDown();
            $(this).parent().find("i").html("▼");
        }
        else
        {
            $(this).parent().find(".sub").slideUp();
            $(this).parent().find("i").html("▶");
        }
    })
    $(".orga ul li").click(function(){
        var nIndex = $(".orga ul li").index(this);
        $(this).addClass("active").siblings().removeClass("active");
    })
}      
</script> 