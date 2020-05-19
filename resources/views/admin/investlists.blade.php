@extends('admin.layouts.admin_app')
@section('title')投资分类列表@stop
@section('head')
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">投资分类列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>分类名称</th>
                            <th style="width: 120px; text-align: center;">操作</th>
                        </tr>
                        @foreach($investlists as $investlist)
                            <tr>
                                <td>{{$investlist->id}}.</td>
                                <td>{{$investlist->type}}</td>
                                <td style="text-align: center;">
                                    <a href="/admin/investment/edit/{{$investlist->id}}"><span class="label label-success" style="font-weight: normal">编辑</span></a>
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
