@extends('admin.layouts.admin_app')
@section('title')前台会员充值历史记录@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">前台会员充值历史记录</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>充值主体</th>
                            <th>充值金额</th>
                            <th>操作人员</th>
                            <th>操作人员IP</th>
                            <th>充值时间</th>
                        </tr>
                        @foreach($chrageLitsts as $chrageLitst)
                            <tr>
                                <td>{{$chrageLitst->id}}.</td>
                                <td>{{$chrageLitst->group}}</td>
                                <td>{{$chrageLitst->score}}</td>
                                <td>{{$chrageLitst->operater}}</td>
                                <td>{{$chrageLitst->ip}}</td>
                                <td>{{$chrageLitst->created_at}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{--!! $adminlists->links() !!--}}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop

