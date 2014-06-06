@extends('zerenguanli._layouts.default')
@section('assets')
@parent
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sorce.css')}}">
@stop
@section('main')
<div class="w85">
  <div class="notice">
            <ul>
                <li class="active"><a href="">机构信息</a>
                </li>
                <li><a href="">农企信息</a>
                </li>
                <li><a href="">机构员工信息</a>
                </li>
            </ul>
        </div>
        <div class="platWp" style="width: 78%;">
            <div class="platC">
                <div class="setS">
                    <input type="text" placeholder="所在乡镇" name="" class="text" />
                    <input type="button" value="搜索" class="btn" />
                </div>
                <div class="platT">
                    <input type="button" value="+新增" class="btn">
                </div>
            </div>
            <div class="platInfo setInfo">
                <table>
                    <thead>
                        <tr>
                            <th width="25%">单位名称</th>
                            <th width="36%">地址</th>
                            <th width="14%">电话</th>
                            <th width="11%">所在区</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="25%"></td>
                            <td width="36%"></td>
                            <td width="14%"></td>
                            <td width="11%"></td>
                            <td><a href="">[编辑]</a><a href="">[删除]</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@stop