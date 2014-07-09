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
            <div class="platInfo setInfo">
                <table>
                    <thead>
                         <tr>
                            <th width="25%">时间</th>
                            <th width="36%">标题</th>
                            <th>执行人</th>
                            <th width="14%">反馈数</th>
                            <th width="11%">状态</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($result as $value)
                        <tr>
                            <td width="25%">@if($type==1)<em class="spec"></em>@else<em class="nomal"></em>@endif{{ date('Y-m-d H:i:s', strtotime($value->ptime)) }}</td>
                            <td width="36%"><a href="{{URL::route('zrwgtaskdetail', array('taskID'=>$value->ID, 'workerID'=>$workerID, 'type'=>$type))}}">{{$value->ptitle}}</a></td>
                            <td>{{$value->toName}}</td>
                            <td width="14%">{{$value->feedNum}}</td>
                            <td width="11%">@if($value->pend==0) 审核中 @elseif($value->pend==-1) 不通过 @else 通过 @endif </td>
                        </tr>   
                        @endforeach                   
                    </tbody>
                </table>
                <div class="pagination">
                            <ul>
                                <li class="disabled"><a href="#">&lt;</a></li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">&gt;</a></li>
                                <li><a href="#">末页</a></li>
                            </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/end wrap-->
@stop