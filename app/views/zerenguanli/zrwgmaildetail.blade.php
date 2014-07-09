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
                <h2 class="newsT">{{$result[0]->ptitle}}</h2>
                <p>发起人：{{$result[0]->fromName}}    审核人：{{$result[0]->toName}}</p>
                <div class="infoWp">
                    {{$result[0]->pconent}}
                <ul class="tag">
                    <li><a href="">最新工作安排表</a></li>
                    <li><a href="">二期工程施工图纸</a></li>
                </ul>
                <div class="starWp">
                    <ul>
                        <li><input type="radio" name="" />通过</li>
                        <li><input type="radio" name="" />不通过</li>
                        <li onmouseover="rate(this,event)"><span>评分：</span>  <img src="{{URL::asset('images/star.gif')}}" title="很差" />
                                    <img src="{{URL::asset('images/star.gif')}}" title="一般" />
                                    <img src="{{URL::asset('images/star.gif')}}" title="不错" />
                                    <img src="{{URL::asset('images/star.gif')}}" title="好评" />
                                    <img src="{{URL::asset('images/star.gif')}}" title="赞一个" />
                        </li>
                    </ul>
                    <p>审核意见</p>
                    <textarea class="text"></textarea>
                    <input type="submit" value="提交" class="btn">
                </div>
                </div>
            </div>
        </div>
    </div>
@stop