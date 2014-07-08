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
                            <th>上传时间</th>
                            <th>上传企业</th>
                            <th>投入品名称</th>
                            <th>生产批号</th>
                            <th>厂家</th>
                            <th width="20%">审核</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($result as $value)
                        <tr>
                            <td>{{ $value->townName }}</td>
                            <td>{{date('Y-m-d', strtotime($value->uploadTime)) }}</td>
                            <td>{{ $value->companyName }}</td>
                            <td>{{ $value->productName }}</td>
                            <td>{{ $value->pdengji }}</td>
                            <td>{{ $value->pcompany }}</td>                            
                            <td><a href="{{ URL::route('tlpglsh', array('status'=>1, 'logID'=>$value->logID)) }}">通过</a><a href="{{ URL::route('tlpglsh', array('status'=>-1, 'logID'=>$value->logID)) }}">不通过</a></td>
                        </tr>
                       	@endforeach                                               
                    </tbody>
                </table>        
	</div>
</div>
<!--/end 投入品审核-->
@stop