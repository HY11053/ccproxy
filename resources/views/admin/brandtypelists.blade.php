@extends('admin.layouts.admin_app')
@section('title')品牌类型列表@stop
@section('head')
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">品牌类型列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>分类名称</th>
                            <th>分类别名</th>
                            <th style="width: 120px; text-align: center;">操作</th>
                        </tr>
                        @foreach($brandtypelists as $brandtypelist)
                            <tr>
                                <td>{{$brandtypelist->id}}.</td>
                                <td>{{$brandtypelist->brandtype}}</td>
                                <td>{{$brandtypelist->brandname}}</td>
                                <td style="text-align: center;">
                                    <a href="/admin/brandtype/edit/{{$brandtypelist->id}}"><span class="label label-success" style="font-weight: normal">编辑</span></a>
                                    <a href="/admin/brandtype/delete/{{$brandtypelist->id}}"><span style="font-weight: normal" class="label label-danger">删除</span></a>
                                </td>
                            </tr>
                            <tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>

@stop
