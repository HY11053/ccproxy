@extends('admin.layouts.admin_app')
@section('title')  友情链接管理@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">友情链接列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>网址</th>
                            <th>网站名称</th>
                            <th>联系方式</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                        @foreach($links as $link)
                        <tr>
                            <td>{{$link->id}}.</td>
                            <td>{{$link->weburl}}</td>
                            <td>{{$link->webname}}</td>
                            <td>{{$link->address}}</td>
                            <td>{{$link->note}}</td>
                            <td class="newcolor"><span class="badge bg-green"><a href="/admin/flink/edit/{{$link->id}}">编辑</a></span> <span class="badge bg-red"><a href="/admin/flink/delete/{{$link->id}}">删除</a> </span></td>
                        </tr>
                       @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $links->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop


