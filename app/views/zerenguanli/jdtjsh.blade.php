@extends('zerenguanli._layouts.default')
@section('main')
<div class="wrap w85">
<!--投入品审核-->
<div class="block">
    <div class="cont jdtj">
                <table class="shWp">
                    <thead>
                        <tr>
                            <th>乡镇</th>
                            <th>申请时间</th>
                            <th>企业名称</th>
                            <th>地址</th>
                            <th>联系人</th>
                            <th>联系电话</th>
                            <th width="20%">审核</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $value)
                        <tr>
                            <td>{{ $value->townName }}</td>
                            <td>{{date('Y-m-d', strtotime($value->paddtime)) }}</td>
                            <td>{{ $value->companyName }}</td>
                            <td>{{ $value->paddress }}</td>
                            <td>{{ $value->pfaren }}</td>
                            <td>{{ $value->pphone }}</td>                      
                            <td><a href="{{ URL::route('jdtjsh', array('status'=>1, 'companyID'=>$value->companyID)) }}">通过</a><a href="{{ URL::route('jdtjsh', array('status'=>-1, 'companyID'=>$value->companyID)) }}">不通过</a></td>
                        </tr>
                        @endforeach                                               
                    </tbody>
                </table>        
    </div>
</div>
<!--/end 投入品审核-->
@stop