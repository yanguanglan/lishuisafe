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
                    <p><a href="{{URL::route('zrwgsend', array('workerID'=>$workerID, 'type'=>1))}}" class="{{Request::is('zerenguanli/zrwgsend*') ? 'active' : null}}">下达任务</a></p>
                </li>
            </ul>
        </div>
  <div class="platWp">
<!--              <div class="platC">
                <div class="platT">
                    <input type="button" value="发送" class="btn">
                </div>
            </div> -->
            <form name="addtask" method="post" enctype="multipart/form-data">
            <div class="platInfo">
                <h2>下达任务至：</h2>
                <p>
                    @if($workerName!='')
                     <div class="addressee clearfix">
                        <span data-id="{{$workerID}}">{{$workerName}}<i>×</i></span>
                     </div>
                    @else
                    <div class="addressee clearfix"></div>
                    @endif
                    <input type="hidden" value="" id="toUsersID" name="toUsersID" />
                </p>
                <h2>通知标题：</h2>
                <p>
                    <input type="text" value="" name="title" />
                </p>
                <h2>附件▼</h2>
                <!--<div class="btn-normal btn-upload">-->
                	<!--<span>上传附件</span>
	                <label for="uploadfile">上传附件:</label>
	                <input class="fileupload" id="fileupload" type="file" name="file[]" multiple />-->
                    <label for="uploadfile">上传附件:</label>
                    <input type="file" name="attach" value="">
                <!--</div>-->
                <table class="table-normal upload-table"></table>
                <h2>内容：</h2>
                    <!-- 加载编辑器的容器 -->
                <p><textarea  id="container" class="info2" name="content"></textarea></p>
                <input id="send-msg" type="submit" value="发送" class="btn">
            </div>
        </form>
        </div> 
        <div class="platR contacts-select">
            <h2>选择</h2>
            <ul class="otherR">
                <li class="class"><span>级别:</span>
                <select>
                <option value="1">丽水市领导</option>
                <option value="2">县区领导</option>
                <option value="3">乡镇工作人员</option>
            </select></li>
                <li class="area"><span>县区:</span>
                <select>
                    @foreach($org as $v)
	                <option value="{{$v->ID}}">{{$v->pname}}</option>                    
                    @endforeach
                </select></li>
                <li class="company"><span>单位:</span>
            	<select>
            		@foreach($list as $v)
                    <option value="{{$v->ID}}">{{$v->pname}}</option>                    
                    @endforeach
            	</select></li>
                <li class="bumen"><span>部门:</span>
                <select>
               @foreach($dep as $v)
                    <option value="{{$v->ID}}">{{$v->pname}}</option>                    
                @endforeach
            </select></li>
                
            </ul>
            <ul class="contacts">
                @foreach($user as $v)
                <li data-id = "{{$v->ID}}">{{$v->pname}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <script src="{{ URL::asset('js/umeditor.config.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/umeditor.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/zh-cn.js') }}" type="text/javascript" charset="utf-8"></script>
    <!--umeditor-end-->
        <!--fileupload-->
    <script src="{{ URL::asset('js/jquery.ui.widget.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/jquery.iframe-transport.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/jquery.fileupload.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        
        select($(".class select"));
        $(".class select").change(function(){
            select($(this));
        });
        function select(obj){
            var opt = obj.val();
            if( opt =="3"){
                //填充县区数据
                $(".area").show();
            }else{
                $(".area").hide();
                //填充部门数据
                $.post(
                        "{{URL::route('zrwgajaxsend')}}",
                        {   
                            "action": "list",
                            "type": opt,
                            "cityID": 1,
                        },
                        function( data ) {
                            $(".company select").html(data.result)   
                        },
                        'json'
                    ); 
            }
        }
        //联级
        $(".area select").change(function(){
            //填充部门数据
                $.post(
                        "{{URL::route('zrwgajaxsend')}}",
                        {   
                            "action": 'list',
                            "type": 3,
                            "cityID": $(this).val(),
                        },
                        function( data ) {
                            $(".company select").html(data.result)   
                        },
                        'json'
                    );
        });

        $(".company select").change(function(){
            //填充单位数据
                $.post(
                        "{{URL::route('zrwgajaxsend')}}",
                        {   
                            "action": 'gov',
                            "govID": $(this).val(),
                        },
                        function( data ) {
                            $(".bumen select").html(data.result)    
                        },
                        'json'
                    );
        });


        $(".bumen select").change(function(){
            //填充部门数据
                $.post(
                        "{{URL::route('zrwgajaxsend')}}",
                        {   
                            "action": 'dep',
                            "departID": $(this).val(),
                        },
                        function( data ) {
                            $(".contacts").html(data.result)  
                        },
                        'json'
                    );
        })
    
        //添加收件人
        $(".contacts").on("click","li",function(){
            var addr = $(this).text();
            var data_id = $(this).attr("data-id");
            var addressee = $(".addressee");
            if($(this).hasClass("selected")) return;
            var html = "<span data-id="+data_id+">"+addr+"<i>×</i></span>";
            addressee.append(html);
            $(this).addClass("selected");//标记
        });
        
        $(".addressee").on("click","i",function(){
            $(this).parent().remove();
            var data_id = $(this).parent().attr("data-id");
            var contacts = $(".contacts");
            contacts.find("li[data-id="+data_id+"]").removeClass("selected");//根据data-id识别身份
        });

    </script>
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
            ,initialFrameWidth:640
            ,initialFrameHeight:300
        });
        
        /* 获取编辑器内容 */
       $("#send-msg").click(function(){
        var llist = [];
            $(".addressee").find('span').each(function () {
                llist.push($(this).attr('data-id'));
            });
            $("#toUsersID").val(llist.join(','));
            //alert(UM.getEditor('container').getContent());
       });
        
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
@stop