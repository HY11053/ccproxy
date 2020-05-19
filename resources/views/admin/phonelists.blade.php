@extends('admin.layouts.admin_app')
@section('title')电话提交列表@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
<link href="/adminlte/plugins/select2/select2.min.css" rel="stylesheet">
<link href="/adminlte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">电话提交列表{{$phoneNos->total()}} <a href="/admin/phoneexport?{{Request::getQueryString()}}">点击导出当日数据</a></h3>
                    {{Form::open(array('route' => 'phone_filter','files' => false,'class'=>'form-inline pull-right','method'=>'get'))}}
                    <div class="form-group">
                        <div class="input-group date " >
                            <div class="input-group-addon">
                                <i class="fa fa-calendar" style="width:10px;"></i>
                            </div>
                            {{Form::text('start_at', null, array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'开始时间','autocomplete'=>"off",'style'=>'width:100%'))}}
                        </div>
                    </div>
                    <div class="input-group date " >
                        <div class="input-group-addon">
                            <i class="fa fa-calendar" style="width:10px;"></i>
                        </div>
                        {{Form::text('end_at', null, array('class' => 'form-control pull-right','id'=>'datepicker1','placeholder'=>'结束时间','autocomplete'=>"off",'style'=>'width:100%'))}}
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-location-arrow" style="width:10px;"></i>
                            </div>
                            {{Form::select('advertisement', ['jjedu.com.cn'=>'jjedu.com.cn'], null,array('class'=>'form-control select2 pull-right','style'=>'width: 200px;','data-placeholder'=>"筛选域名",'multiple'=>"multiple"))}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">筛选数据</button>
                    {!! Form::close() !!}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped  table-hover dataTable">
                        <thead>
                        <tr role="row">
                            <th style="width: 10px">#ID</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>备注</th>
                            <th>来源</th>
                            <th>提交页面</th>
                            <th>匹配计划</th>
                            <th>匹配单元</th>
                            <th>搜索词</th>
                            <th>匹配关键词</th>
                            <th>归属地</th>
                            <th>提交时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        @foreach($phoneNos as $phoneNo)
                        <tr>
                            <td>{{$phoneNo->id}}.</td>
                            <td>{{$phoneNo->name}}</td>
                            @if(auth('admin')->id()==1)
                                <td>{{$phoneNo->phoneno}}</td>
                            @else
                                <td>{{substr_replace($phoneNo->phoneno,'***',3,3)}}</td>
                            @endif
                            <td>{{str_limit($phoneNo->note,10,'')}}</td>
                           <td title="{{$phoneNo->referer}}">
                               @if(stristr($phoneNo->referer,'baidu') || str_contains($phoneNo->referer,'mipcdn'))
                                   百度
                               @elseif(stristr($phoneNo->referer,'so.com'))
                                   360
                               @elseif(stristr($phoneNo->referer,'sogou'))
                                   搜狗
                               @elseif(stristr($phoneNo->referer,'sm.cn') || str_contains($phoneNo->referer,'sm-tc.cn'))
                               神马
                               @else
                                其他
                               @endif
                           </td>
                            <td>{{str_limit($phoneNo->host,73,'')}}</td>
                            <th>{{$phoneNo->adgroup}}</th>
                            <th>{{$phoneNo->adunit}}</th>
                            <th>{{$phoneNo->keywords}}</th>
                            <th>{{$phoneNo->adkeywords}}</th>
                           <td>{{$phoneNo->ip}}</td>
                            <td>@if($phoneNo->ip) @foreach(\Zhuzhichao\IpLocationZh\Ip::find(trim($phoneNo->ip)) as $index=>$area) @if($index<3){{$area}}-@endif @endforeach @endif</td>
                            <td>{{$phoneNo->created_at}}</td>
                            <td class="newcolor"><span class="badge bg-green"><a href="/admin/phone/edit/{{$phoneNo->id}}">编辑</a></span> <span class="badge bg-red"><a href="/admin/phone/delete/{{$phoneNo->id}}">删除</a> </span></td>
                        </tr>
                       @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $phoneNos->appends($arguments)->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop
@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
    <script src="/adminlte/plugins/select2/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
        $('.select2').select2();
        $(function () {
            $('#datepicker,#datepicker1').datepicker({
                autoclose: true,
                language: 'zh-CN',
                todayHighlight: true
            });
        });
    </script>
@stop
