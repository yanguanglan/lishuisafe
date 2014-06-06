@extends('zerenguanli._layouts.default')
@section('assets')
@parent
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sorce.css')}}">
@stop
@section('main')
<div class="w85">
<div class="notice">
            <ul>
                <li class="active"><a href="">新发通知</a>
                </li>
                <li><a href="">已收通知</a>
                </li>
                <li><a href="">历史发送</a>
                </li>
            </ul>
        </div>
        <div class="platWp">
            <div class="platC">
                <div class="platT">
                    <input type="button" value="发送通知" class="btn">
                </div>
            </div>
            <div class="platInfo">
                <h2>通知标题：</h2>
                <p>
                    <input type="text" value="全部" name="" />
                </p>
                <h2>通知标题：：</h2>
                <p>
                    <textarea class="info1">内容</textarea>
                </p>
                <h2>抄送标题：</h2>
                <p>
                    <textarea class="info2"></textarea>
                </p>
            </div>
        </div>
        <div class="platR">
            <h2>通知接收单位</h2>
            <ul>
                <li>全部</li>
                <li>莲都区农业局
                    <p>XX镇农业局</p>
                </li>
                <li>龙泉市农业局</li>
            </ul>
        </div>
</div>
@stop