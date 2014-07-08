@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--检测审核-->
<div class="block">
    <div class="cont jdtj">
                <table class="shWp">
                    <thead>
                        <tr>
                            <th>乡镇</th>
                            <th>上传时间</th>
                            <th>上传企业</th>
                            <th>产品名称</th>
                            <th>溯源码</th>
                            <th>检测项目</th>
                            <th>检测值</th>
                            <th>结论</th>
                            <th width="20%">审核</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $value)
                        <tr>
                            <td>{{ $value->townName }}</td>
                            <td>{{date('Y-m-d', strtotime($value->publishTime)) }}</td>
                            <td>{{ $value->companyName }}</td>
                            <td>{{ $value->productName }}</td>
                            <td>{{ $value->pzzpc }}</td>
                            <td>{{ $value->pxiangmu }}</td>
                            <td>@if($value->pend==1)合格@else不合格@endif</td> 
                            <td>{{ $value->pafter }}</td>                            
                            <td><a href="{{ URL::route('jctjsh', array('status'=>1, 'testType'=>$value->testType, 'testDetailID'=>$value->testDetailID)) }}">通过</a><a href="{{ URL::route('jctjsh', array('status'=>-1, 'testType'=>$value->testType, 'testDetailID'=>$value->testDetailID)) }}">不通过</a></td>
                        </tr>
                        @endforeach                                               
                    </tbody>
                </table>        
    </div>
</div>
<!--/end 检测审核-->
@stop