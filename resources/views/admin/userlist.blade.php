@extends('admin.layouts.admin_app')
@section('title')前台会员列表
@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">后台用户列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>用户名</th>
                            <th>账号</th>
                            <th>所属公司</th>
                            <th>旗下品牌</th>
                            <th>最近充值</th>
                            <th>充值操作</th>
                            <th>剩余积分</th>
                            <th>总计充值</th>
                            <th>创建时间</th>
                            <th>更改时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($userlists as $userlist)
                        <tr>
                            <td>{{$userlist->id}}.</td>
                            <td>{{$userlist->name}}</td>
                            <td>{{$userlist->email}}</td>
                            <td>{{$userlist->group}}</td>
                            <td>{{$userlist->brandname}}</td>
                            <td>{{$userlist->score}}</td>
                            <td>{{$userlist->email}}</td>
                            <td>{{$userlist->remain_score}}</td>
                            <td>{{$userlist->total_score}}</td>
                            <td>{{$userlist->created_at}}</td>
                            <td>{{$userlist->updated_at}}</td>
                            <td class="newcolor"><span class="badge bg-green"><a href="/admin/user/edit/{{$userlist->id}}">编辑</a></span></td>
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

