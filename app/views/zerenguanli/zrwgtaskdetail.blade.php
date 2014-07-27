@extends('zerenguanli._layouts.default')
@section('main')
 <div class="w85">
        <div class="notice">
            <ul class="otherU">
              <!--  <li><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID))}}" class="{{ Request::is('zerenguanli/zrwgmail*') && ($type!=1) ? 'active' : null }}">我的信箱</a>
                    <p><a href="{{URL::route('zrwgmail', array('workerID'=>$workerID, 'type'=>1))}}" class="{{ (Request::is('zerenguanli/zrwgmail*') && ($type==1)) ? 'active' : null }}">星标信件</a></p>
                </li>-->
                <li><a href="{{URL::route('zrwgtask', array('workerID'=>$workerID))}}" class="{{ Request::is('zerenguanli/zrwgtask*') && ($type!=1) ? 'active' : null }}">任务跟踪</a>
                    <p><a href="{{URL::route('zrwgtask', array('workerID'=>$workerID, 'type'=>1))}}" class="{{ Request::is('zerenguanli/zrwgtask*') && ($type==1) ? 'active' : null }}">星标任务</a></p>
                </li>
                <li>
                    <!--<a href="{{URL::route('zrwgmail', array('workerID'=>$workerID, 'type'=>1))}}">发送信息</a>-->
                    <p><a href="{{URL::route('zrwgtasksend', array('workerID'=>$workerID))}}">下达任务</a></p>
                </li>
            </ul>
        </div>
  <div class="platWp platO">
            <div class="platInfo addInfo">
                <h2 class="newsT">{{$result[0]->ptitle}}
                    <a href="javascript:;" id="add">邀请加入任务组</a></h2>
                <p>发起人：{{$result[0]->fromName}}</p>
                <p class="task-group">任务组成员：{{$result[0]->participantsInfo}}</p>
                <div class="infoWp">
                    {{$result[0]->pconent}}
                <ul class="tag">
                    @if($attach)
                    @foreach($attach as $v)
                    <li><a class="annex" href="{{$v->ppfile}}">{{$v->pname}}</a></li>
                    @endforeach
                    @endif
                </ul>
                @if($feedback)
                 <?php
                 $i = 0;
                ?>
                @foreach($feedback as $v)
                               <div class="starWp">
                    <ul>
                        <li>来自：{{$v->feedUserName}}</li>
                        <li>回复时间：{{date('Y-m-d H:i:s', strtotime($v->ptime))}}</li>
                        <!--<li><span>评分：</span>
                                    <img src="images/star.gif" title="很差" />
                                    <img src="images/star.gif" title="一般" />
                                    <img src="images/star.gif" title="不错" />
                                    <img src="images/star.gif" title="好评" />
                                    <img src="images/star.gif" title="赞一个" />
                        </li>-->
                    </ul> 
                    <p class="newR">{{$v->pconent}}</p>                   
                    <ul class="tag">
                        <li><a class="annex" href="{{URL::asset($v->filePath)}}">{{$v->fileName}}</a> <span>{{++$i}}楼</span></li>
                    </ul>                        
                </div> 
                @endforeach
                @endif
                <form name="feedback" method="post" enctype="multipart/form-data">
              <div class="starWp">
                    <ul>
                        <li><input type="radio" name="pend" value="1" @if($result[0]->pend==1) checked="checked" @endif 
                            @if($result[0]->iduserfrom!=Session::get('userid') || $result[0]->pend==1) disabled="disabled" @endif />完结</li>
                        <li><input type="radio" name="pend" value="0" @if($result[0]->pend==0) checked="checked" @endif 
                            @if($result[0]->iduserfrom!=Session::get('userid') || $result[0]->pend==1) disabled="disabled" @endif />进行中</li>
                        <!--<li onmouseover="rate(this,event)"><span>评分：</span>  <img src="images/star.gif" title="很差" />
                                    <img src="images/star.gif" title="一般" />
                                    <img src="images/star.gif" title="不错" />
                                    <img src="images/star.gif" title="好评" />
                                    <img src="images/star.gif" title="赞一个" />
                        </li>-->
                    </ul>
                   @if($result[0]->pend==0)
                    <p>回复</p>
                    <textarea class="text" name="content" id="container" style="width:100%; height: 100px;margin-bottom:20px;"></textarea>
                    <!--<div class="btn-normal btn-upload">-->
                        <!--<span>上传附件</span>-->
                        <label for="uploadfile">上传附件:</label>
                        <input type="file" name="attach" value="">
                        <!--<input class="fileupload" id="fileupload" type="file" name="file[]" multiple />-->
                    <!--</div>-->
                    <table class="table-normal upload-table"></table>
                    
                    <input type="submit" id="send-msg" value="提交" class="btn">
                    @endif
                </div> 
            </from>
                </div>
            </div>
        </div>
    </div>
<div class="shadow" style="display:none;"></div> 
<div class="alertWp" style="display:none;">
    <h2>选择联系人<i class="icoClose"></i></h2>
    <div class="listBox">
        @if($contact)
        <?php
        $list = array();
        foreach($contact as $v){
            $list[$v->govName][] = $v;
        }
        ?>
        <div class="listL">
            <ul id="contact_li">
                @foreach($list as $k=>$v)
                <li class="groups"><span><i>▶</i>{{$k}}</span>
                    <ul class="sub" style="display:none;">
                        @foreach($v as $vv)
                        <li data-id = "{{$vv->userID}}">{{$vv->userName}}</li>
                       @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
       </div>
        <div class="listR">
            <p>已选联系人：<span class="count">0</span></p>
            <ul id="select_li"></ul>
        </div>
    </div> 
  <!--umeditor-->
    <script src="{{ URL::asset('js/umeditor.config.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/umeditor.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/zh-cn.js') }}" type="text/javascript" charset="utf-8"></script>
    <!--umeditor-end-->
        <!--fileupload-->
    <script src="{{ URL::asset('js/jquery.ui.widget.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/jquery.iframe-transport.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/jquery.fileupload.js') }}" type="text/javascript" charset="utf-8"></script>
    <!--fileupload-end-->
    <!-- 实例化编辑器代码 -->
<script type="text/javascript">
    $(function(){
        window.um = UM.getEditor('container', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar:['source | undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
            'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
            '| justifyleft justifycenter justifyright justifyjustify |',
            'link unlink | emotion image video  | map',
            '| horizontal print preview', 'drafts', 'formula']
        });
        
        /* 获取编辑器内容 */
      /* $("#send-msg").click(function(){
            alert(UM.getEditor('container').getContent());
       });*/
        
    });
</script>
<script>
//上传附件
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '//jquery-file-upload.appspot.com/';
        var tmpl = '<tr class="template-upload fade">'+
                        '<td>'+
                            '<span class="preview">预览图</span>'+
                        '</td>'+
                       ' <td>'+
                            '<p class="name">文件名</p>'+
                            '<strong class="error text-danger"></strong>'+
                        '</td>'+
                        '<td>'+
                            '<p class="size">上传进度...</p>'+
                            '<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">'+
                                '<div class="progress-bar progress-bar-success" style="width:50%;"></div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<button class="btn start">开始</button>'+
                            '<button class="btn cancel">取消</button>'+
                        '</td>'+
                    '</tr>'

        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            add: function (e, data) {
                data.context = $('.upload-table').append(tmpl);
                data.submit();
            },
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    //$('<p/>').text(file.name).appendTo('#files');
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>
<script type="text/javascript"> 
function rate(obj,oEvent){ 

    var imgSrc = 'images/star.gif'; 
    var imgSrc_2 = 'images/star-hover.gif'; 

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
        @if($result[0]->pend==1)
        alert('任务已完结！');
        @else
        $(".shadow").show();
        $(".alertWp").show();
        _task_member.initialization();
        @endif
    })
    $(".icoClose").click(function(){
        $(".shadow").hide();
        $(".alertWp").hide();  
        _task_member.add_member();
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
        @if($result[0]->pend==0)
        $("#add").click(function(){ 
            popup($(".alertWp"));
        });
        @endif
});
$(function(){
     getTab();
})
function getTab(){
    $(".listL .groups span").click(function(){
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

//联系人选择
$(".listL").on("click",".sub li",function(){
    var _this = $(this);
    var name = _this.text();
    var data_id = _this.attr("data-id");
    var html = "<li data-id="+data_id+">"+name+"</li>";
    var count = $(".listR .count");
    var select_li = $("#select_li");
    if(!_this.hasClass("selected")){
        select_li.append(html);
        count.text(select_li.find("li").length);
    }
    _this.addClass("selected");
    //添加
     $.post(
            "{{URL::route('zrwgtaskadd')}}",
            {
                "userid": data_id,
                "type": 1,
                "taskID": {{$taskID}}
            },
            function( data ) {     if(data.status!=1) {
                alert(data.msg);
            }
            },
            'json'
        );
});

//取消联系人选择
$("#select_li").on("click","li",function(){
    var member = $(this).text();
    var contact = $("#contact_li");
    var count = $(".listR .count");
    $(this).remove();
    var data_id = $(this).attr("data-id");
    contact.find("li[data-id="+data_id+"]").removeClass("selected");
    count.text($("#select_li li").length);
    //删除
     $.post(
            "{{URL::route('zrwgtaskadd')}}",
            {
                "userid": data_id,
                "type": 0,
                "taskID": {{$taskID}}
            },
            function( data ) {
                if(data.status!=1) {
                alert(data.msg);
            }
            },
            'json'
        );
});

//联系人查询筛选
$(".search-member").keyup(function(){
    var _input = $(this).val();
    var list = $("#contact_li");
    if(!_input){
        list.find("li,p").show().end().find(".sub").hide();
        return;
    }
    list.find("li,.sub,p").hide();
    list.find(":contains("+_input+")").each(function(){
        $(this).show().parent().show();
    });
});
var _task_member = {
    add_member:function (){//添加任务组成员
        var task = $(".task-group");
        task.find("span").remove();
        $("#select_li li").each(function(){
            var menber = $(this).text();
            var data_id = $(this).attr("data-id");
            task.append("<span data-id="+data_id+">"+menber+"</span>");
            
        });
    },
    initialization:function (){//邀请框初始化
        var task = $(".task-group");
        var list = $("#select_li");
        var count = $(".listR .count");
        list.html("");
        count.text(task.find("span").length);
        task.find("span").each(function(){
            var member = $(this).text();
            var data_id = $(this).attr("data-id");
            list.append("<li data-id="+data_id+">"+member+"</li>");
            $("#contact_li").find("li[data-id="+data_id+"]").addClass("selected");
        });
    }
    
}
</script> 
@stop